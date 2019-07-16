<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StuactivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stu-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('新建', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '活动编号',
            '学生编号',
            '志愿时间',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
