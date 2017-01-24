<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __construct()
    {
    }

    public function getIndex() {
        return view('admin.index');
    }

}
