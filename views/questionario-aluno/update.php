<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\questaluno\QuestionarioAluno */

$this->title = 'Update Questionario Aluno: ' . $model->questaluno_id;
$this->params['breadcrumbs'][] = ['label' => 'Questionario Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->questaluno_id, 'url' => ['view', 'id' => $model->questaluno_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="questionario-aluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
