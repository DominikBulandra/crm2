<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikDealsClients extends Migration
{
    public function up()
    {
        Schema::create('dominik_deals_clients', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('deal_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_deals_clients');
    }
}
