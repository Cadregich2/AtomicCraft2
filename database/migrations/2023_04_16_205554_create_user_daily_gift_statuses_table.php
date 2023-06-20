<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDailyGiftStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_daily_gift_status', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->boolean('award_received')->default(false);
            $table->integer('days_received')->default(0);
            $table->timestamps();

            $table->index('user_id', 'daily_gift_user_idx');
            $table->foreign('user_id', 'daily_gift_user_fk')
                ->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_daily_gift_status');
    }
}
