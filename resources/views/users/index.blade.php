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
        <th scope="col">Usuwanie</th>
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
            <td>
                <button class='btn btn-danger btn-sm delete' data-id={{$user->id}}>
                    Usuń
                </button>
            </td>
        </tr>
    @endforeach    
    </tbody>
    </table>
    {{$users->links()}}
</div>    
@endsection
@section('javascript')

    $(function () {
        $('.delete').click(function(){
            $.ajax({
            method: "DELETE",
            url: 'http://127.0.0.1:8000/users/' + $(this).data('id')
            })
            .done(function( response ) {
                alert( "SUKCES");
            }) 
            .fail(function( response ) {
                alert( "BŁĄD");
            });            
        });
    });
@endsection