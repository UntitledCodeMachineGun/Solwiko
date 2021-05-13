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
            $table->id();
            $table->tinyInteger(column:'status')->default(0);
            $table->string(column:'name')->nullable();
            $table->string(column:'surname')->nullable();
            $table->string(column:'fathname')->nullable();
            $table->string(column:'phone')->nullable();
            $table->string(column:'city')->nullable();
            $table->string(column:'post_num')->nullable();
            $table->text(column:'add_info')->nullable();
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
