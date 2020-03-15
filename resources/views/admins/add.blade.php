@extends('layouts/app')

@section('content')

    <a href = "/home" class="btn btn-primary" style="margin-bottom: 25px ; margin-right: 25% ; margin-left: 21%"> Back </a>

    <form action="/coins/create" method="POST" style="margin-right: 25% ; margin-left: 25%">
        {{ csrf_field() }}

        <div class="form-group">
            <input name="name" title="name" type="text" class="form-control" style="margin-bottom: 25px"  placeholder="Coin Name" >
            <input name="price" title="price" type="number" class="form-control" style="margin-bottom: 25px" placeholder="Coin Price">
            @can('manager' , $coin)
                <button style="margin-left: 10px" type="submit" class="btn btn-primary">Add Coin</button>
            @endcan
        </div>

    </form>

@endsection
