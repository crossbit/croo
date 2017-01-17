<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Portfolio;
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
        $images = Portfolio::all();


        return view('portfolio.index')
                        ->with('categories', $categories)
                        ->with('images', $images);
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

        $image = \Image::make($request->file('img_path'));
        $path = public_path() . '/uploads/portfolio/';
        $imageName = time() . uniqid() . $request->file('img_path')->getClientOriginalName();
     

        //resize
        $image->resize(650, 350);
           dump($image);
        // save resized
        $image->save($path.$imageName);
        
     
        $result['img_path'] = '/uploads/portfolio/'.$imageName;
        
        dump($result);




        if (!empty($request->file('img_path2'))) {
            $imageName2 = time() . uniqid() . $request->file('img_path2')->getClientOriginalName();
            $request->file('img_path2')->move($path, $imageName2);
            $result['img_path2'] = '/uploads/portfolio/' . $imageName2;
        }
        if (!empty($request->file('img_path3'))) {
            $imageName3 = time() . uniqid() . $request->file('img_path3')->getClientOriginalName();
            $request->file('img_path3')->move($path, $imageName3);
            $result['img_path3'] = '/uploads/portfolio/' . $imageName3;
        }
        if (!empty($request->file('img_path4'))) {
            $imageName4 = time() . uniqid() . $request->file('img_path4')->getClientOriginalName();
            $request->file('img_path4')->move($path, $imageName4);
            $result['img_path4'] = '/uploads/portfolio/' . $imageName4;
        }
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
        $result = Portfolio::findOrFail($id);

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

        $portfolios = DB::select('select * from portfolios where category_id = category_id', ['category_id' => $categoryId]);

        return view('portfolio.getPortfolioCategory', ['portfolios' => $portfolios]);
    }

}
