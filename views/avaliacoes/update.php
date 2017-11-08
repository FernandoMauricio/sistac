<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Avaliacoes */

$this->title = 'Update Avaliacoes: ' . $model->id_avaliacao;
$this->params['breadcrumbs'][] = ['label' => 'Avaliacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_avaliacao, 'url' => ['view', 'id' => $model->id_avaliacao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="avaliacoes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
