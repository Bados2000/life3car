@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row justify-content-md-center col-md-12">
<div class="col-md-10 text-center"> <h1>Profil użytkownika</h1> </div>
<form method="POST" action="{{ route('updateProfile') }}" class="col-md-10 ">
    @csrf
  
  <div class="form-group row">
    <label for="userName" class="col-sm-2 col-form-label">Imię: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="userName" name="userName" placeholder="wprowadź imię" value="{{$userData->name}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="userSurname" class="col-sm-2 col-form-label">Nazwisko: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="userSurname" name="userSurname" placeholder="wprowadź nazwisko" value="{{$userData->surname}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="userPhone" class="col-sm-2 col-form-label">Numer telefonu:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="userPhone" name="userPhone" placeholder="wprowadź numer telefonu" value="{{$userData->phone_number}}">
    </div>
  </div>

  <div class="form-group row">
    <label for="userTown" class="col-sm-2 col-form-label">Miejscowość</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="userTown" name="userTown" placeholder="wprowadź miejscowość np. Bydgoszcz" value="{{ $userDataProfile->town ?? '' }}">
    </div>
  </div>

  <div class="form-group row">
    <label for="userStreet" class="col-sm-2 col-form-label">Ulica</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="userStreet" name="userStreet" placeholder="wprowadź ulicę np. Mleczna" value="{{ $userDataProfile->street ?? '' }}">
    </div>
  </div>

  <div class="form-group row">
    <label for="userHouseNumber" class="col-sm-2 col-form-label">Numer domu/mieszkania</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="userHouseNumber" name="userHouseNumber" placeholder="wprowadź numer domu/mieszkania" value="{{ $userDataProfile->houseNumber ?? '' }}">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="userZip" class="col-sm-2 col-form-label">Kod pocztowy</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="userZip" name="userZip" placeholder="wprowadź kod pocztowy" value="{{ $userDataProfile->zipcode ?? '' }}">
    </div>
  </div>

  <div class="form-group row">
      <label for="userCar" class="col-sm-2 col-form-label">Wybierz samochód:</label>
      <div class="col-sm-10">
        <select id="userCar" name="userCar" class="form-control">
          @foreach ($cars as $car)
          <option
          value="{{$car->id_cars}}"
          @isset($userDataProfile->car_id)
          @if ($car->id_cars === $userDataProfile->car_id ) selected style="background-color: #73e0e59e" @endif
          @endisset
          >{{$car->marka}} {{$car->model}} {{$car->generacja}}</option>
          @endforeach
        </select>
      </div>
  </div>
  <div class="col-md-10 text-center"><button type="submit" class="btn btn-primary">Zatwierdź</button><div>
</form>
</div>
@endsection
