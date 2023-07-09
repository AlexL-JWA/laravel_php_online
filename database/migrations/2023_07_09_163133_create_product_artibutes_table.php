<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductArtibutesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'product_artibutes', function ( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'products_id' );
            $table->string( 'attribute_name', 100 );
            $table->string( 'attribute_value', 255 );
            $table->timestamps();

            $table->foreign( 'products_id' )
                ->references( 'id' )
                ->on( 'products' )
                ->onDelete( 'cascade' );
            $table->unique( 'attribute_name' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'product_artibutes' );
    }
}
