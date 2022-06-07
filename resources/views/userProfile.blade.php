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
<script>
function asde()
{
var asd = document.getElementById("userCar").value;
console.log(asd);
if(asd == "secondoption")
{
    openModal();
}
}

 function openModal() {
     document.getElementById("exampleModal").style.display = "block";
     document.getElementById("exampleModal").className += "show";
 }
function closeModal() {
        document.getElementById("exampleModal").style.display = "none";
        document.getElementById("exampleModal").className += document.getElementById("exampleModal").className.replace("show", "");
    }
</script>
<div class="row justify-content-md-center col-md-12">
<div class="col-md-10 text-center"> <h1>Profil użytkownika</h1> </div>
<form method="POST" action="{{ route('updateProfile') }}"class="col-md-10 ">
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
        <select id="userCar" name="userCar" class="form-control" onchange="asde()">
          @foreach ($cars as $car)
          <option
          value="{{$car->id_cars}}"
          @isset($userDataProfile->car_id)
          @if ($car->id_cars === $userDataProfile->car_id ) selected style="background-color: #73e0e59e" @endif
          @endisset
          >{{$car->marka}} {{$car->model}} {{$car->generacja}}</option>
          @endforeach
     <option
             value="secondoption">Dodaj swój samochód!</option>
            
        </select>

      </div>
  </div>
   
<div class="text-center"><button type="submit" class="btn btn-primary",button style="background-color:dodgerblue; border-color:dodgerblue; color:white">Zatwierdź</button><div>
</form>
</div>


<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Uzupełnij dane</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="card-body">
                    <form method="POST" action="{{ route('updateCar') }}">
                    

                        <div class="row mb-3">
                            <label for="marka" class="col-md-4 col-form-label text-md-right">{{ __('Marka') }}</label>

                            <div class="col-md-6">
                                <input id="marka" type="text" class="form-control @error('marka') is-invalid @enderror" name="marka" value="{{ old('marka') }}" required autocomplete="marka" autofocus>

                                @error('marka')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{ old('model') }}" required autocomplete="model" autofocus>

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-3">
                            <label for="generacja" class="col-md-4 col-form-label text-md-right">{{ __('Generacja') }}</label>

                            <div class="col-md-6">
                                <input id="generacja" type="generacja" class="form-control @error('generacja') is-invalid @enderror" name="generacja" value="{{ old('generacja') }}" required autocomplete="generacja">

                                @error('generacja')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Zapisz') }}
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
      

@endsection
