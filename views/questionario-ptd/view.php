<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\questptd\QuestionarioPtd */

$this->title = $model->id_questionario_ptd;
$this->params['breadcrumbs'][] = ['label' => 'Questionario Ptds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-ptd-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_questionario_ptd], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_questionario_ptd], [
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
            'id_questionario_ptd',
            'questptd_unidade',
            'questptd_curso',
            'questptd_docente',
            'questionario_ptdcol',
            'questptd_supervisor',
            'questptd_responsavel',
            'questptd_data',
        ],
    ]) ?>

</div>
