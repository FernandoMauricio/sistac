<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Avaliacoes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="avaliacoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php 
    foreach($mira as $d)
     $row[]=$d->TURMA;

            echo $form->field($model, 'aval_curso')->widget(Select2::classname(), [
                'data' => $row,
                'options' => ['placeholder' => 'Informe os cursos a serem avaliados...', 'multiple'=>true],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);  
    ?>

    <?= $form->field($model, 'aval_turma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aval_unidadecurricular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aval_unidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aval_supervisor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria_id')->textInput() ?>

    <?= $form->field($model, 'aval_avaliado')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'aval_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aval_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aval_data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
