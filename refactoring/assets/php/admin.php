<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\web\View;
use app\modules\admin\widgets\LanguageSwitcherWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/modules/admin/cabinet_assets/pictures/title.png" type="image/png">
    <title>DiaVita Club Cabinet</title>
    <link href="https://fonts.googleapis.com/css?family=Kanit:300" rel="stylesheet">

    <?php $this->registerCssFile('/modules/admin/cabinet_assets/css/style.css')?>
    <?php $this->registerCssFile('/modules/admin/cabinet_assets/css/media.css')?>
    <?php $this->registerCssFile('/modules/admin/cabinet_assets/css/media1600.css')?>
    <?php $this->registerCssFile('/modules/admin/cabinet_assets/css/media1400.css')?>
    <?php $this->registerCssFile('/modules/admin/cabinet_assets/css/media1200.css')?>
    <?php $this->registerCssFile('/modules/admin/cabinet_assets/css/media992.css')?>
    <?php $this->registerCssFile('/modules/admin/cabinet_assets/css/media768.css')?>
    <?php $this->registerCssFile('/modules/admin/cabinet_assets/css/media320.css')?>

    <?php $this->registerJsFile('/modules/admin/cabinet_assets/js/jquery-3.2.1.min.js',['position' => View::POS_HEAD])?>
    <?php $this->registerJsFile('/modules/admin/cabinet_assets/js/addClass.js',['position' => View::POS_END])?>
    <?php $this->registerJsFile('/modules/admin/cabinet_assets/js/hide.js',['position' => View::POS_END])?>
    <?php $this->registerJsFile('/modules/admin/cabinet_assets/js/search.js',['position' => View::POS_END])?>
    <?php $this->registerJsFile('/modules/admin/cabinet_assets/js/menu.js',['position' => View::POS_END])?>
    <?php $this->registerJsFile('/modules/admin/cabinet_assets/js/submenu.js',['position' => View::POS_END])?>
    <?php $this->registerJsFile('/modules/admin/cabinet_assets/js/scrollup.js',['position' => View::POS_END])?>
    <?php $this->registerJsFile('/modules/admin/cabinet_assets/js/hoverImages.js',['position' => View::POS_END])?>
    <?php $this->registerJsFile('/modules/admin/cabinet_assets/js/schoolTabsMobil.js', ['position' => View::POS_END]); ?>
    <?php $this->registerJs("var sudoSlider = $(\"#slider\").sudoSlider();")?>

    <?php $this->head() ?>
    <?
    $lng = 'en';
    $lng_list = ['en','th'];
    if(in_array(Yii::$app->language,$lng_list)) {
        $lng = Yii::$app->language;
    }
    ?>
</head>
<body data-lang="<?=$lng;?>">

<?php $this->beginBody() ?>

<div class="shadow" id="shadow"></div>

<a id="anchor--top"></a>
<div class="btn button-container" id="open">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
</div>
<nav class="nav-mobil" id="nav-mobil">
    <ul class="nav-mobil-list" id="accordion">
        <li class="nav-mobil-item"><a href="/index.php/admin/default/profile" class="nav-mobil-item-link"><img src="/modules/admin/cabinet_assets/pictures/svg/avatar1.svg" class="nav-mobil-icon" alt=""><?=Yii::t('front','Home');?></a></li>
        <li class="nav-mobil-item submenu-open">
            <div class="link">
                <img src="/modules/admin/cabinet_assets/pictures/svg/graduate-cap.svg" class="nav-mobil-icon-fix" alt="" />
                <?=Yii::t('front','School');?><i class="fa fa-chevron-down"></i>
            </div>
            <ul class="mobil-submenu-list">
                <li class="mobil-submenu-item"><a href="#introduction"
                                                  class="mobil-submenu-item-link mobil-submenu-item-link-active"
                                                  onclick="closeMenu(this)"><?= Yii::t('lessons', 'Introduction'); ?></a>
                </li>
                <li class="mobil-submenu-item"><a href="#online-promotion" class="mobil-submenu-item-link"
                                                  onclick="closeMenu(this)"><?= Yii::t('lessons', 'Online promotion'); ?></a>
                </li>
                <li class="mobil-submenu-item"><a href="#offline-promotion" class="mobil-submenu-item-link"
                                                  onclick="closeMenu(this)"><?= Yii::t('lessons', 'Offline promotion'); ?></a>
                </li>
                <li class="mobil-submenu-item"><a href="#business-creating" class="mobil-submenu-item-link"
                                                  onclick="closeMenu(this)"><?= Yii::t('lessons', 'Business creation'); ?></a>
                </li>
                <li class="mobil-submenu-item"><a href="#increase-in-sales" class="mobil-submenu-item-link"
                                                  onclick="closeMenu(this)"><?= Yii::t('lessons', 'Increase in sales'); ?></a>
                </li>
                <li class="mobil-submenu-item"><a href="#negotiation" class="mobil-submenu-item-link"
                                                  onclick="closeMenu(this)"><?= Yii::t('lessons', 'Negotiation'); ?></a>
                </li>
            </ul>
        </li>
        <li class="nav-mobil-item"><a href="/index.php/admin/default/training" class="nav-mobil-item-link"><img src="/modules/admin/cabinet_assets/pictures/svg/open-book.svg" class="nav-mobil-icon-fix" alt=""><?=Yii::t('front','Training');?></a></li>
        <li class="nav-mobil-item"><a href="/index.php/admin/default/shop" class="nav-mobil-item-link"><img src="/modules/admin/cabinet_assets/pictures/svg/cart.svg" class="nav-mobil-icon-fix" alt=""><?=Yii::t('front','Shop');?></a></li>
        <li class="nav-mobil-item"><a href="#" class="nav-mobil-item-link"><img src="/modules/admin/cabinet_assets/pictures/svg/logout.svg" class="nav-mobil-icon" alt=""><?=Yii::t('front','Logout');?></a></li>
    </ul>
</nav>
<header class="header">
    <div class="header-wrapper">
        <img src="/modules/admin/cabinet_assets/pictures/svg/logowhite.svg" class="header-logo-mob" alt="">
        <nav class="header-navigation">
            <ul class="navigation-list">
<!--                <li class="navigation-item"><a href="/index.php/admin/default/dashboard" class="navigation-item-link">--><?//=Yii::t('front','Home');?><!--</a></li>-->
                <li class="navigation-item"><a href="/index.php/admin/default/profile" class="navigation-item-link"><?=Yii::t('front','Home');?></a></li>
<!--                <li class="navigation-item"><a href="/index.php/admin/default/instruments" class="navigation-item-link"><?=Yii::t('front','Instruments');?></a></li>-->
                <li class="navigation-item"><a href="/index.php/admin/default/school" class="navigation-item-link"><?=Yii::t('front','School');?></a></li>
                <li class="navigation-item"><a href="/index.php/admin/default/training" class="navigation-item-link"><?=Yii::t('front','Training');?></a></li>
                <li class="navigation-item"><a href="/index.php/admin/default/plan" class="navigation-item-link"><?=Yii::t('front','Marketing plan');?></a></li>
                <li class="navigation-item"><a href="/index.php/admin/default/shop" class="navigation-item-link"><?=Yii::t('front','Shop');?></a></li>
                <li class="navigation-item navigation-submenu" onclick="showSubmenu(this)"><?=Yii::t('front','Language');?>
                    <!--                <li class="navigation-item"><a href="#" class="navigation-item-link"><?=Yii::t('front','Chat');?></a></li>-->
                    <?=Html::ul(LanguageSwitcherWidget::renderItems(),['item' => function($item,$index){
                        return Html::tag('li',Html::a($item,"?language=$index"),['class'=>'navigation-submenu-item']);
                    },'class'=>'navigation-submenu-list','id'=>'submenu_list'])?></li>


            </ul>
            <form class="header-form" action="" autocomplete="on">
                <input id="search" name="search" type="search" placeholder="ค้นหา...">
                <input id="search_submit" value="Rechercher" type="submit">
            </form>
            <a href="#" class="logout-link" onclick="$('#clmflo').click();return false;"><?=Yii::t('front','Logout');?></a>
            <?=
            Html::beginForm(['/admin/default/logout'], 'post',['style'=>'display: none;'])
            . Html::submitButton(
                Yii::t('admin','Logout'),
                ['class' => 'logout-link','id'=>'clmflo']
            )
            . Html::endForm() ?>
        </nav>
    </div>
</header>

<?= $content; ?>

<!-- Open feedback form -->
<div class="feedback__btn" onclick="openFeedback(this)">
    <img src="/modules/admin/cabinet_assets/pictures/svg/feedback.svg" class="feedback-icon" />
</div>
<!-- end -->

<!-- Feedback container -->
<div class="feedback__container" id="feedback_container">

    <div class="feedback__content">
        <h3 class="feedback-caption">Feedback</h3>
        <img src="/modules/admin/cabinet_assets/pictures/svg/cancel.svg" class="feedback-close" onclick="closeFeedback(this)" /> <!-- Close -->
    </div>

    <form action="" method="post" class="feedback-form" id="feedback">

        <input type="text" name="user-name" class="feedback-field" placeholder="Name">
        <input type="email" name="user-email" class="feedback-field" placeholder="E-mail">
        <textarea name="user-text" class="feedback-text" placeholder="Your text"></textarea>

        <button type="submit" form="feedback" class="feedback-btn">Submit</button>

    </form>

</div>
<!-- end -->

<!-- Scroll to top -->
<a href="#anchor--top" class="scrollup" id="scrollToTop">
    <div class="arrow-wrapper">
        <div class="arrows"></div>
    </div>
</a>
<!-- end -->

<footer class="footer">
    <p class="footer-text"><?=Yii::t('front','All rights reserved.');?>
        <br> 2017 | <span class="diavita">DiaVita</span></p>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
