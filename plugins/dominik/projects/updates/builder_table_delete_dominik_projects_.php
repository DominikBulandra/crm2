<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDominikProjects extends Migration
{
    public function up()
    {
        Schema::dropIfExists('dominik_projects_');
    }
    
    public function down()
    {
        Schema::create('dominik_projects_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('deal_id');
            $table->integer('places_id');
        });
    }
}
