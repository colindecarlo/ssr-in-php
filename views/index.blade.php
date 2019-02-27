@extends('layout')

@section('title', 'Users')

@section('content')
    <div class="row">
        @foreach($users as $user)
            <div class="col-sm-6">
                @include('cards.user')
            </div>
        @endforeach
    </div>
@endsection