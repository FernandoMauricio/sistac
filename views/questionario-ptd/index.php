<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\questptd\QuestionarioPtdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questionario Ptds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-ptd-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Questionario Ptd', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_questionario_ptd',
            'questptd_unidade',
            'questptd_curso',
            'questptd_docente',
            'questionario_ptdcol',
            // 'questptd_supervisor',
            // 'questptd_responsavel',
            // 'questptd_data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
