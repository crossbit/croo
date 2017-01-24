<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryAddRequest;
use App\Category;

class CategoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        $categories = Category::all();
        return view('category.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryAddRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryAddRequest $request) {
        $result = Category::create($request->all());
        return redirect()->route('category.show', [
            'id' => $result->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $result = Category::findOrFail($id);
        return view('category.show')
            ->with('result', $result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {
        $result = Category::findOrFail($id);
        return view('category.edit')
            ->with('result', $result);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryAddRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryAddRequest $request, $id) {
        $result = Category::findOrFail($id);
        $result->update($request->all());
        return redirect()
            ->route('category.show', [
                'id' => $result->id
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function destroy($id) {
        $result = Category::findOrFail($id);
        $result->delete();
        $categories = Category::all();
        return view('category.index')
            ->with('categories', $categories);
    }

}
