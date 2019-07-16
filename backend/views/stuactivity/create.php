<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StuActivity */

$this->title = 'Create Stu Activity';
$this->params['breadcrumbs'][] = ['label' => 'Stu Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stu-activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
