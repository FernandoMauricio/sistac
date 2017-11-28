<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\avaliacoes\Avaliacoes */

$this->title = $model->id_avaliacao;
$this->params['breadcrumbs'][] = ['label' => 'Avaliacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avaliacoes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_avaliacao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_avaliacao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_avaliacao',
            'aval_curso',
            'aval_turma',
            'aval_unidadecurricular',
            'aval_unidade',
            'aval_supervisor',
            'categoria_id',
            'aval_avaliado:ntext',
            'aval_status',
            'aval_responsavel',
            'aval_data',
        ],
    ]) ?>

</div>
