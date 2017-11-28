<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\categoriaquestionarios\CategoriaQuestionarios */

$this->title = 'Create Categoria Questionarios';
$this->params['breadcrumbs'][] = ['label' => 'Categoria Questionarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-questionarios-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
