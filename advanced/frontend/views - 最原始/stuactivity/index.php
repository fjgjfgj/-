<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StuactivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stu Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stu-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stu Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'activity_id',
            'stu_id',
            'volunteer_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
