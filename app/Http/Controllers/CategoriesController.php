<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
    	return "je suis la page categories";
    }

    public function show($id){
    	return "Je suis la page de la categorie $id";
    }
}
