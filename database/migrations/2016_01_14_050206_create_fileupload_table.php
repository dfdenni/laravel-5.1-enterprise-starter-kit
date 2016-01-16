<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileuploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileupload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_name');
            $table->string('client_id');
            $table->unsignedbigInteger('user_id')->nullable()->default(null);
            $table->unsignedbigInteger('role_id')->nullable()->default(null);
            $table->string('path');
            $table->string('filename');
            $table->string('password_file');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_tag')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles')
                  ->onDelete('cascade');      
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fileupload');
    }
}
