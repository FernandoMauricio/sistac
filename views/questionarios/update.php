<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\questionarios\Questionarios */

$this->title = 'Update Questionarios: ' . $model->id_questionario;
$this->params['breadcrumbs'][] = ['label' => 'Questionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_questionario, 'url' => ['view', 'id' => $model->id_questionario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="questionarios-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
