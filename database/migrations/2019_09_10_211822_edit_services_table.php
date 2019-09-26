<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('services', function (Blueprint $table) {
           $table->dropColumn('date');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {

         Schema::table('services', function (Blueprint $table) {
           $table->string('date');
         });
     }
}
