<?php namespace Wboyz\SimpleCatalog;

use System\Classes\PluginBase;
use Backend;

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
                'label'       => 'Catalog',
                'url'         => Backend::url('wboyz/simplecatalog/products'),
                'icon'        => 'icon-pencil',
                'permissions' => ['wboyz.simplecatalog.*'],
                'order'       => 500,

                'sideMenu' => [
                    'products' => [
                        'label'       => 'Products',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('wboyz/simplecatalog/products'),
                        'permissions' => ['wboyz.simplecatalog.access_products'],
                    ],
                    'categories' => [
                        'label'       => 'Categories',
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
            'wboyz.simplecatalog.access_products'    => ['label' => 'Manage the catalog products'],
            'wboyz.simplecatalog.access_categories'  => ['label' => 'Manage the catalog categories']
        ];
    }   

}
