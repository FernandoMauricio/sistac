<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\questptd\QuestionarioPtdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questionario-ptd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_questionario_ptd') ?>

    <?= $form->field($model, 'questptd_unidade') ?>

    <?= $form->field($model, 'questptd_curso') ?>

    <?= $form->field($model, 'questptd_docente') ?>

    <?= $form->field($model, 'questionario_ptdcol') ?>

    <?php // echo $form->field($model, 'questptd_supervisor') ?>

    <?php // echo $form->field($model, 'questptd_responsavel') ?>

    <?php // echo $form->field($model, 'questptd_data') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
