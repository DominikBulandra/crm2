<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikDealsDeal4 extends Migration
{
    public function up()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->date('date');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->dropColumn('date');
        });
    }
}
