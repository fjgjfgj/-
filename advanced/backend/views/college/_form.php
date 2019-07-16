<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\College */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="college-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'college_id')->textInput() ?>

    <?= $form->field($model, 'college_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'college_leader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'college_vnum')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
