<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/plugins/swiper-bundle.min.css',
        'css/plugins/glightbox.min.css',
        'css/vendor/bootstrap.min.css',
        'css/vendor/justifiedGallery.min.css',
        'css/plugins/jquery.fias.min.css',
        'css/style.css'
    ];
    public $js = [
        'js/vendor/popper.js',
        'js/vendor/bootstrap.min.js',
        'js/vendor/jquery.justifiedGallery.min.js',
        'js/plugins/swiper-bundle.min.js',
        'js/plugins/glightbox.min.js',
        'js/plugins/jquery.fias.min.js',
        'js/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
