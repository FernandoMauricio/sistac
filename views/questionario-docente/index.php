<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\questdocente\QuestionarioDocenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questionario Docentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-docente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Questionario Docente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'questdocente_id',
            'questdocente_unidade',
            'questdocente_curso',
            'questdocente_docente',
            'questdocente_periodocurso',
            // 'questdocente_supervisor',
            // 'questdocente_responsavel',
            // 'questdocente_data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
