<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\editable\Editable;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use yii\bootstrap\Modal;
use yii\helpers\Url;

use app\models\questaluno\QuestionarioAluno;
use app\models\itensquestaluno\ItensQuestionarioAluno;


/* @var $this yii\web\View */
/* @var $searchModel app\models\questaluno\QuestionarioAlunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questionario Alunos';
$this->params['breadcrumbs'][] = $this->title;
?>

<script type="text/javascript">
  // action for all selected rows
  function submit(){
    var dialog = confirm("Você tem certeza que deseja enviar esses itens para Intervenção Pedagógica?");
    if (dialog == true) {
        var keys = $('#w0').yiiGridView('getSelectedRows');
         console.log(keys);
        var ajax = new XMLHttpRequest();
        $.ajax({
            type: "POST",
            url: 'enviar-intervencao', // Your controller action
            data: {keylist: keys},
            success: function(result){
              console.log(result);
            }
          });
    }
  }
</script>

<div class="questionario-aluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!-- Submit button -->
        <button type="button" onclick="submit()" class="btn btn-danger">Enviar para Intervenção</button>
    </p>

<?php

$gridColumns = [

        //Checkbox
        [
            'class' => 'yii\grid\CheckboxColumn',
            'contentOptions'=>[ 'style'=>'width: 50px'],
            'name' => 'checked',
            'checkboxOptions'=> function($model, $key, $index, $column) {
             return ["value" => $model->questaluno_id];
            }
        ],

        [
            'attribute'=>'questaluno_codcurso', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->questaluno_codcurso;
            },
            'group'=>true,  // enable grouping
            'groupFooter'=>function ($model, $key, $index, $widget) { // Closure method
                return [
                    'mergeColumns'=>[[1,4]], // columns to merge in summary
                    'content'=>[             // content to show in each summary cell
                        1=>'Resultado ('. $model->questaluno_codcurso . ' - ' . $model->questaluno_curso . ')',
                        4=>GridView::F_SUM,
                        5=>GridView::F_SUM,
                        6=>GridView::F_SUM,
                    ],
                    'contentFormats'=>[      // content reformatting for each summary cell
                        4=>['format'=>'number', 'decimals'=>2],
                        5=>['format'=>'number', 'decimals'=>0],
                        6=>['format'=>'number', 'decimals'=>2],
                    ],
                    'contentOptions'=>[      // content html attributes for each summary cell
                        1=>['style'=>'font-variant:small-caps'],
                        4=>['style'=>'text-align:right'],
                        5=>['style'=>'text-align:right'],
                        6=>['style'=>'text-align:right'],
                    ],
                    // html attributes for group summary row
                    'options'=> ['class'=>'info','style'=>'font-weight:bold;']
                ];
            }
        ],

        [
            'attribute'=>'questaluno_unidade', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->questaluno_unidade;
            },
        ],

        [
            'attribute'=>'questaluno_curso', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->questaluno_curso;
            },
        ],

        [
            'attribute'=>'questaluno_unidadecurricular', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->questaluno_unidadecurricular;
            },
            'group'=>true,  // enable grouping
        ],

            'questaluno_nome',

            [
                'attribute' => 'situacao_questionario_id',
                'value' => 'situacaoQuestionario.descricao',
            ],

            [
                'attribute'=> 'discordoTotalmente',
                'value' => function ($model) { return ItensQuestionarioAluno::find()->where(['itens_resposta_discordo' => 1, 'questionario_aluno' => $model->questaluno_id])->count();}
            ],

            [
                'attribute'=> 'concordoParcialmente',
                'value' => function ($model) { return ItensQuestionarioAluno::find()->where(['itens_resposta_concparcial' => 1, 'questionario_aluno' => $model->questaluno_id])->count();}
            ],

            [
                'attribute'=> 'concordoTotalmente',
                'value' => function ($model) { return ItensQuestionarioAluno::find()->where(['itens_resposta_concordo' => 1, 'questionario_aluno' => $model->questaluno_id])->count();}
            ],

            ['class' => 'yii\grid\ActionColumn',
                        'template' => '{view}',
                        'contentOptions' => ['style' => 'width: 7%;'],
                        'buttons' => [

                        //VISUALIZAR/IMPRIMIR
                        'view' => function ($url, $model) {
                            return Html::a('<span class="glyphicon glyphicon-print"></span> ', $url, [
                                        'target'=>'_blank', 
                                        'data-pjax'=>"0",
                                        'class'=>'btn btn-info btn-xs',
                                        'title' => Yii::t('app', 'Imprimir'),
                       
                            ]);
                        },

                        // //VISUALIZAR/IMPRIMIR
                        // 'update' => function ($url, $model) {
                        //     return Html::a('<span class="glyphicon glyphicon-pencil"></span> ', $url, [
                        //                 'class'=>'btn btn-default btn-xs',
                        //                 'title' => Yii::t('app', 'Atualizar'),
                       
                        //     ]);
                        // },
                ],
           ],
    ];
 ?>

    <?php Pjax::begin(); ?>

    <?php 
    echo GridView::widget([
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
    'columns'=>$gridColumns,
    'containerOptions'=>['style'=>'overflow: auto'], // only set when $responsive = false
    'headerRowOptions'=>['class'=>'kartik-sheet-style'],
    'filterRowOptions'=>['class'=>'kartik-sheet-style'],
    'pjax'=>true, // pjax is set to always true for this demo

    'beforeHeader'=>[
        [
            'columns'=>[
                ['content'=>'Detalhes dos Questionários', 'options'=>['colspan'=>10, 'class'=>'text-center warning']], 
                ['content'=>'Área de Ações', 'options'=>['colspan'=>1, 'class'=>'text-center warning']], 
            ],
        ]
    ],
        'hover' => true,
        'panel' => [
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=> '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Listagem - Questionário Alunos</h3>',
    ],
]);
    ?>
    <?php Pjax::end(); ?>

</div>