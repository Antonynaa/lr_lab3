@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container">
<h4>Users</h4>
<a href="{{route('users.create')}}">Adauga</a>
    @forelse($users as $user)
    <div>
        <b>Name:</b>
        {{ $user->name }}<br>
        <b>Email:</b>
        {{ $user->email }}<br>
        </div>
    @empty
        <p>Nu sunt utilizatori</p>
    @endforelse   
    {{$users->links()}}
</div>
@endsection