<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\categoriaquestionarios\Categoriaquestionarios;

/* @var $this yii\web\View */
/* @var $model app\models\avaliacoes\Avaliacoes */
/* @var $form yii\widgets\ActiveForm */

        $soapClient = new SoapClient("http://www.mira.senac.br/wsAM/wsMira.asmx?wsdl",
            array( 
                  "trace"      => 1,
                  "exceptions" => 0,
                  "cache_wsdl" => 0,
                  'soap_version'=> SOAP_1_2,
                  'encoding'=>'UTF-8'
              ));

        $service_param = [ 
  
        ];

        $response = $soapClient->__call("pesquisaUnidadesOperativas", 
                 array($service_param));

        $xml = new SimpleXMLElement(str_replace("&#x0;","", $soapClient->__getLastResponse()));

        $mira = $xml->xpath("//Table");

?>

<script type="text/javascript" src="/sistac/web/jquery-1.4.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function()
            {
                $("#avaliacoes-aval_unidade").change(function(){
                    var turma=$(this).val();
                    var dataString = 'turma='+ turma;
                
                    $.ajax
                    ({
                        type: "POST",
                        url: "/sistac/web/get_state.php",
                        data: dataString,
                        cache: false,
                        success: function(html)
                        {
                            $("#avaliacoes-aval_turma").html(html);
                        } 
                    });
                });
                
                
                $("#avaliacoes-aval_turma").change(function(){
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
                            $("#avaliacoes-aval_unidadecurricular").html(html);
                        } 
                    });
                });
                
            });
    </script>


<div class="avaliacoes-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="form-group field-avaliacoes-aval_unidade required">
        <label class="control-label" for="avaliacoes-aval_unidade">Curso</label>
        <select class="form-control" id="avaliacoes-aval_unidade" class="form-control" name="Avaliacoes[aval_unidade]" ">
            <option selected="selected">Selecione a unidade</option>
            <?php foreach ($mira as $miras): ?>
                <option value="<?= $miras->UO ?>"><?= $miras->NOME ?></option>
            <?php endforeach ?>
          </select>
        <div class="help-block"></div>
    </div>

    <div class="form-group field-avaliacoes-aval_turma required">
        <label class="control-label" for="avaliacoes-aval_turma">Turma</label>
        <select class="form-control" id="avaliacoes-aval_turma" class="form-control" name="Avaliacoes[aval_turma]">
            <option value="" selected="selected">Selecione o Curso</option>
        </select>

        <div class="help-block"></div>
    </div>

    <div class="form-group field-avaliacoes-aval_unidadecurricular required">
        <label class="control-label" for="avaliacoes-aval_unidadecurricular">Unidade curricular</label>
          <select class="form-control" id="avaliacoes-aval_unidadecurricular" class="form-control" name="Avaliacoes[aval_unidadecurricular]" >
            <option value="" selected="selected">Unidade Curricular</option>
          </select>
    </div> 


    <?= $form->field($model, 'aval_supervisor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria_id')->dropDownList(ArrayHelper::map(
        Categoriaquestionarios::find()->all(), 'id', 'descricao'),['prompt' => 'Selecione aqui a categoria']); ?>

    <?= $form->field($model, 'aval_avaliado')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'aval_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aval_responsavel')->textInput(['maxlength' => true]) ?>


    <?=  $form-> field($model, 'aval_data')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Data'],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'yyyy-mm-dd', 
                ]
            ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

