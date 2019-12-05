@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <p>
            <a href="{{route('product.create')}}">Ajouter un produit</a>
            <a href="/">Accueil</a>
        </p>
    </div>
    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Nom Produit</th>
            <th>Prix Produit</th>
            <th></th>
        </tr>
        @foreach($products as $product)
            <tr>
                <th>#</th>
                <th>{{$product->name}} - <img src="{{$product->images ? asset($product->images) : asset('uploads/images/default.png')}}" alt="{{$product->name}}" width="50"></th>
                <th>{{$product->price}} {{ $product->category->name ?? '' }}</th>
                <th>
                    <p><a href="{{route('editer_produit',['id'=>$product->id])}}" class="btn btn-primary">Editer</a></p>
                    <form action="product/{{$product->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                    </form>
                </th>
            </tr>
        @endforeach
    </table>
</div>
@endsection
