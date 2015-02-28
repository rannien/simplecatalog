<?php

return [
    'plugin' => [
        'name' => 'SimpleCatalog',
        'description' => 'Egy egyszerű katalógus kategóriákkal és termékekkel.',
    ],
    'catalog' => [
        'menu_label' => 'Katalógus',
        'menu_description' => 'Termékek kezelése',
        'products' => 'Termékek',
        'create_product' => 'catalog product',
        'categories' => 'Kategóriák',
        'create_category' => 'catalog category',
        'access_posts' => 'Termékek kezelése',
        'access_categories' => 'Kategóriák kezelése',
        'delete_confirm' => 'Biztos vagy benne?'
    ],
    'products' => [
        'list_title' => 'Katalógus termékeinek kezelése',
        'category' => 'Kategória',
        'hide_inactive' => 'Inaktívak elrejtése',
        'new_product' => 'Új termék',
    ],
    'product' => [
        'name' => 'Név',
        'name_placeholder' => 'Új termék neve',
        'price' => 'Ár',
        'ranking' => 'Sorrend',
        'slug' => 'Slug',
        'slug_placeholder' => 'uj-termek-url',
        'short_description' => 'Rövid leírás',
        's_description_placeholder' => 'Új termék rövid leírása',
        'description' => 'Leírás',
        'description_placeholder' => 'Új termék leírása',
        'quantity' => 'Darabszám',
        'category' => 'Kategória',
        'created' => 'Létrehozva',
        'updated' => 'Frissítve',
        'tab_edit' => 'Szerkesztés',
        'tab_stock' => 'Készlet',
        'category_comment' => 'Válassz egy kategóriát, amibe a termék tartozik',
        'category_placeholder' => 'Még nincsenek kategóriák, először hozz létre egyet!',
        'tab_info' => 'Információ',
        'featured_image' => 'Kiemelt kép',
        'delete_confirm' => 'Biztosan törölni szeretnéd ezt a terméket?',
        'close_confirm' => 'A termék nincs elmentve.',
        'return_to_posts' => 'Visszatérés a terméklistához',
        'status_e' => 'Engedélyezve',
        'status_d' => 'Visszavonva',
    ],
    'categories' => [
        'list_title' => 'Katalógus kategóriáinak kezelése',
        'new_category' => 'Új kategória',
        'uncategorized' => 'Kategorizálatlan',
    ],
    'category' => [
        'name' => 'Név',
        'name_placeholder' => 'Új kategória neve',
        'slug' => 'Slug',
        'slug_placeholder' => 'uj-kategoria-url',
        'short_description' => 'Új kategória rövid leírása',
        'description' => 'Új kategória leírása',
        'products' => 'Termékek',
        'delete_confirm' => 'Biztosan törölni szeretnéd ezt a kategóriát?',
        'return_to_categories' => 'Visszatérés a kategórial istához',
    ],
    'settings' => [
        'category_title' => 'Kategória lista',
    ],
    'component_list' => [
        'name' => 'Termék lista',
        'description' => 'A katalógusban felvett termékek listája'
    ]
];
