<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function($table)
      {
        $table->string('display_name')->nullable()->after('employee');
        $table->string('gender')->nullable()->after('display_name');
        $table->string('specialized')->nullable()->after('gender');
        $table->boolean('mon')->nullable()->after('specialized');
        $table->boolean('tue')->nullable()->after('mon');
        $table->boolean('wed')->nullable()->after('tue');
        $table->boolean('thur')->nullable()->after('wed');
        $table->boolean('fri')->nullable()->after('thur');
        $table->boolean('sat')->nullable()->after('fri');
        $table->boolean('sun')->nullable()->after('sat');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
