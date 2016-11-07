<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
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
        'brandLabel' => 'YouBlog',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Noticias', 'url' => ['/site/blogvista']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Registrarse', 'url' => ['/user/registration/register']];
        $menuItems[] = ['label' => 'Ingresar', 'url' => ['/user/security/login']];
    } else {
        $menuItems[] = ['label' => 'Entradas', 'url' => ['/../../backend/web/blognoticia']];
        
        $menuItems[] = [
            'label' => Yii::$app->user->identity->username,
            'items' => [
            [
            'label' => 'Perfil',
            'url' => ['/user/settings/profile'],
            ],
            [
            'label' => 'Seguridad',
            'url' => ['/user/settings/account'],
            ],
            [
            'label' => 'Backend',
            'url' => ['/../../backend/web'],
            ],
            [
            'label' => 'Salir',
            'url' => ['/user/security/logout'],
            'linkOptions' => ['data-method' => 'post']
            ],
            ],
            ];
        
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/user/security/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <center><p>&copy; Andrés Hurtado <?= date('Y') ?></p></center>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
