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
    public $attachOne = [];
    public $attachMany = [];

}