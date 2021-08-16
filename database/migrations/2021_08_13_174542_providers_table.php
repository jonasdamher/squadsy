<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('tradename', 80)->nullable();
            $table->string('business_name', 32)->nullable();
            $table->char('cif', 20)->nullable();

            $table->string('email', 80)->nullable();           
            $table->integer('phone')->unsigned()->nullable();
            $table->integer('prefix_phone')->unsigned()->nullable();

            $table->string('province', 24)->nullable();
            $table->string('locality', 24)->nullable();
            $table->char('postal_code', 6)->nullable();
            $table->string('address', 64)->nullable();

            $table->foreignId('countries_id')->references('id')->on('countries')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        //
    }
}
