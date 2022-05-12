<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
        });

        if (DB::table('users')->count() == 0) {
            DB::table('users')->insert(
                array(
                    'id' => NULL,
                    'name' => 'ww%Ps#QXrRNEEXE9Qe#wei&V*GoVZa%@oNrX27xx45gz8@Lnmm7fqvbF%mmFP#%3HgKGQa#!zrxiSC6HTGFrRKoQvKByvM$dRuG@aARmhbq$by5@U75LzoAjGeTMK9#T',
                    'password' => base64_encode(hash('sha256', '@02bAH9lfs1$&crS', 'true'))
                )
            );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
