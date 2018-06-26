<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
        $table->increments('id');
        $table->string('code');
        $table->unsignedInteger('payment_id');
        $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
        $table->enum('status', ['created', 'denied', 'payed']);
        $table->decimal('cost');
        $table->decimal('interest_cost');
        $table->enum('system', ['PayPal', 'Stripe']);
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
        Schema::dropIfExists('transactions');
    }
}
