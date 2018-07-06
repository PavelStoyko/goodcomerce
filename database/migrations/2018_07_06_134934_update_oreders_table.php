<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateOredersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->integer('funding')->nullable();
            $table->integer('investing')->nullable();
            $table->enum('payment_method', ['Mpesa', 'Card'])->nullable();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {

            $table->integer('funding');
            $table->integer('investing');
            $table->enum('payment_method', ['Mpesa', 'Card']);
        });
    }
}
