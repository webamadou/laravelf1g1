@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <p>
            <a href="{{route('product.create')}}">Ajouter un produit</a>
            <a href="/">Accueil</a>
        </p>
    </div>
        <table class="table table-bordered data-table">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="100px">Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
<script>
    alert("cela se passe ici");
    $(function(){
        var table = $('.data-table').Datatable({
            processing: true,
            serverSide: true,
            ajax: "{{route('products.index')}}",
            columns: [
                {data: "DT_RpwIndex", name: "DT_RowIndex"},
                {data: 'name', name: "name"},
                {data: "price", name: "price"},
                {data:'action', name: "action", orderable: false, searchable: false}
            ]
        });
    })
</script>
@endsection
