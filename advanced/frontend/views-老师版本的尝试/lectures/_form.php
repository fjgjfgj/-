<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lectures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lectures-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lecture_id')->textInput() ?>

    <?= $form->field($model, 'lecturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lecture_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
