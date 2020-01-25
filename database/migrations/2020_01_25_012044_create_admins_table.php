<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id_admin');
            $table->string('name_admin', 100)->nullable(false);
            $table->string('email_admin', 100)->nullable(false)->unique('email_admin');
            $table->string('password_admin', 250)->nullable(false);
            $table->integer('is_active')->default(1);
            $table->string('role', 20)->default('admin');
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
        Schema::dropIfExists('admins');
    }
}
