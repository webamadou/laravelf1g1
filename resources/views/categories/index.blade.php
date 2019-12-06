@extends('layouts.design')

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
                    <th>
                        {{$category->name}}
                        {!! $category->badgeOnMenu()!!}
                    </th>
                    <th>
                        <div class="row justify-content-end">
                        <div class="col"><a href="/categories/{{$category->id}}/edit" class="btn btn-primary">Editer</a></div>
                        <form class="col" action="/categories/{{$category->id}}" method="post">
                            @csrf @method('delete')
                            <button type="submit" class="btn btn-danger">Suppimer</button>
                        </form>
                        </div>
                    </th>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
