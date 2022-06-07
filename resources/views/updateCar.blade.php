@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dane samochodu') }}</div>

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
