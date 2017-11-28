<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\questaluno\QuestionarioAluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questionario-aluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'questaluno_unidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_curso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_unidadecurricular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_docente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
