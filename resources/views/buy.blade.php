@extends('layouts.app')


@section("content")
    <a href = "/home" class="btn btn-primary" style="margin-bottom: 25px ; margin-right: 25% ; margin-left: 21%"> Back </a>

    <form method="post" action="/buy/{{ $coin->id }}" style="margin-right: 25% ; margin-left: 25%">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="hidden" name="id" value="{{ $coin -> id }}">
            <input name="quantity" title="quantity" type="number" class="form-control" style="margin-bottom: 25px">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
