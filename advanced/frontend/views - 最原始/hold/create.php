<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hold */

$this->title = 'Create Hold';
$this->params['breadcrumbs'][] = ['label' => 'Holds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hold-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
