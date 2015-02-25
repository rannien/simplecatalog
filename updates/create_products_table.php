<?php namespace Wboyz\SimpleCatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('wboyz_simplecatalog_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name', 150);
            $table->string('image');
            $table->string('slug', 150)->index();
            $table->string('short_description', 150)->nullable();
            $table->mediumText('description')->nullable();
            $table->decimal('quantity', 19, 4);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wboyz_simplecatalog_products');
    }

}
