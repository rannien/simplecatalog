<?php namespace Wboyz\SimpleCatalog\Updates;

use Wboyz\SimpleCatalog\Models\Category;
use Wboyz\SimpleCatalog\Models\Product;
use Seeder;

class SeedAllTables extends Seeder
{

    public function run()
    {
        //
        // @todo
        //
        // Add a Welcome post or something
        //

        Category::create([
            'name' => trans('wboyz.simplecatalog::lang.categories.uncategorized'),
            'slug' => 'uncategorized',
        ]);
        
        Product::create([
            'name' => 'DELL Inspiron 3531 168905',
            'slug' => 'dell-inspiron-3531-168905',
            'short_description' => 'Intel® Core™ i5-4210U • Linux • 8GB • 1TB HDD • 15.6" WXGA HD LED • AMD Radeon™ HD R7 M265 2GB',
            'description' => '
                <ul>
                    <li>Kijelző méret 	15.6" WXGA HD LED GlareType 1366x768 pixel</li>
                    <li>Processzor 	Intel® Core™ i5-4210U Processor (3M Cache, up to 2.70 GHz)</li>
                    <li>Memória 	8GB DDR3L/1600 MHz</li>
                    <li>Merevlemez 	1TB 5400RPM SATA</li>
                    <li>Grafikus vezérlő 	AMD Radeon™ R7 M265 2GB</li>
                    <li>Optikai meghajtó 	USB DVD-RW (vásárolható)</li>
                    <li>Operációs rendszer 	Linux</li>
                    <li>LAN 	10/100mbps LAN</li>
                    <li>WLAN 	Wireless 802.11b/g/n</li>
                    <li>Bluetooth 	Bluetooth 4.0</li>
                    <li>Audió 	Waves MaxxAudio® 4.0</li>
                    <li>HDMI port 	Van</li>
                    <li>Webkamera 	1,0 MP HD integrált webkamera beépített digitális mikrofonnal</li>
                    <li>Kártyaolvasó 	3in1 Card reader</li>
                    <li>USB port 	USB 2.0 (1db) • USB 3.0 (2db)</li>
                    <li>Akkumulátor leírás 	43 Wh (Lithium-ion)</li>
                    <li>Súly 	2.38kg</li>
                    <li>Méret 	380 x 259 x 21.8 mm</li>
                    <li>Garancia 	36 hónap</li>
                </ul>
            ',
            'price' => 139000,
            'quantity' => 2,
            'ranking' => 1,
            'status' => 1,
        ]);
    }

}
