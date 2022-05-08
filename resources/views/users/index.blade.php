@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Imie</th>
        <th scope="col">Naziwsko</th>
        <th scope="col">Email</th>
        <th scope="col">Nr_telefonu</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)    
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone_number}}</td>
        </tr>
    @endforeach    
    </tbody>
    </table>
</div>    
@endsection
