<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\itensquestptd\ItensQuestionarioPtd */

$this->title = 'Create Itens Questionario Ptd';
$this->params['breadcrumbs'][] = ['label' => 'Itens Questionario Ptds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itens-questionario-ptd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
