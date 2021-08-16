<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80);
            $table->string('barcode', 55);
            
            $table->string('description', 255)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('units')->unsigned()->default(0);
            $table->string('image', 80)->nullable();

            $table->foreignId('categories_id')->references('id')->on('categories')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('providers_id')->references('id')->on('providers')->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('creator_user_id')->references('id')->on('users')->constrained()
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
