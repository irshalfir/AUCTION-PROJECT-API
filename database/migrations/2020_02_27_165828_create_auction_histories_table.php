<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_histories', function (Blueprint $table) {
            $table->bigIncrements('history_id');

            // auction_id foreign key
            $table->unsignedBigInteger('auction_id');
            $table->foreign('auction_id')
                ->references('auction_id')
                ->on('auctions');

            // stuff_id foreign key
            $table->unsignedBigInteger('stuff_id');
            $table->foreign('stuff_id')
                ->references('stuff_id')
                ->on('stuffs');

            //society_id foreign key 
            // or we can called this winner id
            $table->unsignedBigInteger('society_id');
            $table->foreign('society_id')
                ->references('society_id')
                ->on('societies');

            $table->integer('price_quote');

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
        Schema::dropIfExists('auction_histories');
    }
}
