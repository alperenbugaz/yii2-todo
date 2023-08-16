<?php

namespace portalium\todo\controllers\web;
use Yii;
use alperenbugaz\todo\Module;
use portalium\todo\models\Task;
use portalium\todo\models\TaskSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use portalium\web\Controller as WebController;


/**
 * TaskController implements the CRUD actions for Task model.
 */
class TaskController extends WebController
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [ // yalnızca oturum açmış kullanıcılar, HTTP POST isteğiyle "delete" işlemini gerçekleştirebilirler.
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'], //'delete' eyleminin yalnızca POST istekleriyle erişilebilmesi sağlanır.
                    ],
                ],
                'access' => [
                    'class' => \yii\filters\AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true, //belirli bir rol veya izin kontrolü yapılmaksızın, erişime izin verilip verilmediğini belirtir.
                            'roles' => ['@'], //yalnızca oturum açmış (authenticated) kullanıcıların erişimine izin verilir.
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Task models.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (!\Yii::$app->user->can('todoWebtaskIndexOwn'))
            //Kullanıcıya "contentWebCategoryIndex" veya "contentWebCategoryIndexOwn" yetkilerinden herhangi biri verilmemişse,hata fırlatılır.
        {
            throw new \yii\web\ForbiddenHttpException(Module::t('You are not allowed to access this page.'));
        }
        $searchModel = new TaskSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        if(!\Yii::$app->user->can('todoWebtaskIndex'))
            $dataProvider->query->andWhere([Module::$tablePrefix . 'task.id_user'=>\Yii::$app->user->id]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Displays a single Task model.
     * @param int $id_task Id Task
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        if ($model &&!\Yii::$app->user->can('todoWebtaskView', ['model'=>$this->findModel($id)])) {
            throw new \yii\web\ForbiddenHttpException(Module::t('You are not allowed to access this page.'));
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Task model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        if (!\Yii::$app->user->can('todoWebtaskCreate')) {
            throw new \yii\web\ForbiddenHttpException(Module::t('You are not allowed to access this page.'));
        }
        $model = new Task();

        if ($this->request->isPost) {
            $model ->id_user=Yii::$app->user->id; //id_user field dolduran kişinin id_user'ı olmasını sağlar
            $model ->id_workspace=Yii::$app->workspace->id;//id_workspace field dolduran kişinin id_workspaces'ı olmasını sağlar

            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_task]);
            }
            var_dump($model->errors);
            exit(); // hata yazdırma fonksiyonu
        } else {

            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Task model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_task Id Task
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if (!\Yii::$app->user->can('todoWebtaskUpdate', ['model'=>$this->findModel($id)])) {
            throw new \yii\web\ForbiddenHttpException(Module::t('You are not allowed to access this page.'));
        }
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_task]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Task model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_task Id Task
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if (!\Yii::$app->user->can('todoWebtaskDelete', ['model'=>$this->findModel($id)])) {
            throw new \yii\web\ForbiddenHttpException(Module::t('You are not allowed to access this page.'));
        }

        if($this->findModel($id)->delete()){
            Yii::$app->session->addFlash('info', Module::t('task has been deleted'));
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Task model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_task Id Task
     * @return Task the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_task)
    {
        if (($model = Task::findOne(['id_task' => $id_task])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
