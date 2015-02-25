<?php namespace Wboyz\SimpleCatalog;

use System\Classes\PluginBase;
use Backend;
use Lang;

/**
 * SimpleCatalog Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'SimpleCatalog',
            'description' => 'This is a simple back-end plugin for managing displayable products.',
            'author'      => 'Wboyz',
            'icon'        => 'icon-leaf'
        ];
    }
    
    public function registerNavigation()
    {
        return [
            'products' => [
                'label'       => Lang::get('wboyz.simplecatalog::lang.catalog.menu_label'),
                'url'         => Backend::url('wboyz/simplecatalog/products'),
                'icon'        => 'icon-pencil',
                'permissions' => ['wboyz.simplecatalog.*'],
                'order'       => 500,

                'sideMenu' => [
                    'products' => [
                        'label'       => Lang::get('wboyz.simplecatalog::lang.catalog.products'),
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('wboyz/simplecatalog/products'),
                        'permissions' => ['wboyz.simplecatalog.access_products'],
                    ],
                    'categories' => [
                        'label'       => Lang::get('wboyz.simplecatalog::lang.catalog.categories'),
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('wboyz/simplecatalog/categories'),
                        'permissions' => ['wboyz.simplecatalog.access_categories']
                    ],
                ]

            ]
        ];
    }
    
    public function registerPermissions()
    {
        return [
            'wboyz.simplecatalog.access_products'    => ['label' => Lang::get('wboyz.simplecatalog::lang.products.list_title')],
            'wboyz.simplecatalog.access_categories'  => ['label' => Lang::get('wboyz.simplecatalog::lang.categories.list_title')]
        ];
    }   

}
