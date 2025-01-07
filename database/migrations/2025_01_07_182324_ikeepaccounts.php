<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ikeepaccounts', function (Blueprint $table)
        {
            $table->id();
            $table->timestamps();
            $table->string('accnt_NAME');
            $table->string('accnt_PASS');
            $table->string('seed_PHRASE');
            $table->foreign('seed_PHRASE')
                  ->references('seed_PHRASE')
                  ->on('ikeepusers')
                  ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
