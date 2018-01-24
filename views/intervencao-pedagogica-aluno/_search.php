<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\intervencaopedagogica\IntervencaoPedagogicaAlunoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="intervencao-pedagogica-aluno-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'questaluno_id') ?>

    <?= $form->field($model, 'questaluno_unidade') ?>

    <?= $form->field($model, 'questaluno_cpf') ?>

    <?= $form->field($model, 'questaluno_nome') ?>

    <?= $form->field($model, 'questaluno_codcurso') ?>

    <?php // echo $form->field($model, 'questaluno_curso') ?>

    <?php // echo $form->field($model, 'questaluno_unidadecurricular') ?>

    <?php // echo $form->field($model, 'questaluno_docente') ?>

    <?php // echo $form->field($model, 'questaluno_responsavel') ?>

    <?php // echo $form->field($model, 'questaluno_data') ?>

    <?php // echo $form->field($model, 'situacao_questionario_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
