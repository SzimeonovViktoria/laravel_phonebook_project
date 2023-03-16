<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{

        Schema::create( 'users', function( Blueprint $table ){

            $table->id();
            $table->string( 'name' );
            $table->string( 'avatar' );
            $table->string( 'home_country' );
            $table->string( 'home_city' );
            $table->string( 'home_address' );
            $table->string( 'mailing_country' );
            $table->string( 'mailing_city' );
            $table->string( 'mailing_address' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void{

        Schema::dropIfExists( 'users' );
    }
};
