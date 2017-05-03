<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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

<!--class 为wrap为标题栏 -->
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '脚本黑客',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    // headline 、special、download、upload

    $menuItems = [
            ['label' => '文章管理', 'url' => ['/post/index']],
            ['label' => '评论管理', 'url' => ['/comment/index']],
            ['label' => '用户管理', 'url' => ['/user/index']],
            ['label' => '管理员', 'url' => ['/adminuser/index']],
            ['label' => '标题类目', 'url' => ['/headline/index']],
            ['label' => '文章专题', 'url' => ['/special/index']],
            ['label' => '工具上传', 'url' => ['/download/index']],
            ['label' => '工具下载', 'url' => ['/upload/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '注销 (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
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

<!--class 为wrap为标题栏 -->

<!--class 为wrap为标题栏 -->
<!--  -->




<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; 小小博客 <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
