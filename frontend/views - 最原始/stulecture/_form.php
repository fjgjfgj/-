<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StuLecture */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stu-lecture-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lecture_id')->textInput() ?>

    <?= $form->field($model, 'stu_id')->textInput() ?>

    <?= $form->field($model, 'lecture_grade')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
