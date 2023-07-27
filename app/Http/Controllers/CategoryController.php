<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class CategoryController extends Controller {

    /**
     * @param Category $category
     *
     * @return View
     */
    public function index( Category $category ): View {

        return view( 'admin.category.index', [ 'categories' => $category->all() ] );
    }

    /**
     * @param StoreCategoryRequest $storeCategoryRequest
     *
     * @return RedirectResponse
     */
    public function store( StoreCategoryRequest $storeCategoryRequest ): RedirectResponse {
        try {
            Category::create( $storeCategoryRequest->all() );
        } catch ( \Exception $e ) {
            Log::error( $e );
        }

        return redirect()->route( 'admin.category.index' );
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
     * @param Category $category
     *
     * @return RedirectResponse
     */
    public function show( Category $category ) {
        return view( 'admin.category.show', [ 'category' => $category ] );
    }


    public function edit( Category $category, StoreCategoryRequest $storeCategoryRequest, ) {

        $category::update( $storeCategoryRequest->all() );

        return redirect()->route( 'admin.category.index' );
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
     * @param $id
     *
     * @return RedirectResponse
     */
    public function destroy( $id ) {
        Category::destroy( $id );

        return redirect()->route( 'admin.category.index' );
    }
}
