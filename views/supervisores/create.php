<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\supervisores\Supervisores */

$this->title = 'Create Supervisores';
$this->params['breadcrumbs'][] = ['label' => 'Supervisores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supervisores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
