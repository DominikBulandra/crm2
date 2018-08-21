<?php namespace Dominik\Clients;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	 return [
        'Dominik\clients\Components\Create' => 'Create',
        'Dominik\clients\Components\All' => 'All',
        ];
    }

    public function registerSettings()
    {
    }
}
