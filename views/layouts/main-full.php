<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
                ['label' => 'Avaliações', 'url' => ['/avaliacoes']],
                ['label' => 'Supervisores', 'url' => ['/supervisores']],
                ['label' => 'Categoria Questionário', 'url' => ['/categoria-questionarios']],
                ['label' => 'Questionário',  'items' => [
                    ['label' => 'Aluno', 'url' => ['/questionario-aluno']],
                    ['label' => 'Docente', 'url' => ['/questionario-docente']],
                    ['label' => 'PTD', 'url' => ['/questionario-ptd']],
                    ]],
                ['label' => 'Interverções Pedagógicas',  'items' => [
                    ['label' => 'Aluno', 'url' => ['/intervencao-pedagogica-aluno']],
                    ['label' => 'Docente', 'url' => ['/intervencao-pedagogica-docente']],
                    ['label' => 'PTD', 'url' => ['/intervencao-pedagogica-ptd']],
                    ]],    
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container" style="width:100%;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
