<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'pages', function ( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'author_id' );
            $table->string( 'page_title', 255 )->unique();
            $table->longText( 'page_content' )->nullable();
            $table->string( 'slug', 255 )->unique();
            $table->timestamps();

            $table->foreign( 'author_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'restrict' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'pages' );
    }
}
