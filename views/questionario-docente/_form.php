<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\questdocente\QuestionarioDocente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questionario-docente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'questdocente_unidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questdocente_curso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questdocente_docente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questdocente_periodocurso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questdocente_supervisor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questdocente_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questdocente_data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
