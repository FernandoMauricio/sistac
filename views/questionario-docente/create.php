<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\questdocente\QuestionarioDocente */

$this->title = 'Create Questionario Docente';
$this->params['breadcrumbs'][] = ['label' => 'Questionario Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-docente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
