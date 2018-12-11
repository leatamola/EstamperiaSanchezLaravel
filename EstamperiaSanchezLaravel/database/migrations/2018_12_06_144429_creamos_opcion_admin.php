<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreamosOpcionAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('users', function (Blueprint $table){
          $table->string('admin')->default(0);
          $table->string('dni')->nullable();
          $table->string('tel')->nullable();
          $table->string('avatar')->nullable()->default(0);
          $table->string('sexo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      schema::table('users', function (Blueprint $table){
        $table->dropColumn('admin');
        $table->dropColumn('dni');
        $table->dropColumn('phone');
        $table->dropColumn('avatar');
        $table->dropColumn('sexo');
      });
    }
}
