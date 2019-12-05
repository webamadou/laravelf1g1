<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('created_at','DESC')->get();
        return view('categories.index', compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $name = $request->input('name');
        $description = $request->input('desecription');
        Category::create(['name'=>$name]);
        return redirect('/categories');
        //dd($request->input('name'));
    }
}
