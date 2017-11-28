<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\questdocente\QuestionarioDocente */

$this->title = 'Update Questionario Docente: ' . $model->questdocente_id;
$this->params['breadcrumbs'][] = ['label' => 'Questionario Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->questdocente_id, 'url' => ['view', 'id' => $model->questdocente_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="questionario-docente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
