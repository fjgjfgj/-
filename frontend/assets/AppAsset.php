<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * 删去前台默认css、js
 * 7月14日 肖元元
 */

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
    ];
}
