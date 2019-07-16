<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StuLecture */

$this->title = $model->lecture_id;
$this->params['breadcrumbs'][] = ['label' => 'Stu Lectures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="stu-lecture-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'lecture_id' => $model->lecture_id, 'stu_id' => $model->stu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'lecture_id' => $model->lecture_id, 'stu_id' => $model->stu_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'lecture_id',
            'stu_id',
            'lecture_grade',
        ],
    ]) ?>

</div>
