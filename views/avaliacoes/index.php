<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\avaliacoes\AvaliacoesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avaliacoes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avaliacoes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Avaliacoes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_avaliacao',
            'aval_turma',
            'aval_unidadecurricular',
            'aval_unidade',
            'aval_supervisor',
            // 'categoria_id',
            // 'aval_avaliado:ntext',
            // 'aval_status',
            // 'aval_responsavel',
            // 'aval_data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
