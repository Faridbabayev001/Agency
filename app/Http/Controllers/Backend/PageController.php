<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }

    public function add_data()
    {
        return view('backend.add');
    }
}
