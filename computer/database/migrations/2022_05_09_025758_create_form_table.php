<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('session', function (Blueprint $table) {
            $table->id();
            $table->string('t_session')->unique();
        });

        Schema::create('way', function (Blueprint $table) {
            $table->id();
            $table->string('t_way')->unique();
        });

        Schema::create('class', function (Blueprint $table) {
            $table->id();
            $table->string('t_class')->unique();

            $table->t_class = "";
        });

        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('user_session');
            $table->string('city');
            $table->string('country');
            $table->string('sch_name');
            $table->string('gender');
            $table->string('way');
            $table->string('class');
            $table->string('stu_name');
            $table->string('ph_num');
            $table->string('onner');
            $table->boolean('accept');
            $table->timestamps();

            $table->foreign('user_session')->references('t_session')->on('session');
            $table->foreign('way')->references('t_way')->on('way');
            $table->foreign('class')->references('t_class')->on('class');
        });


        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('form_id');
            $table->string('user_session');
            $table->string('way');
            $table->string('class');
            $table->float('record');
            $table->timestamps();

            $table->foreign('form_id')->references('id')->on('forms');
            $table->foreign('user_session')->references('t_session')->on('session');
            $table->foreign('way')->references('t_way')->on('way');
            $table->foreign('class')->references('t_class')->on('class');
        });

        if(DB::table('class')->count() == 0) {
            DB::table('class')->insert(
                array(
                    'id' => NULL,
                    't_class' => '소프트웨어개발과'
                )
            );

            DB::table('class')->insert(
                array(
                    'id' => NULL,
                    't_class' => '인공지능소프트웨어과'
                )
            );

            DB::table('class')->insert(
                array(
                    'id' => NULL,
                    't_class' => '게임개발과'
                )
            );

            DB::table('class')->insert(
                array(
                    'id' => NULL,
                    't_class' => '미정'
                )
            );

            DB::table('session')->insert(
                array(
                    'id' => NULL,
                    't_session' => '검정고시'
                )
            );

            DB::table('session')->insert(
                array(
                    'id' => NULL,
                    't_session' => '졸업'
                )
            );

            DB::table('session')->insert(
                array(
                    'id' => NULL,
                    't_session' => '졸업예정'
                )
            );

            DB::table('way')->insert(
                array(
                    'id' => NULL,
                    't_way' => '일반전형'
                )
            );

            DB::table('way')->insert(
                array(
                    'id' => NULL,
                    't_way' => '특별전형'
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
        Schema::dropIfExists('form');
    }
};
