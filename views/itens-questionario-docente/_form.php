<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\itensquestdocente\ItensQuestionarioDocente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itens-questionario-docente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'questionario_docente')->textInput() ?>

    <?= $form->field($model, 'questionario_id')->textInput() ?>

    <?= $form->field($model, 'itens_questionario_resposta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
