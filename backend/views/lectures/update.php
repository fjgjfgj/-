<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lectures */

$this->title = 'Update Lectures: ' . $model->lecture_id;
$this->params['breadcrumbs'][] = ['label' => 'Lectures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lecture_id, 'url' => ['view', 'id' => $model->lecture_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lectures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
