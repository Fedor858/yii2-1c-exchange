<?php

namespace carono\exchange1c;

/**
 * exchange module definition class
 */
class ExchangeModule extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'carono\exchange1c\controllers';
    public $productClass;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}