<?php

namespace effsoft\eff\asset\chart\js;

use effsoft\eff\EffAssetBundle;

class ChartJsAssetBundle extends EffAssetBundle{

    public $sourcePath = '@bower/chart.js/dist';

    public function init(){
        parent::init();

    }

    public $js = [
        YII_ENV_DEV ? 'Chart.js':'Chart.min.js',
    ];

}