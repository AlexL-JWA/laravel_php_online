<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageMetasTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'page_metas', function ( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'pages_id' );
            $table->string( 'meta_key', 100 );
            $table->longText( 'meta_value' );
            $table->timestamps();

            $table->foreign( 'pages_id' )
                ->references( 'id' )
                ->on( 'pages' )
                ->onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'page_metas' );
    }
}
