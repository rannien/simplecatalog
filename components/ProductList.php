<?php namespace Wboyz\SimpleCatalog\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Wboyz\SimpleCatalog\Models\Product;

class ProductList extends ComponentBase
{

    /**
     * Reference to the page name for linking to posts.
     * @var string
     */
    public $productPage;

    public $products;

    public function componentDetails()
    {
        return [
            'name'        => 'wboyz.simplecatalog::lang.component_list.name',
            'description' => 'wboyz.simplecatalog::lang.component_list.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'productPage' => [
                'title'       => 'wboyz.simplecatalog::lang.component_list.profile',
                'description' => 'wboyz.simplecatalog::lang.component_list.profile_description',
                'type'        => 'dropdown',
                'default'     => 'termek'
            ]
        ];
    }

    public function getProductPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->prepareVars();
        $this->addCss('/plugins/wboyz/simplecatalog/assets/css/wboyz.simplecatalog-media-items.css');
        $this->products = $this->page['products'] = $this->listProducts();
    }

    protected function prepareVars()
    {
        $this->productPage = $this->page['productPage'] = $this->property('productPage');
    }

    public function listProducts()
    {
        // load the products
        $products = Product::where('status', '=', '1')
            ->orderBy('ranking', 'desc')
            ->get();

        /*
         * Add a "url" helper attribute for linking to each post and category
         */
        $products->each(function($product){
            $product->setUrl($this->productPage, $this->controller);
        });

        return $products;
    }

}
