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

//        $p = DB::table( 'products' )
//            ->join( 'category_product', function ( $join ) {
//                $join->on( 'products.id', '=', 'product_id' );
//            } )
//            ->join( 'category_product', 'products.id', '=', 'category_product.product_id' )
//            ->rightJoin( 'category_product', 'products.id', '=', 'category_product.product_id' )
//            ->leftJoin( 'category_product', 'products.id', '=', 'category_product.product_id' )
//        $p = DB::table( 'users' )
//            ->whereIn( 'id', [ 1, 2, 3 ] )
//            ->where( 'price', '>', 1000 )
//            ->whereDate( 'create_at', '2023-07-10' )
//            ->get();
//            ->insert(
//                [
//                    [
//                        'name'     => 'Alex',
//                        'email'    => 'ggddsads@hhd.ua',
//                        'password' => '348293ucjksal',
//                    ],
//                    [
//                        'name'     => 'Alex1',
//                        'email'    => 'ggdadass32@hhd.ua',
//                        'password' => '348293u452cjksal',
//                    ],
//                ]
//            );
//            ->where( 'id', '>', '5' )
//            ->update( [ 'name' => 'Alexxx' ] );
//            ->updateOrInsert( [ 'name' => 'Alexx', 'email' => 'gajdk@hdkhajs.ua' ], [ 'password' => '2121' ] );
//            ->where( 'id', 5 )->delete();
//            ->truncate();

//        dd( $p );

//        $f = Flight::all();
//        foreach ($f as $value){
//            echo $value->title;
//        }

//        Flight::chunk( 3, function ( $f ) {
//            dd( $f );
//        } );

//        $cat = Category::find( 1 );
//
//        dd( $cat->product );

//        $p = Product::find( 2 );
//        dd( $p->FullProductName );
//        $p->title = 'TRkjkjas';
//        dd( $p->title );

//        $str = 'dsdas';
//        $st  = Hash::make( $str );
//
//
//        dd( $st );

        return view( 'welcome' );
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
