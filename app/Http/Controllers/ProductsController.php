<?php

namespace App\Http\Controllers;

use App\Mail\TestMailling;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str ;
use Yajra\DataTables\DataTables;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function __construct()
    {
       // $this->middleware('auth')->except('index');
        #$this->authorize('admin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = \App\Category::pluck('name','id');
        return view('products.create', compact('categories'));
    }
    public function mail()
    {
        $name = 'Krunal';
        Mail::to('krunal@appdividend.com')->send(new TestMailling($name));

        return 'Email was sent';
    }
    public function index(Request $request)
    {

        if($request->ajax()){
            $data = Product::latest()->select('name','price','category_id')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        #$this->authorize('admin');
        $products = \App\Product::orderBy('created_at', 'DESC')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $request->validate([
            "name"=>"required|max:300|min:5",
            "price"=>"required|numeric",
            "product_image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
        ]);
        $produit = new Product();
        //On verfie si une image est envoyée
        if($request->has('product_image')){
            //On enregistre l'image dans un dossier
            $image = $request->file('product_image');
            //Nous allons definir le nom de notre image en combinant le nom du produit et un timestamp
            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/images/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $produit->images = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode uploadImage();
            $this->uploadImage($image, $folder, 'public', $image_name);
        }
        $produit->name          = $request->input('name');
        $produit->price         = $request->input('price');
        $produit->description   = $request->input('description');
        $produit->category_id   = $request->input('category_id');
        $produit->user_name     = Auth::id();
        $produit->save();
        return redirect(route('product.index'));
    }
    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        return $file;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$this->authorize('admin');
        $product = \App\Product::find($id);
        $categories = \App\Category::pluck('name','id');
        return view('products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
           'name'   => 'required',
           'price' => 'required | numeric',
           'product_image' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048'
        ]);
        $product = \App\Product::find($id);
        if($product){
            if($request->has('product_image')){
                //On enregistre l'image dans une variable
                $image = $request->file('product_image');
                if(file_exists(public_path().$product->images))//On verifie si le fichier existe
                    Storage::delete(asset($product->images));//On le supprime alors
                //Nous enregistrerons nos fichiers dans /uploads/images dans public
                $folder = '/uploads/images/';
                $image_name = Str::slug($request->input('name')).'_'.time();
                $product->images = $folder.$image_name.'.'.$image->getClientOriginalExtension();
                //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
                $this->uploadImage($image, $folder, 'public', $image_name);
            }
            $product->name  = $request->input('name');
            $product->price = $request->input('price');
            $product->description = $request->input('description');
            $product->category_id = $request->input('category_id');

            $product->save();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product)
            $product->delete();
        return redirect()->route('product.index');
    }
}
