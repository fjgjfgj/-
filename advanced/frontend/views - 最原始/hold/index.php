<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HoldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Holds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hold-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hold', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ins_id',
            'activity_id',
            'isactive',
            'money',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
