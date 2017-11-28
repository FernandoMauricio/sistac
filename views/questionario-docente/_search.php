<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\questdocente\QuestionarioDocenteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questionario-docente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'questdocente_id') ?>

    <?= $form->field($model, 'questdocente_unidade') ?>

    <?= $form->field($model, 'questdocente_curso') ?>

    <?= $form->field($model, 'questdocente_docente') ?>

    <?= $form->field($model, 'questdocente_periodocurso') ?>

    <?php // echo $form->field($model, 'questdocente_supervisor') ?>

    <?php // echo $form->field($model, 'questdocente_responsavel') ?>

    <?php // echo $form->field($model, 'questdocente_data') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
