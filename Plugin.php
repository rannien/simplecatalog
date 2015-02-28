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
            'catalog' => [
                'label'       => 'wboyz.simplecatalog::lang.catalog.menu_label',
                'url'         => Backend::url('wboyz/simplecatalog/products'),
                'icon'        => 'icon-newspaper-o',
                'permissions' => ['wboyz.simplecatalog.*'],
                'order'       => 500,

                'sideMenu' => [
                    'products' => [
                        'label'       => 'wboyz.simplecatalog::lang.catalog.products',
                        'icon'        => 'icon-tag',
                        'url'         => Backend::url('wboyz/simplecatalog/products'),
                        'permissions' => ['wboyz.simplecatalog.access_products'],
                    ],
                    'categories' => [
                        'label'       => 'wboyz.simplecatalog::lang.catalog.categories',
                        'icon'        => 'icon-list',
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
            'wboyz.simplecatalog.access_products'    => ['label' => 'wboyz.simplecatalog::lang.products.list_title'],
            'wboyz.simplecatalog.access_categories'  => ['label' => 'wboyz.simplecatalog::lang.categories.list_title']
        ];
    }
    
    public function registerComponents()
{
    return [
        'Wboyz\SimpleCatalog\Components\ProductList' => 'productList'
    ];
}

}
