<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\supervisores\Supervisores */

$this->title = 'Update Supervisores: ' . $model->superv_id;
$this->params['breadcrumbs'][] = ['label' => 'Supervisores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->superv_id, 'url' => ['view', 'id' => $model->superv_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supervisores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
