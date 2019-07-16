<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StulectureSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stu Lectures';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stu-lecture-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Stu Lecture', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'lecture_id',
            'stu_id',
            'lecture_grade',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
