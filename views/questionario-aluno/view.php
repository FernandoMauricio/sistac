<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\questaluno\QuestionarioAluno */

$this->title = $model->questaluno_id;
$this->params['breadcrumbs'][] = ['label' => 'Listagem de Questionários - Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

<table class="table table-condensed table-hover">
    <thead>
    <tr class="info"><th colspan="12">SEÇÃO 2: Resumo da Pontuação</th></tr>
    <tr>
        <th>#</th>
        <th>Descrição</th>
        <th>Discordo Totalmente</th>
        <th>Concordo Parcialmente</th>
        <th>Concordo Totalmente</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <?php 
      $count = 1; 
      foreach ($itensQuestionarioAlunos as $i => $itens): ?>
        <td><?= $count++; ?></td>
        <td><?= $itens->descricao; ?></td>
        <td><?= $itens->itens_resposta_discordo; ?></td>
        <td><?= $itens->itens_resposta_concparcial; ?></td>
        <td><?= $itens->itens_resposta_concordo; ?></td>
  </tr>
    <?php endforeach; ?>
</tbody>
</table>

</div>