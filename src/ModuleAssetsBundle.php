<?php

namespace muxtor\pkk5module;

use yii\web\AssetBundle;

class ModuleAssetsBundle extends AssetBundle
{

    public $sourcePath = '@vendor/muxtor/yii2-pkk5-module/assets';

    public $css = [
        'http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic',
        'css/style.css'
    ];
}