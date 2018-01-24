<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\intervencaopedagogica\IntervencaoPedagogicaAluno */

$this->title = 'Update Intervencao Pedagogica Aluno: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Intervencao Pedagogica Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->questaluno_id, 'url' => ['view', 'id' => $model->questaluno_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="intervencao-pedagogica-aluno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
