<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikDealsDeal3 extends Migration
{
    public function up()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->integer('user_id');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
