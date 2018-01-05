<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\itensquestaluno\ItensQuestionarioAlunoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itens-questionario-aluno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'questionario_id') ?>

    <?= $form->field($model, 'questionario_aluno') ?>

    <?= $form->field($model, 'itens_questionario_resposta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>