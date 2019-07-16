<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StuLecture */

$this->title = 'Update Stu Lecture: ' . $model->lecture_id;
$this->params['breadcrumbs'][] = ['label' => 'Stu Lectures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lecture_id, 'url' => ['view', 'lecture_id' => $model->lecture_id, 'stu_id' => $model->stu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stu-lecture-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
