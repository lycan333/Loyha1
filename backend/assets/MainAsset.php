<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css',
        'assets/css/font-icons/entypo/css/entypo.css',
        'http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic',
        'assets/css/bootstrap.css',
        'assets/css/neon-core.css',
        'assets/css/neon-theme.css',
        'assets/css/neon-forms.css',
        'assets/css/custom.css',
        'assets/css/skins/blue.css'
    ];
    public $js = [
        'assets/js/gsap/main-gsap.js',
        'assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js',
        'assets/js/bootstrap.js',
        'assets/js/joinable.js',
        'assets/js/resizeable.js',
        'assets/js/neon-api.js',
        'assets/js/neon-custom.js',
        'assets/js/neon-demo.js',
    ];
}
