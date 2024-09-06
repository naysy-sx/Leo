<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @package app\assets
 */
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/otherfonts.css',
        'css/site.css',
    ];
    public $js = [
        //'js/other.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
