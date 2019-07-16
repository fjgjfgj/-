<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CollegeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Colleges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="college-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create College', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'college_id',
            'college_name',
            'college_leader',
            'college_vnum',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
