<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\supervisores\SupervisoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supervisores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supervisores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Supervisores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'superv_id',
            'superv_nome',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
