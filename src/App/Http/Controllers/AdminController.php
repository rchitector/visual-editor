<?php

namespace Rchitector\VisualEditor\App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('visual-editor::admin.index');
    }
}
