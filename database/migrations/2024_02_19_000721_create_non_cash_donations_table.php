<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonCashDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_cash_donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('items_id');
            $table->foreign('items_id')->references('id')->on('donation_items');
            $table->unsignedBigInteger('donation_id');
            $table->foreign('donation_id')->references('id')->on('donations');
            $table->integer('quantity');
            $table->integer('amount');
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
        Schema::dropIfExists('non_cash_donations');
    }
}
