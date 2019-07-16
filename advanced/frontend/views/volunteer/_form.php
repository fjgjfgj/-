<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Volunteer */
/* @var $form yii\widgets\ActiveForm */
?>



<html class="no-js" lang="">
<body>
    <div class="container">
<div class="volunteer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stu_id')->textInput() ?>

    <?= $form->field($model, 'college_id')->textInput() ?>

    <?= $form->field($model, 'team_id')->textInput() ?>

    <?= $form->field($model, 'stu_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_college')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_nation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_age')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

    </div>
</body>
</html>
