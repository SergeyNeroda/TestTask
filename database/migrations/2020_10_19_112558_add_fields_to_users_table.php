<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nickname')->unique()->after('id');;
            $table->string('surname')->nullable()->after('nickname');
            $table->string('avatar')->nullable()->after('surname');
            $table->string('phone')->nullable()->after('avatar');
            //$table->string('sex', 10)->after('phone');
            $table->enum('sex', ['Male', 'Female', 'Undefined'])->default('Undefined')->after('phone');
            $table->boolean('show_phone')->default(false)->after('sex');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nickname');
            $table->dropColumn('surname');
            $table->dropColumn('avatar');
            $table->dropColumn('phone');
            $table->dropColumn('sex');
            $table->dropColumn('show_phone');
        });
    }
}
