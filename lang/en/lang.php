<?php

return [
    'plugin' => [
        'name' => 'SimpleCatalog',
        'description' => 'A lightweight catalog with categories and products with.',
    ],
    'catalog' => [
        'menu_label' => 'Catalog',
        'menu_description' => 'Manage Catalog Products',
        'products' => 'Products',
        'create_product' => 'catalog product',
        'categories' => 'Categories',
        'create_category' => 'catalog category',
        'access_posts' => 'Manage the catalog products',
        'access_categories' => 'Manage the catalog categories',
        'delete_confirm' => 'Are you sure?'
    ],
    'products' => [
        'list_title' => 'Manage the catalog products',
        'category' => 'Category',
        'hide_published' => 'Hide published',
        'new_product' => 'New product',
    ],
    'product' => [
        'name' => 'Name',
        'name_placeholder' => 'New product name',
        'price' => 'Price',
        'ranking' => 'Ranking',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-product-slug',
        'short_description' => 'Short description',
        's_description_placeholder' => 'New product short description',
        'description' => 'Description',
        'description_placeholder' => 'New product description',
        'quantity' => 'Quantity',
        'category' => 'Category',
        'created' => 'Created',
        'updated' => 'Updated',
        'tab_edit' => 'Edit',
        'tab_stock' => 'Stock',
        'category_comment' => 'Select a category the catalog product belongs to',
        'category_placeholder' => 'There are no categories, you should create one first!',
        'tab_info' => 'Information',
        'tab_images' => 'Images',
        'images' => 'Product Images',
        'featured_image' => 'Featured Image',
        'delete_confirm' => 'Do you really want to delete this product?',
        'close_confirm' => 'The product is not saved.',
        'return_to_posts' => 'Return to products list',
        'status_e' => 'Enabled',
        'status_d' => 'Disabled',
    ],
    'categories' => [
        'list_title' => 'Manage the catalog categories',
        'new_category' => 'New category',
        'uncategorized' => 'Uncategorized',
    ],
    'category' => [
        'name' => 'Name',
        'name_placeholder' => 'New category name',
        'slug' => 'Slug',
        'slug_placeholder' => 'new-category-slug',
        'short_description' => 'Short description',
        's_description_placeholder' => 'New category short description',
        'description' => 'Description',
        'description_placeholder' => 'New category description',
        'products' => 'Products',
        'delete_confirm' => 'Do you really want to delete this category?',
        'return_to_categories' => 'Return to the blog category list',
    ],
    'settings' => [
        'category_title' => 'Category List',
    ],
    'component_list' => [
        'name' => 'Product list',
        'description' => 'The list of products added to the catalog'
    ]
];
