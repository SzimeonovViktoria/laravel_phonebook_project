<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration{

        /**
         * Run the migrations.
         */
        public function up(): void{

            Schema::create( 'users', function( Blueprint $table ){

                $table->id();
                $table->string( 'name' );
                $table->string( 'avatar' )->default('avatar.png');;
                $table->string( 'home_country' )->nullable();
                $table->string( 'home_city' )->nullable();
                $table->string( 'home_address' )->nullable();
                $table->string( 'mailing_country' )->nullable();
                $table->string( 'mailing_city' )->nullable();
                $table->string( 'mailing_address' )->nullable();
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
