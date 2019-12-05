@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                {{--<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>--}}

            </div>
        </div>

        <div class="container">
            <div class="col-12 row">
                @foreach($products as $product)
                    <div class="col-4"><h1>{{$product->name}}</h1></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
