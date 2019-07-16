<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\VolunteerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<html class="no-js" lang="">

<body>
    <div class="container">

        <div class="volunteer-search">

            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
            ]); ?>

            <?= $form->field($model, 'stu_id') ?>

            <?= $form->field($model, 'college_id') ?>

            <?= $form->field($model, 'team_id') ?>

            <?= $form->field($model, 'stu_name') ?>

            <?= $form->field($model, 'stu_college') ?>

            <?php // echo $form->field($model, 'stu_gender') ?>

            <?php // echo $form->field($model, 'stu_nation') ?>

            <?php // echo $form->field($model, 'stu_age') ?>

            <div class="form-group">
                <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>


    </div>
</body>
</html>