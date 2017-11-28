<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\itensquestptd\ItensQuestionarioPtdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Itens Questionario Ptds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itens-questionario-ptd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Itens Questionario Ptd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'questionario_ptd',
            'questionario_id',
            'itens_questionario_resposta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
