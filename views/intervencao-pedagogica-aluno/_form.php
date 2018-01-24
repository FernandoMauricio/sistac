<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\intervencaopedagogica\IntervencaoPedagogicaAluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intervencao-pedagogica-aluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'questaluno_unidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_codcurso')->textInput() ?>

    <?= $form->field($model, 'questaluno_curso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_unidadecurricular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_docente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questaluno_data')->textInput() ?>

    <?= $form->field($model, 'situacao_questionario_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
