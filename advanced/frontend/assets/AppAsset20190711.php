<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    //页面中加载的css和js文件，在web目录下，也就是说web的css目录下的文件就是被引入的文件，然后只用更改这里的路径就可以了
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    //显示这些东西放在哪里
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
