<?php namespace Wboyz\SimpleCatalog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('wboyz_simplecatalog_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 150);
            $table->string('slug', 150)->index();
            $table->string('short_description', 150)->nullable();
            $table->mediumText('description')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wboyz_simplecatalog_categories');
    }

}
