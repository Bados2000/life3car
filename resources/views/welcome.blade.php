@extends('layouts.app')

@section('content')
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/styl.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <div class="position-relative jumbotron jumbotron-fluid text-white text-center top ">
            <div class="position-relative align-items-start">
                <h1 class="top-header"> <span class="text-warning">Life 4 Car</span> </h1>
                <p><span style="float: left;margin-top:-120px;font-size: large">Wszystko czego potrzebuje twoje auto w jednym miejscu</p></span>
                <button class="btn btn-warning text-white top-button"><a href="{{ url('/services/list') }}">Podgląd usług</a></button>

            </div>
        </div>


        <div class="introduction">
            <h2 class="text-center text-uppercase introduction-header">OFERUJEMY</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="introduction-item text-center">
                            <img src="images/ikona1.png" alt="ikona1">
                            <h3 class="introduction-item-header">Mechanika pojazdów</h3>
                            <p>Naprawa usterek mechanicznych każdego rodzaju w autach każdej marki </p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="introduction-item text-center">
                            <img src="images/ikona2.png" alt="ikona2">
                            <h3 class="introduction-item-header">Serwis elektroniki w pojazdach</h3>
                            <p>Naprawa elektroniki,czujników,komputerów oraz modułów komfortu</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="introduction-item text-center">
                            <img src="images/ikona3.png" alt="ikona3">
                            <h3 class="introduction-item-header">Poprawki blacharskie oraz lakierowanie</h3>
                            <p>Przywracamy pojazdom ich dawny kształt oraz dajemy im świeższy wygląd</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="introduction-item text-center">
                            <img src="images/ikona4.png" alt="ikona4">
                            <h3 class="introduction-item-header">Detailing</h3>
                            <p>Personalizujemy wygląd samochodów, oklejemy,przyciemniamy,oświetlamy i zadymiamy ! Twój pomysł + nasze wykonani = niesamoity efekt</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="introduction-item text-center">
                            <img src="images/ikona5.png" alt="ikona5">
                            <h3 class="introduction-item-header">Tuning-mechaniczny</h3>
                            <p>Chip-tuning, procedura startu, popcorn, doświetlanie drogi i wiele innych </p>
                        </div>
                    </div>
                </div>
            </div>
</div>

        <!--Realizacje-->
    <div class="portfolio">
        <div class="portfolio-header">
            <h2 class="text-center text-uppercase">Nasze najnowsze realizacje</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <img class="rounded img-fluid portfolio-img" src="images/lexus1-miniaturka.jpg" alt="projekt1">
                    <br>
                    <span class="text-uppercase page-label text-danger">Typ</span>
                    <h3 class="text-uppercase portfolio-subheader">Detailing</h3>
                    <p>Wykonano: Oklejenie samochodu folią termokurczliwą PPF o zmiennym kolorze, zostały przyciemnione szyby...</p>
                    <button class="btn btn-danger portfolio-button"><a href="{{ url('/realizacja1') }}">Czytaj wiecej</a></button>
                </div>
                <div class="col-md">
                    <img class="rounded img-fluid portfolio-img" src="images/sej6-miniaturka.jpg" alt="projekt2">
                    <br>
                    <span class="text-uppercase page-label text-danger">Typ</span>
                    <h3 class="text-uppercase portfolio-subheader">Detailing + Chip-tuning</h3>
                    <p>Wykonako: Odnowienie orginalnego lakieru, odmalowanie elementow plastikowych, zwiększenie mocy silnika...</p>
                    <button class="btn btn-danger portfolio-button"><a href="{{ url('/realizacja2') }}">Czytaj wiecej</a></button>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.prawa')
@endsection







