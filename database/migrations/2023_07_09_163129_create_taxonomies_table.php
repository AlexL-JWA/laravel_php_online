<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxonomiesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'taxonomies', function ( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'term_id' );
            $table->string( 'name', 150 )->unique();
            $table->string( 'description', 255 )->nullable();
            $table->timestamps();

            $table->foreign( 'term_id' )
                ->references( 'id' )
                ->on( 'terms' )
                ->onDelete( 'cascade' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'taxonomies' );
    }
}
