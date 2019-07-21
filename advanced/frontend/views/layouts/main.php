<?php

/**
 * 用复制过来的模板更改前台layout样式，并更改js、css的路径
 * 7月14日 肖元元
 */

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
<html class="no-js" lang="">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title>Hello Nankai</title>
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="yes" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />
    <!-- Google Web Font -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lekton:400,700,400italic' rel='stylesheet' type='text/css'>
    <!--  Bootstrap 3-->
    <link rel="stylesheet" href="statics/css/bootstrap.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="statics/css/owl.carousel.css">
    <link rel="stylesheet" href="statics/css/owl.theme.css">
    <!--  Slider -->
    <link rel="stylesheet" href="statics/css/jquery.kenburnsy.css">
    <!-- Animate -->
    <link rel="stylesheet" href="statics/css/animate.css">
    <!-- Web Icons Font -->
    <link rel="stylesheet" href="statics/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="statics/css/iconmoon.css">
    <link rel="stylesheet" href="statics/css/et-line.css">
    <link rel="stylesheet" href="statics/css/ionicons.css">
    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="statics/css/magnific-popup.css">
    <!-- Tabs -->
    <link rel="stylesheet" type="text/css" href="statics/css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="statics/css/tabstyles.css" />
    <!-- Costum Styles -->
    <link rel="stylesheet" href="statics/css/main.css">
    <link rel="stylesheet" href="statics/css/responsive.css">
    <!-- Favicon -->
    <link rel="icon" type="image/ico" href="favicon.ico">
    <!-- Modernizer & Respond js -->
    <script src="statics/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="header">
        <div class="container">
            <div class="logo">
                <a href="/advanced/frontend/web">
                    <img src="statics/img/logo.png" alt="Logo">
                </a>
            </div>
            <!-- Menu Hamburger (Default) -->
            <button class="main-menu-indicator" id="open-button">
                <span class="line"></span>
            </button>
            <div class="menu-wrap" style="background-image: url(img/nav_bg.jpg)">
                <div class="menu-content">
                    <div class="navigation">
                        <span class="pe-7s-close close-menu" id="close-button"></span>
                    </div>
                    <nav class="menu">
                        <div class="menu-list">
                            <ul>
                                <li class="menu-item-has-children"><a href="/advanced/frontend/web">主页</a>
                                </li>
                                <li class="menu-item-has-children"><a href="index.php?r=volunteer/index">志愿者名单</a>
                                </li>
                                <li class="menu-item-has-children"><a href="index.php?r=lectures/index">讲座信息</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a>志愿信息</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-timeline.html">视图一</a></li>
                                        <li><a href="single-blog.html">视图二</a></li>
                                        <li><a href="single-blog.html">视图三</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="hidden-xs">
                        <div class="menu-information">
                            <ul>
                                <li><span>T:</span> 003 124 115</li>
                                <li><span>E:</span> undefined@mail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Menu Hamburger (Default) -->
        </div>
    </div>
    <div class="wrap">
        <div class="container">
            <br>
            <br>
            <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </div>
    <div class="footer margin-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="footer-inner">
                        <div class="footer-content">
                            <h4>UNDEFINED团队</h4>
                            <address>南开大学<br>计算机学院<br>网络空间安全学院</address>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-md-push-8 col-sm-4 col-xs-12">
                    <div class="footer-inner">
                        <div class="footer-content">
                            <h4>联系我们</h4>
                            <p>
                                T:003 124 115 <br>
                                E:undefined@mail.com <br>
                                W:www.undefined.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-inner">
                        <div class="footer-content">
                            <span class="copyright-mark">&copy; 2019 UNDEFINED</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i class="pe-7s-angle-up"></i></a>
    <script src="statics/js/vendor/jquery-1.11.2.min.js"></script>
    <script data-pace-options='{ "ajax": false }' src="statics/js/vendor/pace.min.js"></script>
    <script src="statics/js/vendor/bootstrap.min.js"></script>
    <script src="statics/js/vendor/classie.js"></script>
    <script src="statics/js/vendor/isotope.pkgd.min.js"></script>
    <script src="statics/js/vendor/jquery.velocity.min.js"></script>
    <script src="statics/js/vendor/jquery.kenburnsy.min.js"></script>
    <script src="statics/js/vendor/textslide.js"></script>
    <script src="statics/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="statics/js/vendor/tabs.js"></script>
    <script src="statics/js/ef-slider.js"></script>
    <script src="statics/js/vendor/owl.carousel.min.js"></script>
    <script src="statics/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="statics/js/vendor/jquery.social-buttons.min.js"></script>
    <script src="statics/js/vendor/wow.min.js"></script>
    <script src="statics/js/main.js"></script>
    <script src="statics/js/ajax.js"></script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
