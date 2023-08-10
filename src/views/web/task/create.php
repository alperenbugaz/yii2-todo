<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var portalium\todo\models\Task $model */

$this->title = Yii::t('app', 'Create Task');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tasks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
