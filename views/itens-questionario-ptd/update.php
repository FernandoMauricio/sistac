<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\itensquestptd\ItensQuestionarioPtd */

$this->title = 'Update Itens Questionario Ptd: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Itens Questionario Ptds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="itens-questionario-ptd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
