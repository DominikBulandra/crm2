<?php namespace Dominik\Deals\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Deals extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController','Backend.Behaviors.RelationController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Dominik.Deals', 'main-menu-item');
    }
}
