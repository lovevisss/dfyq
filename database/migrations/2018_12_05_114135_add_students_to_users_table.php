<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudentsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('student_card');   //上传图片
            $table->string('student_num');
            $table->integer('uniclass_id'); //class id
            $table->string('phone');
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
            $table->dropColumn('student_card');
            $table->dropColumn('student_num');
            $table->dropColumn('uniclass_id');
            $table->dropColumn('phone');

        });
    }
}
