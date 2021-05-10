<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal__memberships', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('price')->nullable();
            $table->string('service')->nullable();
            $table->string('perk')->nullable();
            $table->string('duration')->nullable();
            $table->string('app')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('personal__memberships');
    }
}