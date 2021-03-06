<?php namespace Wboyz\SimpleCatalog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Categories Back-end Controller
 */
class Categories extends Controller
{
    public $requiredPermissions = ['wboyz.simplecatalog.access_categories'];
    
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Wboyz.SimpleCatalog', 'catalog', 'categories');
    }
}