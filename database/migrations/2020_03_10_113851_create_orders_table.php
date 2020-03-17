<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');           
            $table->integer('store_id');
            $table->string('merchant_order_id',100);
            $table->string('recipient_name',100);
            $table->string('recipient_phone')->nullable();
            $table->text('recipient_address');
            $table->integer('recipient_city');
            $table->integer('recipient_zone');
            $table->integer('recipient_area');
            $table->integer('delivery_type');
            $table->integer('item_type');
            $table->string('special_instruction',100);
            $table->integer('item_quantity')->default(1);
            $table->float('item_weight');
            $table->string('item_description');
            $table->integer('price')->default(0);
            $table->integer('amount_to_collect')->default(0);
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
