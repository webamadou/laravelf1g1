@extends('layouts.design')

@section('content')
    <div class="container">
        <div><h1>Edition d'une catégorie</h1></div>
        <div class="container">
            <form action="/categories/{{$category->id}}" method="post">
                @csrf
                @method('patch')
                <div>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                </div>
                <div class="mt-2">
                    <label for="on_menu" class="form-label">
                        Ajouter la category au menu <input type="checkbox" name="on_menu" value="1" {{$category->on_menu?'checked="checked"':''}}>
                    </label>
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>

    </div>
@endsection
