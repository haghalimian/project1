@extends('layouts/app')

@section('nav-bar')
    <li class="nav-item">
        <a class="nav-link" href="/coins/add"> Add Coin</a>
    </li>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @foreach($coins as $coin)
                <div class="col-4" style="margin-top: 35px">
                    <div class="card " style="width: 18rem; margin-left: 10%; text-align: center">
                        <h1 style="margin-top: 8px"> {{ $coin -> name }} </h1>
                        <div class="card-body">
                            @foreach($coin -> price as $prices)
                                <h5 class="card-title"> Price: {{ $prices -> price }}</h5>
                            @endforeach
                            <p class="card-text"> Status: Available</p>
                            <a href = "/coins/{{ $coin->id }}/edit" class="btn btn-primary">Edit {{ $coin -> name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

