<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\questptd\QuestionarioPtd */

$this->title = 'Create Questionario Ptd';
$this->params['breadcrumbs'][] = ['label' => 'Questionario Ptds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionario-ptd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
