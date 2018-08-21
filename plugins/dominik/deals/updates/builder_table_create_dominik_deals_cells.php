<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikDealsCells extends Migration
{
    public function up()
    {
        Schema::create('dominik_deals_cells', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('deal_id');
            $table->integer('cell_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_deals_cells');
    }
}
