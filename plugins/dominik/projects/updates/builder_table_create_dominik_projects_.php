<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDominikProjects extends Migration
{
    public function up()
    {
        Schema::create('dominik_projects_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('deal_id');
            $table->integer('places_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dominik_projects_');
    }
}
