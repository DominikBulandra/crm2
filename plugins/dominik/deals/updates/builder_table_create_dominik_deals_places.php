<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikDealsPlaces extends Migration
{
    public function up()
    {
        Schema::create('dominik_deals_places', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('deal_id');
            $table->integer('places_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_deals_places');
    }
}
