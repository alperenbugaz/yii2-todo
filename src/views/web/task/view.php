<?php

use yii\helpers\Html;
use portalium\theme\widgets\DetailView;
use alperenbugaz\todo\models\Task;
use portalium\content\Module;
use portalium\theme\widgets\Panel;
/** @var yii\web\View $this */
/** @var alperenbugaz\todo\models\Task $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tasks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);
?>
<div class="task-view">

    <?php Panel::begin([
        'title' => $this->title,
        'actions' => [
            Html::a(Module::t(''), ['update', 'id' => $model->id_task], ['class' => 'btn btn-primary fa fa-pencil']),
            Html::a(Module::t(''), ['delete', 'id' => $model->id_task], [
                'class' => 'btn btn-danger fa fa-trash',
                'data' => [
                    'confirm' => Module::t('Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ])
        ]
    ]) ?>
    <?= DetailView::widget([

        'model' => $model,
        'attributes' => [
            //'id_task',
            'title',
         //   'description',
            [
                'attribute' => 'status',
                'value' => Task::getStatusList()['STATUS'][$model->status],
            ],
            'user.username', //todo_task tablosundaki id_useri, user_user tablosundaki id_userle eşleştririp username i çeker.
           // 'id_workspace',
            'date_create',
            'date_update',
        ],
    ]); Panel::end() ?>

</div>