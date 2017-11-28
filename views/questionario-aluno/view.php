<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\questaluno\QuestionarioAluno */

$this->title = $model->questaluno_id;
$this->params['breadcrumbs'][] = ['label' => 'Questionario Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->questaluno_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->questaluno_id], [
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
            'questaluno_id',
            'questaluno_unidade',
            'questaluno_cpf',
            'questaluno_nome',
            'questaluno_curso',
            'questaluno_unidadecurricular',
            'questaluno_docente',
            'questaluno_responsavel',
            'questaluno_data',
        ],
    ]) ?>

</div>
