<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return product::create(request()->all());
    }
}
