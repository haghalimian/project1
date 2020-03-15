@extends('layouts/app')

@section('content')
    <a href = "/home" class="btn btn-primary" style="margin-bottom: 25px ; margin-right: 25% ; margin-left: 21%"> Back </a>

    <form action="/edit/{{ $coin -> id }}" method="POST" style="margin-right: 25% ; margin-left: 25%">
        {{ csrf_field() }}
        {{ method_field("PATCH") }}
        <div class="form-group">
            <input name="name" title="name" type="text" class="form-control" style="margin-bottom: 25px" value="{{ $coin->name }}">
            <input name="price" title="price" type="number" class="form-control" style="margin-bottom: 25px" @foreach($coin->price as $price) value="{{ $price -> price }}" @endforeach>
            @cannot('member' , $coin)
                <button style="margin-left: 10px" type="submit" class="btn btn-primary">Submit Changes</button>
            @endcannot
        </div>



    </form>


    <form action="/coins/{{ $coin -> id }}/delete" method="post">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <div class="form-group" style="margin-left: 25%">
            @can('manager' , $coin)
                <button style="margin-left: 10px" type="submit" class="btn btn-primary">Delete Coin</button>
            @endcan
        </div>
    </form>

@endsection
