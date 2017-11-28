<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\questdocente\QuestionarioDocente */

$this->title = $model->questdocente_id;
$this->params['breadcrumbs'][] = ['label' => 'Questionario Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-docente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->questdocente_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->questdocente_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'questdocente_id',
            'questdocente_unidade',
            'questdocente_curso',
            'questdocente_docente',
            'questdocente_periodocurso',
            'questdocente_supervisor',
            'questdocente_responsavel',
            'questdocente_data',
        ],
    ]) ?>

</div>
