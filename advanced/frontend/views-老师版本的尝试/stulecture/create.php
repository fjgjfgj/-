<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StuLecture */

$this->title = 'Create Stu Lecture';
$this->params['breadcrumbs'][] = ['label' => 'Stu Lectures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stu-lecture-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
