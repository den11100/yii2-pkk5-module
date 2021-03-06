<?php

namespace muxtor\pkk5module;

use Yii;
use yii\base\BootstrapInterface;



class Bootstrap implements BootstrapInterface{

    //Метод, который вызывается автоматически при каждом запросе
    public function bootstrap($app)
    {

        //Правила маршрутизации
        $app->getUrlManager()->addRules([
            'pkk5' => 'pkk5module/pkk5/index',
        ], false);

        /*
         * Регистрация модуля в приложении
         * (вместо указания в файле frontend/config/main.php
         */
         $app->setModule('pkk5module', 'muxtor\pkk5module\Module');

    }
}