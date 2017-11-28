<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\questaluno\QuestionarioAluno;
use app\models\questionarios\questionarios;

/* @var $this yii\web\View */
/* @var $model app\models\itensquestaluno\ItensQuestionarioAluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="itens-questionario-aluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'questionario_id')->dropDownList(ArrayHelper::map(QuestionarioAluno::find()->all(), 'id_questionario', 'descricao'),['prompt' => 'Selecione aqui o questionario']); ?>

    <?= $form->field($model, 'questionario_aluno')->dropDownList(ArrayHelper::map(QuestionarioAluno::find()->all(), 'questaluno_id', 'questaluno_nome'),['prompt' => 'Selecione aqui a Aluno']); ?>

    <?= $form->field($model, 'itens_questionario_resposta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
