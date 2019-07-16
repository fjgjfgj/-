<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hold */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hold-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ins_id')->textInput() ?>

    <?= $form->field($model, 'activity_id')->textInput() ?>

    <?= $form->field($model, 'isactive')->textInput() ?>

    <?= $form->field($model, 'money')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
