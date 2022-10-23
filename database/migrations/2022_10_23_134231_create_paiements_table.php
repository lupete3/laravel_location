<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->double('montantPaye');
            $table->dateTime('datePaiement');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('location_id')->constrained('location');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('paiements', function(Blueprint $table){
            $table->dropForeign(['user_id', 'location_id']);
        });
        Schema::dropIfExists('paiements');
    }
};
