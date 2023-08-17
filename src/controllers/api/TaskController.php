<?php

namespace alperenbugaz\todo\controllers\api;

use alperenbugaz\todo\models\TaskSearch;
use Yii;
use alperenbugaz\todo\Module;
use alperenbugaz\todo\models\Task;
use portalium\rest\ActiveController as RestActiveController;

class TaskController extends RestActiveController
{
    public $modelClass = 'alperenbugaz\todo\models\Task';

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['dataFilter'] = [
            'class' => \yii\data\ActiveDataFilter::class,
            'searchModel' => $this->modelClass,
        ];

        //before index data filter
        $actions['index']['prepareDataProvider'] = function ($action) {
            $searchModel = new TaskSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            if(!Yii::$app->user->can('todoApitaskIndex')){
                $dataProvider->query->andWhere(['id_user'=>Yii::$app->user->id]);
            }
            return $dataProvider;
        };

        return $actions;
    }

    public function beforeAction($action)
    {
        if (!parent::beforeAction($action)) {
            return false;
        }
        switch ($action->id) {
            case 'view':
                if (!Yii::$app->user->can('todoApitaskView'))
                    throw new \yii\web\ForbiddenHttpException(Module::t('You do not have permission to view this todo.'));
                break;
            case 'create':
                if (!Yii::$app->user->can('todoApitaskCreate'))
                    throw new \yii\web\ForbiddenHttpException(Module::t('You do not have permission to create this todo.'));
                break;
            case 'update':
                if (!Yii::$app->user->can('todoApitaskUpdate'))
                    throw new \yii\web\ForbiddenHttpException(Module::t('You do not have permission to update this todo.'));
                break;
            case 'delete':
                if (!Yii::$app->user->can('todoApitaskDelete'))
                    throw new \yii\web\ForbiddenHttpException(Module::t('You do not have permission to delete this todo.'));
                break;
            case 'index':
                if (!Yii::$app->user->can('todoApitaskIndex') && !Yii::$app->user->can('todoApitaskIndexOwn'))
                    throw new \yii\web\ForbiddenHttpException(Module::t('You do not have permission to view this todo.'));
                break;
        }

        return true;
    }
}