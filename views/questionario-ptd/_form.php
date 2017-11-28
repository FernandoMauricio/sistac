<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\questptd\QuestionarioPtd */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questionario-ptd-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'questptd_unidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questptd_curso')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questptd_docente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questionario_ptdcol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questptd_supervisor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questptd_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'questptd_data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
