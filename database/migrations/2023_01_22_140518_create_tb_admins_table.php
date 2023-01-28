<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_admins', function (Blueprint $table) {
            $table->integer('employee_admin_id')->primary()->unique();
            $table->integer('employee_id')->uniqid();
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('status_workadmin')->default(1); //1=ทำงาน,0=ไม่มำงาน
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_admins');
    }
}
