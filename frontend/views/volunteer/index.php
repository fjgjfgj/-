<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\VolunteerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Volunteers';
?>

<html class="no-js" lang="">
<body>
    <div class="container">

<div class="volunteer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Volunteer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'stu_id',
            'college_id',
            'team_id',
            'stu_name',
            'stu_college',
            //'stu_gender',
            //'stu_nation',
            //'stu_age',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

    </div>
</body>
</html>