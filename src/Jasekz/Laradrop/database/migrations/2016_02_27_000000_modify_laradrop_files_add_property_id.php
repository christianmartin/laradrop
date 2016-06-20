<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyLaradropFilesAddPropertyId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laradrop_files', function ($table) {
            $table->integer('property_id')->nullable()->index()->unsigned()->after('id');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laradrop_files', function ($table) {
            $table->dropColumn('property_id');
        });
    }
}
