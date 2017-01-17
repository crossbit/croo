<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Portfolio;
use App\Photo;
use App\Http\Requests\PortfolioAddRequest;
use Image;


class PortfolioController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = Category::all();
        $portfolios = Portfolio::with('photos')->get();
        return view('portfolio.index')
                        ->with('categories', $categories)
                        ->with('portfolios', $portfolios);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::pluck('name', 'id')->all();
        return view('portfolio.create')->with('categories', $categories);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioAddRequest $request) {
        $result = $request->all();
        $portfolio = Portfolio::create($result);
        return redirect()->route('portfolio.show', ['id' => $portfolio->id]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $result = Portfolio::with('photos')->where('id', '=', $id)->get();
        
        return view('portfolio.show')->with('result', $result);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $result = Portfolio::findOrFail($id);
        $categories = Category::pluck('name', 'id')->all();
        return view('portfolio.edit')->with('result', $result)->with('categories', $categories);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $result = Portfolio::findOrFail($id);
        $result->update($request->all());
        return redirect()->route('portfolio.show', ['id' => $result->id]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $result = Portfolio::findOrFail($id);
        $result->delete();
        $categories = Category::all();
        $images = Portfolio::all();
        return view('portfolio.index')
                        ->with('categories', $categories)
                        ->with('images', $images);
    }
    /**
     * Display all portfolios item from one category .
     *
     * @param  int  $categoryId
     * @return \Illuminate\Http\Response
     */
    public function getPortfoliosCategory($categoryId) {

         $portfolios = Portfolio::with('photos')->where('category_id', '=', $categoryId)->get();
         
        return view('portfolio.getPortfolioCategory', ['portfolios' => $portfolios]);
    }
}