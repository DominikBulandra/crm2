<?php namespace Dominik\Deals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDominikDealsDeal5 extends Migration
{
    public function up()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->string('notarial');
        });
    }
    
    public function down()
    {
        Schema::table('dominik_deals_deal', function($table)
        {
            $table->dropColumn('notarial');
        });
    }
}
