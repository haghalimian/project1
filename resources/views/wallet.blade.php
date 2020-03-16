@extends('layouts.app')

@section('content')
    <div class="jumbotron" style="margin-left: 15% ; margin-right: 15%">
        <h1 class="display-4">Your Wallet</h1>
        <p class="lead">name: {{ $name }}</p>
        <p class="lead">email: {{ $email }}</p>
        <hr class="my-4">
        <p> money: {{ $money }}</p>
        <a class="btn btn-primary btn-lg" href="/home" role="button">Back</a>
    </div>

@endsection
