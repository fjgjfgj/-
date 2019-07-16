<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Institution */

$this->title = 'Update Institution: ' . $model->ins_id;
$this->params['breadcrumbs'][] = ['label' => 'Institutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ins_id, 'url' => ['view', 'id' => $model->ins_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="institution-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
