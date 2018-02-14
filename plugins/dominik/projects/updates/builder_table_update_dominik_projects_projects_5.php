<?php namespace Dominik\Projects\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikProjectsProjects5 extends Migration
{
    public function up()
    {
        Schema::table('dominik_projects_projects', function($table)
        {
            $table->renameColumn('id_city', 'city_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_projects_projects', function($table)
        {
            $table->renameColumn('city_id', 'id_city');
        });
    }
}
