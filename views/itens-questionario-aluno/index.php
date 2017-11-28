<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\itensquestaluno\ItensQuestionarioAlunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Itens Questionario Alunos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itens-questionario-aluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Itens Questionario Aluno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'descricao:ntext',
            'questionario_id',
            'questionario_aluno',
            'itens_questionario_resposta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
