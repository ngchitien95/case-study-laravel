<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('name_product',200);
            $table->string('email',100);
            $table->string('address',200);
            $table->string('phone_number',20);
            $table->string('note',300);
            $table->string('price',20);
            $table->string('qty');
            $table->string('total');
            $table->string('subtotal');
            $table->boolean('status')->default(1);


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
        Schema::dropIfExists('customer');
    }
}
