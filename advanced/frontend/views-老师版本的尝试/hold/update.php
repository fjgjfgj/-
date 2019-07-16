<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hold */

$this->title = 'Update Hold: ' . $model->ins_id;
$this->params['breadcrumbs'][] = ['label' => 'Holds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ins_id, 'url' => ['view', 'ins_id' => $model->ins_id, 'activity_id' => $model->activity_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hold-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
