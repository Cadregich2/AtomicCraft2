<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('goods_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('goods_name');
            $table->unsignedInteger('goods_count');
            $table->unsignedBigInteger('purchase_price');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('goods_id')
                ->references('id')
                ->on('goods')->onDelete('set null');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
