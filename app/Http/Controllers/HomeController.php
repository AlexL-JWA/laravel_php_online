<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller {

    public function __construct() {
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() {
//        $products = DB::table( 'users' )->where( 'name', '=', 'Gerda Stamm' )->get();
//        $products = DB::table( 'users' )->where( 'name', '=', 'Gerda Stamm' )->first();
//        $products = DB::table( 'users' )->where( 'name', '=', 'Gerda Stamm' )->value( 'email' );
//        $products = DB::table( 'users' )->pluck( 'name' );
//        $products = DB::table( 'users' )->max( 'id' );
//        $products = DB::table( 'users' )->min( 'id' );
//        $products = DB::table( 'users' )->select( 'name', 'id' )->get();
//        $products = DB::table( 'users' )->select( 'name', 'id', 'email as e' )->get();
//        $products = DB::table( 'users' )->select( 'name', 'id', 'email as e' )->get();

        // типа пагинация
//        $products = DB::table( 'users' )->orderBy( 'id' )->chunk( 2, function ( $chunk ) {
//            dd( $chunk );
//        } );

//        dd( $products );
        return view( 'welcome' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request ) {
        if ( $request->file( 'myFile' )->isValid() ) {
            $request->file( 'myFile' )->store( 'images' );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id ) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id ) {
        //
    }
}
