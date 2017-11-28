<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\categoriaquestionarios\Categoriaquestionarios;

/* @var $this yii\web\View */
/* @var $model app\models\avaliacoes\Avaliacoes */
/* @var $form yii\widgets\ActiveForm */
?>
<script type="text/javascript" src="/sistac/web/jquery-1.4.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $("#unidade").change(function(){
                    var cidade=$(this).val();
                    var dataString = 'cidade='+ cidade;
                
                    $.ajax
                    ({
                        type: "POST",
                        url: "/sistac/web/get_state.php",
                        data: dataString,
                        cache: false,
                        success: function(html)
                        {
                            $("#curso").html(html);
                        } 
                    });
                });
                
                
                $("#curso").change(function(){
                    var avaliacao=$(this).val();
                    var dataString = 'avaliacao='+ avaliacao;
                
                    $.ajax
                    ({
                        type: "POST",
                        url: "/sistac/web/get_city.php",
                        data: dataString,
                        cache: false,
                        success: function(html)
                        {
                            $("#avaliacao").html(html);
                        } 
                    });
                });
                
            });
        </script>

<div class="avaliacoes-form">

    <?php $form = ActiveForm::begin(); ?>

     <div class="col-*-*">
        <div class="form-group">
          <label for="sel1">Selecione a Unidade:</label>
          <select class="form-control" name="unidade" id="unidade">
            <option selected="selected">Selecione a unidade</option>
            <option value="Manaus|2">CENTRO DE INFORMÁTICA - CIN</option>
            <option value="Manaus|3">CEP - PF</option>
            <option value="Manaus|4">CTH</option>
            <option value="Manaus|5>">CEP - JT</option>
            <option value="Manacapuru|6">CEP - LSR</option>
            <option value="Itacoatiara|7">CEP - MBI</option>
            <option value="Parintins|11">CEP - MPR</option>
            <option value="Tefé|13">CEP - LB</option>
          </select>
        </div>
    </div>

    <div class="col-*-*">
        <div class="form-group">
          <label for="sel1">Selecione o Curso:</label>
          <select class="form-control" id="curso" name="curso">
            <option value="" selected="selected">Selecione o Curso</option>
          </select>
        </div>
    </div>
<!-- 
    <?= $form->field($model, 'aval_turma')->textInput(['maxlength' => true]) ?>
 -->

     <div class="col-*-*">
        <div class="form-group">
          <label for="sel1">Unidade Curricular</label>
          <select class="form-control" id="avaliacao" name="avaliacao">
            <option value="" selected="selected">Unidade Curricular</option>
          </select>
        </div>
    </div>

 <!--    <?= $form->field($model, 'aval_unidadecurricular')->textInput(['maxlength' => true]) ?> -->


    <?= $form->field($model, 'aval_supervisor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria_id')->dropDownList(ArrayHelper::map(Categoriaquestionarios::find()->all(), 'id', 'descricao'),['prompt' => 'Selecione aqui a categoria']); ?>

    <?= $form->field($model, 'aval_avaliado')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'aval_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aval_responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aval_data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
