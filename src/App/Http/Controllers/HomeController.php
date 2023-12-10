<?php

namespace Rchitector\VisualEditor\App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('visual-editor::index');
    }
}
