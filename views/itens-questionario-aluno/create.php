<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\itensquestaluno\ItensQuestionarioAluno */

$this->title = 'Create Itens Questionario Aluno';
$this->params['breadcrumbs'][] = ['label' => 'Itens Questionario Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itens-questionario-aluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
