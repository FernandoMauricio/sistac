<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\questaluno\QuestionarioAluno */

$this->title = 'Create Questionario Aluno';
$this->params['breadcrumbs'][] = ['label' => 'Questionario Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-aluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
