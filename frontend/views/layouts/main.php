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
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="generator" content="#"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="#">
    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
</head>

<body>
<?php $this->beginBody() ?>
<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <?= \frontend\modules\Kupon\components\home\HeaderWidgets::widget() ?>
    <?= \frontend\modules\Kupon\components\home\SearchWidgets::widget() ?>
    <!-- /.search form -->
    <?= \frontend\modules\Kupon\components\home\SliderWidgets::widget() ?>
    <!-- /slider -->


    <section id="page" class="container">
        <?= \frontend\modules\Kupon\components\home\TopInfoWidgets::widget()?>
        <!--/.frame -->
        <div class="row">
            <div class="col-sm-8">
                <?= \frontend\modules\Kupon\components\page\PostHomeWidgets::widget() ?>
                <?= \frontend\modules\Kupon\components\page\PostHomeWidgets::widget() ?>
                <?= \frontend\modules\Kupon\components\page\PostHomeWidgets::widget() ?>
                <!--/row -->

            </div>
            <!-- /col 8 -->
            <?= \frontend\modules\Kupon\components\home\SidebarWidgets::widget() ?>
            <!-- /main row -->
        </div>
    </section>
    <!-- /#page ends -->
    <?= \frontend\modules\Kupon\components\home\PurchaseWidgets::widget() ?>
    <!-- /.CTA -->
    <?= \frontend\modules\Kupon\components\home\FooterWidgets::widget() ?>
</div>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
