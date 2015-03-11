<?php namespace Wboyz\SimpleCatalog\Models;

use Model;

/**
 * Product Model
 */
class Product extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wboyz_simplecatalog_products';

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i']
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'category' => ['Wboyz\SimpleCatalog\Models\Category', 'key' => 'category_id']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'featured_image' => ['System\Models\File']
    ];
    public $attachMany = [
        'images' => ['System\Models\File']
    ];

    public function scopeIsEnabled($query, $slug)
    {
        return $query
            ->where('status', '=', '1')
            ->where('slug', '=', $slug)
        ;
    }

    /**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {

        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }

}
