<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\questaluno\QuestionarioAlunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questionario Alunos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-aluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Questionario Aluno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'questaluno_id',
            'questaluno_unidade',
            'questaluno_cpf',
            'questaluno_nome',
            'questaluno_curso',
            // 'questaluno_unidadecurricular',
            // 'questaluno_docente',
            // 'questaluno_responsavel',
            // 'questaluno_data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
