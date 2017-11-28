<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\itensquestdocente\ItensQuestionarioDocente */

$this->title = 'Update Itens Questionario Docente: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Itens Questionario Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="itens-questionario-docente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
