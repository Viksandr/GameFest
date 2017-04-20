<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@app/views/assets';
    public $baseUrl = '@web';
    public $css = [
        'style.css'
    ];
    public $js = [
        'js/parallax.js-1.4.2/parallax.js',
        'js/menu.js',
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
