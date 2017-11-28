<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\questptd\QuestionarioPtd */

$this->title = 'Update Questionario Ptd: ' . $model->id_questionario_ptd;
$this->params['breadcrumbs'][] = ['label' => 'Questionario Ptds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_questionario_ptd, 'url' => ['view', 'id' => $model->id_questionario_ptd]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="questionario-ptd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
