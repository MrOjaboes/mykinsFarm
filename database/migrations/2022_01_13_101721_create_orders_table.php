<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->unsignedBigInteger('user_id');
            $table->enum('status',['pending','processing','completed','decline']);
            $table->float('grand_total');
            $table->integer('item_count');
            $table->string('payment_method')->default('cash_on_delivery');
            $table->boolean('is_paid')->default(false);

            $table->string('shipping_fullname');
            $table->string('shipping_address');
            $table->string('shipping_contact');
            $table->string('shipping_state');
            $table->string('shipping_city');
            $table->text('note')->nullable();

            $table->string('sbilling_fullname');
            $table->string('billing_address');
            $table->string('billing_contact');
            $table->string('billing_state');
            $table->string('billing_city');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
