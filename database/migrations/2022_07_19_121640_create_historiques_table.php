<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection("mysql2")->create('historiques', function (Blueprint $table) {
            $table->id();
            $table->string("surname");
            $table->string("firstname");
            $table->string("cardnumber");
            $table->string("userid");
            $table->string("title");//biblio
            $table->string("itype");//items
            $table->string("barcode");//items
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
        Schema::connection("mysql2")->dropIfExists('historiques');
    }
}
