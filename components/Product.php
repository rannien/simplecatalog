<?php namespace Wboyz\SimpleCatalog\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Wboyz\SimpleCatalog\Models\Product as CatalogProduct;

class Product extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'wboyz.simplecatalog::lang.component_profile.name',
            'description' => 'wboyz.simplecatalog::lang.component_profile.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'wboyz.simplecatalog::lang.component_profile.product_slug',
                'description' => 'wboyz.simplecatalog::lang.component_profile.product_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->product = $this->page['product'] = $this->loadProduct();
    }

    protected function loadProduct()
    {
        $slug = $this->property('slug');
        
        try {
            $product = CatalogProduct::isEnabled($slug)->firstOrFail();
        } catch ( ModelNotFoundException $e ) {
            return \Response::make($this->controller->run('404'), 404);
        }
        
        return $product;
    }

}