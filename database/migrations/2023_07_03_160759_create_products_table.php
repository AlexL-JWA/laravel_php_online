<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'products', function ( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'product_author_id' )->nullable();
            $table->string( 'name' );
            $table->string( 'type', 50 )->comment( 'Simple | Composite | Virtual' );
            $table->string( 'title', 150 );
            $table->longText( 'description' )->nullable();
            $table->string( 'short_description', 255 )->nullable();
            $table->string( 'status', 100 )->default( 'draft' )
                ->comment( 'Publish | Draft | Scheduled | Trashed' );
            $table->string( 'slug', 255 )->unique();
            $table->integer( 'qty' )->default( 0 );
            $table->unsignedInteger( 'price' )->nullable();
            $table->timestamps();

            $table->foreign( 'product_author_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'products' );
    }
}
