@extends('layouts.app')

@section('content')
    <div class="container">
        <div><p><a href="{{route('categories.index')}}">liste des catégorie</a></p></div>
        <div class="container">
            <form action="/categorie/traitement" method="post">
                @csrf
                <div>
                    <input type="text" name="name" class="form-control">
                </div>
                <div>
                    <button class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>

    </div>
@endsection
