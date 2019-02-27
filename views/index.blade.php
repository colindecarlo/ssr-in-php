@extends('layout')

@section('title', 'Users')

@section('content')
    <div class="row">
        @each('partials.users', collect($users), 'user')
    </div>
@endsection