@extends('layouts.design')

@section('content')
    <div class="container">
        <div><p><a href="{{route('categories.index')}}">liste des catégorie</a></p></div>
        <div class="container">
            <form action="/categorie/traitement" method="post">
                @csrf
                <div>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="on_menu" class="form-check-label">Afficher la category sur le menu <input class="form-control" type="checkbox" id="on_menu" name="on_menu" value="1"></label>
                </div>
                <div class="mt-5">
                    <button class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>

    </div>
@endsection
