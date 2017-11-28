<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\itensquestdocente\ItensQuestionarioDocente */

$this->title = 'Create Itens Questionario Docente';
$this->params['breadcrumbs'][] = ['label' => 'Itens Questionario Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itens-questionario-docente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
