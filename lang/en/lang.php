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
        'slug' => 'Slug',
        'slug_placeholder' => 'new-product-slug',
        'short_description' => 'New product short description',
        'description' => 'New product description',
        'quantity' => 'New product quantity',
        'category' => 'Category',
        'created' => 'Created',
        'updated' => 'Updated',
        'tab_edit' => 'Edit',
        'tab_category' => 'Category',
        'categories_comment' => 'Select a category the blog post belongs to',
        'categories_placeholder' => 'There are no categories, you should create one first!',
        'tab_manage' => 'Manage',
        'image' => 'Featured Image',
        'delete_confirm' => 'Do you really want to delete this product?',
        'close_confirm' => 'The product is not saved.',
        'return_to_posts' => 'Return to products list'
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
];
