@extends('layouts.app')

@section('content')
    <div class="container">
        <div><p><a href="{{route('categories.create')}}">Ajouter une category</a></p></div>
        <table class="table table-striped">
            <tr>
                <th>#</th>
                <th>Nom Categorie</th>
                <th></th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <th>#</th>
                    <th>{{$category->name}}</th>
                    <th></th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
