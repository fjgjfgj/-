<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StuActivity */

$this->title = 'Update Stu Activity: ' . $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Stu Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activity_id, 'url' => ['view', 'activity_id' => $model->activity_id, 'stu_id' => $model->stu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stu-activity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
