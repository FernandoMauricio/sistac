<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\intervencaopedagogica\IntervencaoPedagogicaAluno */

$this->title = 'Create Intervencao Pedagogica Aluno';
$this->params['breadcrumbs'][] = ['label' => 'Intervencao Pedagogica Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="intervencao-pedagogica-aluno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
