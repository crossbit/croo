<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Photo;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $portfolios = Portfolio::pluck('name', 'id')->all();
        return view('photo.create')
            ->with('portfolios', $portfolios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $result = $request->all();
        $image = Image::make($request->file('img'));
        $imageName = time() . uniqid() . $request->file('img')->getClientOriginalName();
        $path = public_path('/uploads/thumbnail');
        $img = Image::make($request->file('img'));
        $img->resize(650, 350, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path . '/' . $imageName);
        $destinationPath = public_path('/uploads/images');
        $image->save($destinationPath . '/' . $imageName);
        $result['img'] = '/uploads/images/' . $imageName;
        $result['thumbnail'] = '/uploads/thumbnail/' . $imageName;
        $photo = Photo::create($result);

        return redirect()
            ->route('photo.show', [
                'id' => $photo->id
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id) {
        $result = Photo::findOrFail($id);
        return view('photo.show')->with('result', $result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
