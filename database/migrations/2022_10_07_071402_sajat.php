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
        Schema::create('sajat', function (Blueprint $table) {    
            $table->id();       
            $table->string('sajatnev')->nullable();
            $table->string('hanyadev')->nullable();
            $table->string('mikorszul')->nullable();
            $table->string('cim')->nullable();
            $table->timestamp('arrived_at')->nullable();
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
        Schema::dropIfExists('sajat');
    }
};
