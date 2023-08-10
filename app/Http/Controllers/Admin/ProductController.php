<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return view('admin.product.index');
    }

    public function show(){
        return view('admin.product.show');
    }

    public function edit(){
        return view('admin.product.edit');
    }
    public function create(){
        return  view('admin.product.create');
    }
}
