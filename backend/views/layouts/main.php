<?php

/* @var $this \yii\web\View */
/* @var $content string */

/**
 * 进行后台layout修改
 * 7月14日 于胜龙
 */


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
    <title>Hello Nankai</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>
        <?= Html::encode($this->title) ?>
    </title>
    <?php $this->head() ?>
    <link rel="stylesheet" type="text/css" href="statics/vendor/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">
    <link rel="shortcut icon" href="favicon.ico">
    <?php $this->head()?>
</head>
<body>
<?php $this->beginBody() ?>

    <!-- Start: Theme Preview Pane -->
    <div id="skin-toolbox">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-icon">
                    <i class="fa fa-gear text-primary"></i>
                </span>
                <span class="panel-title">设置</span>
            </div>
            <div class="panel-body pn">
                <div class="tab-content p20 ptn pb15">
                    <div role="tabpanel" class="tab-pane active" id="toolbox-settings">
                        <form id="toolbox-settings-misc">
                            <br>
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">固定上导航栏</label>
                            </div>
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" checked="" id="sidebar-option">
                                <label for="sidebar-option">固定侧导航栏</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Theme Preview Pane -->
    <!-- Start: Main -->
    <div id="main">
        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top navbar-shadow">
            <div class="navbar-branding">
                <a class="navbar-brand" href="/advanced/backend/web">
                    Hello<b>Nankai</b>
                </a>
                <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <div class="wrap">
                    <?php
          if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
          } else {
            $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
              'Logout (' . Yii::$app->user->identity->username . ')',
            )
            . Html::endForm()
            . '</li>';
          }
          echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => $menuItems,
          ]);
          ?>
                </div>
            </ul>
        </header>
        <!-- End: Header -->
        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-light affix">
            <!-- Start: Sidebar Left Content -->
            <div class="sidebar-left-content nano-content">
                <!-- Start: Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">目录</li>
                    <li>
                        <a href="/advanced/backend/web">
                            <span class="glyphicon glyphicon-home"></span>
                            <span class="sidebar-title">首页</span>
                        </a>
                    </li>
                    <li>
                        <a href="/advanced/frontend/web" target="view_window">
                            <span class="glyphicon glyphicon-new-window"></span>
                            <span class="sidebar-title">前台主页</span>
                        </a>
                    </li>
                    <li>
                        <a href="/advanced/backend/web/index.php?r=homework/index">
                            <span class="glyphicon glyphicon-save"></span>
                            <span class="sidebar-title">个人作业</span>
                        </a>
                    </li>
                    <li class="sidebar-label pt20">后台管理</li>
                    <li>
                        <a href="index.php?r=volunteer/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">志愿者信息</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=activity/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">活动信息</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=lectures/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">培训信息</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=college/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">学院信息</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=team/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">组类信息</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=institution/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">校内外机构</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=hold/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">活动举办情况</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=stuactivity/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">学生参加活动情况</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=stulecture/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">学生参加培训情况</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?r=user/index">
                            <span class="glyphicon glyphicon-list-alt"></span>
                            <span class="sidebar-title">前台用户信息</span>
                        </a>
                    </li>
                    <!-- End: Sidebar Menu -->
                    <!-- Start: Sidebar Collapse Button -->
                    <div class="sidebar-toggle-mini">
                        <a href="#">
                            <span class="fa fa-sign-out"></span>
                        </a>
                    </div>
                    <!-- End: Sidebar Collapse Button -->
            </div>
            <!-- End: Sidebar Left Content -->
        </aside>
        <!-- End: Sidebar Left -->
        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">
            <div class="container">
                <div class="tray tray-center">
                    <?= Breadcrumbs::widget([
                                  'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>
            </div>
        </section>
        <!-- End: Content-Wrapper -->
        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano affix">
            <!-- Start: Sidebar Right Content -->
            <div class="sidebar-right-content nano-content">
            </div>
        </aside>
        <!-- End: Right Sidebar -->
    </div>
    <!-- End: Main -->
    <!-- BEGIN: PAGE SCRIPTS -->
    <!-- jQuery -->
    <script src="statics/vendor/jquery/jquery-1.11.1.min.js"></script>
    <script src="statics/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>
    <!-- HighCharts Plugin -->
    <script src="statics/vendor/plugins/highcharts/highcharts.js"></script>
    <!-- JvectorMap Plugin + US Map (more maps in plugin/assets folder) -->
    <script src="statics/vendor/plugins/jvectormap/jquery.jvectormap.min.js"></script>
    <script src="statics/vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>
    <!-- FullCalendar Plugin + moment Dependency -->
    <script src="statics/vendor/plugins/fullcalendar/lib/moment.min.js"></script>
    <script src="statics/vendor/plugins/fullcalendar/fullcalendar.min.js"></script>
    <!-- Theme Javascript -->
    <script src="assets/js/utility/utility.js"></script>
    <script src="assets/js/demo/demo.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Widget Javascript -->
    <script src="assets/js/demo/widgets.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";
        // Init Demo JS
        Demo.init();


        // Init Theme Core
        Core.init();

        $('.admin-panels').adminpanel({
            grid: '.admin-grid',
            draggable: true,
            preserveGrid: true,
            // mobile: true,
            onStart: function() {
                // Do something before AdminPanels runs
            },
            onFinish: function() {
                $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                // Init the rest of the plugins now that the panels
                // have had a chance to be moved and organized.
                // It's less taxing to organize empty panels
                demoHighCharts.init();
                runVectorMaps(); // function below
            },
            onSave: function() {
                $(window).trigger('resize');
            }
        });


        // Init plugins for ".task-widget"
        // plugins: Custom Functions + jQuery Sortable
        //
        var taskWidget = $('div.task-widget');
        var taskItems = taskWidget.find('li.task-item');
        var currentItems = taskWidget.find('ul.task-current');
        var completedItems = taskWidget.find('ul.task-completed');

        // Init jQuery Sortable on Task Widget
        taskWidget.sortable({
            items: taskItems, // only init sortable on list items (not labels)
            handle: '.task-menu',
            axis: 'y',
            connectWith: ".task-list",
            update: function(event, ui) {
                var Item = ui.item;
                var ParentList = Item.parent();

                // If item is already checked move it to "current items list"
                if (ParentList.hasClass('task-current')) {
                    Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                }
                if (ParentList.hasClass('task-completed')) {
                    Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                }

            }
        });

        // Custom Functions to handle/assign list filter behavior
        taskItems.on('click', function(e) {
            e.preventDefault();
            var This = $(this);
            var Target = $(e.target);

            if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
                This.remove();
                return;
            }

            if (Target.parents('.task-handle').length) {
                // If item is already checked move it to "current items list"
                if (This.hasClass('item-checked')) {
                    This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                }
                // Otherwise move it to the "completed items list"
                else {
                    This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                }
            }

        });

    });
    </script>
    <!-- END: PAGE SCRIPTS -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
