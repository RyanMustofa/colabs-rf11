<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_users', function (Blueprint $table) {
            $table->id();
            $table->foreignID('user_id');
            $table->string('whatsapp_number')->default('-')->nullable();
            $table->string('link_telegram')->default('-')->nullable();
            $table->string('link_instagram')->default('-')->nullable();
            $table->string('link_facebook')->default('-')->nullable();
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
        Schema::dropIfExists('contact_users');
    }
}
