<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Portfolio;

class HomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        $categories = Category::all();
        $images = Portfolio::all();
        return view('home.index')
            ->with('categories', $categories)
            ->with('images', $images);
    }

    public function portfolio() {
        return redirect()->route('portfolio.index');
    }

    public function about() {
        $categories = Category::all();
        return view('home.about')->with('categories', $categories);
    }

    public function contact() {
        return view('home.contact');
    }

}
