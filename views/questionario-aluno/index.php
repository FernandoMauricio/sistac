<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\editable\Editable;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;

use app\models\questaluno\QuestionarioAluno;
use app\models\itensquestaluno\ItensQuestionarioAluno;


/* @var $this yii\web\View */
/* @var $searchModel app\models\questaluno\QuestionarioAlunoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questionario Alunos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-aluno-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Novo Questionário Aluno', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php

$gridColumns = [
            
        [
            'attribute'=>'questaluno_unidade', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->questaluno_unidade;
            },
            'filterType'=>GridView::FILTER_SELECT2,
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
            ],
            'filterInputOptions'=>['placeholder'=>'Any supplier'],
            'group'=>true,  // enable grouping
            'groupFooter'=>function ($model, $key, $index, $widget) { // Closure method
                return [
                    'mergeColumns'=>[[1,3]], // columns to merge in summary
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
            'attribute'=>'questaluno_curso', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->questaluno_curso;
            },
            'filterType'=>GridView::FILTER_SELECT2,
            //'filter'=>ArrayHelper::map(Suppliers::find()->orderBy('company_name')->asArray()->all(), 'id', 'company_name'), 
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
            ],
            'filterInputOptions'=>['placeholder'=>'Selecione o Curso'],
            'group'=>true,  // enable grouping
        ],

        [
            'attribute'=>'questaluno_unidadecurricular', 
            'width'=>'310px',
            'value'=>function ($model, $key, $index, $widget) { 
                return $model->questaluno_unidadecurricular;
            },
            'filterType'=>GridView::FILTER_SELECT2,
            //'filter'=>ArrayHelper::map(Suppliers::find()->orderBy('company_name')->asArray()->all(), 'id', 'company_name'), 
            'filterWidgetOptions'=>[
                'pluginOptions'=>['allowClear'=>true],
            ],
            'filterInputOptions'=>['placeholder'=>'Selecione a Unidade Curricular'],
            'group'=>true,  // enable grouping
        ],

            'questaluno_nome',
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
    'pjax'=>false, // pjax is set to always true for this demo

    'beforeHeader'=>[
        [
            'columns'=>[
                ['content'=>'Detalhes dos Questionários', 'options'=>['colspan'=>7, 'class'=>'text-center warning']], 
                ['content'=>'Área de Ações', 'options'=>['colspan'=>1, 'class'=>'text-center warning']], 
            ],
        ]
    ],
        'hover' => true,
        'panel' => [
        'type'=>GridView::TYPE_PRIMARY,
        'heading'=> '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Listagem - Pedido de Custo</h3>',
    ],
]);
    ?>
    <?php Pjax::end(); ?>

</div>