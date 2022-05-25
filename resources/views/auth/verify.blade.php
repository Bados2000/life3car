@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potwierdź swój adres email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link został wysłany.') }}
                        </div>
                    @endif

                    {{ __('Sprawdź poczte.') }}
                    {{ __('Jeśli nie otrzymałeś emaila') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('kliknij tutaj aby wysłać następny') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
