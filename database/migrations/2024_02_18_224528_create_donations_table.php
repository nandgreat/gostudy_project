<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_ref');
            $table->tinyInteger('donation_type')->comment('0 - Cash Donation, 1 - Non Cash donation');
            $table->double('total_amount');
            $table->tinyInteger('frequency')->comment('0 - One time donation, 1 - Recurring');
            $table->string('donation_interval')->comment('Weekly, Monthly, Yearly');
            $table->string('payment_method')->comment('0 - Card, 1 - Transfer');
            $table->string('narration');
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
        Schema::dropIfExists('donations');
    }
}
