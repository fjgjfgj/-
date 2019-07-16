<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Institution */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="institution-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ins_id')->textInput() ?>

    <?= $form->field($model, 'ins_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ins_phonenum')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
