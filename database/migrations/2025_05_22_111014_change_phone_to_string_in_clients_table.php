<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePhoneToStringInClientsTable extends Migration
{
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('phone', 20)->change();
        });
    }

    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->integer('phone')->change();
        });
    }
}
