<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StuActivity */

$this->title = $model->activity_id;
$this->params['breadcrumbs'][] = ['label' => 'Stu Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="stu-activity-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'activity_id' => $model->activity_id, 'stu_id' => $model->stu_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'activity_id' => $model->activity_id, 'stu_id' => $model->stu_id], [
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
            'activity_id',
            'stu_id',
            'volunteer_time',
        ],
    ]) ?>

</div>
