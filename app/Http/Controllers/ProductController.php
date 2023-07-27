<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductReqest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $storeProductReqest
     *
     * @return \Illuminate\Http\Response
     */
    public function store( StoreProductReqest $storeProductReqest ) {


        try {
            Product::create( $storeProductReqest->all() );
        } catch ( \Exception $e ) {
            Log::error( $e );

            return 'error';
        }

        return redirect()->route( 'home' );
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
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id, Category $category ) {


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


    public function destroy( $id ) {
        Category::destroy( $id );

        return redirect()->route( 'admin.category.index' );
    }
}
