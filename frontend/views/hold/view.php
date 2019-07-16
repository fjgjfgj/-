<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hold */

$this->title = $model->ins_id;
$this->params['breadcrumbs'][] = ['label' => 'Holds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hold-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ins_id' => $model->ins_id, 'activity_id' => $model->activity_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ins_id' => $model->ins_id, 'activity_id' => $model->activity_id], [
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
            'ins_id',
            'activity_id',
            'isactive',
            'money',
        ],
    ]) ?>

</div>
