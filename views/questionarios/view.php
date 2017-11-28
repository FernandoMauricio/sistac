<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\questionarios\Questionarios */

$this->title = $model->id_questionario;
$this->params['breadcrumbs'][] = ['label' => 'Questionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionarios-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_questionario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_questionario], [
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
            'id_questionario',
            'ordem',
            'descricao:ntext',
            'categoria_id',
        ],
    ]) ?>

</div>
