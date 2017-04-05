<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('content');
            $table->text('description');
            $table->text('journey');
            $table->text('note')->nullable();
            $table->tinyInteger('quantity');
            $table->tinyInteger('booked');
            $table->string('image');
            $table->integer('price');
            $table->string('meta_key')->nullable();
            $table->string('name_seo')->nullable();
            $table->string('tag')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->tinyInteger('status');
            $table->tinyInteger('is_hot');
            $table->integer('sale_id')->unsigned();
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->integer('traffic_id')->unsigned();
            $table->foreign('traffic_id')->references('id')->on('traffic')->onDelete('cascade');
            $table->integer('destination_id')->unsigned();
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('tours');
    }
}
