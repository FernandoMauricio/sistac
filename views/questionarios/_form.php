<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\categoriaquestionarios\Categoriaquestionarios;

/* @var $this yii\web\View */
/* @var $model app\models\questionarios\Questionarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questionarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ordem')->textInput() ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'categoria_id')->dropDownList(ArrayHelper::map(Categoriaquestionarios::find()->all(), 'id', 'descricao'),['prompt' => 'Selecione aqui a categoria']); ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
