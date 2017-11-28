<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\questionarios\Questionarios */

$this->title = 'Create Questionarios';
$this->params['breadcrumbs'][] = ['label' => 'Questionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questionarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
