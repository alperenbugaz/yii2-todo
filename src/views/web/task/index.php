<?php

use portalium\todo\models\Task;
use yii\helpers\Html;
use yii\helpers\Url;
use portalium\theme\widgets\ActionColumn;
use portalium\theme\widgets\GridView;
use portalium\theme\widgets\Panel;
use portalium\content\Module;

/** @var portalium\todo\models\TaskSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Tasks');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <?php Panel::begin([
        'title' => Module::t('Tasks'),
        'actions' => [
            Html::a(Module::t(''), ['create'], ['class' => 'btn btn-success fa fa-plus'])
        ]
    ]) ?>



    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_task',
            'title',
           // 'description',
           // 'status',
            'id_user',
            //'id_workspace',
            //'date_create',
            //'date_update',
            ['class' => ActionColumn::class],
        ],
    ]); Panel::end()?>


</div>