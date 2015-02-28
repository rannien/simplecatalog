<?php namespace Wboyz\SimpleCatalog\Components;

use Cms\Classes\ComponentBase;
use Wboyz\SimpleCatalog\Models\Product;

class ProductList extends ComponentBase
{

    public $products;
    
    public function componentDetails()
    {
        return [
            'name'        => 'Product List',
            'description' => 'The list of products added to the catalog'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function onRun()
    {
        // if status = 1
        // order by ranking asc
        $this->products = Product::where('status', '=', 1);
    }

}