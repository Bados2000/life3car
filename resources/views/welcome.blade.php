<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/styl.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

      
    </head>
    <body class="antialiased">
        <div class=" sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('profile') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Profil</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Rejestracja</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
        <!--top-->
        <div class="position-relative jumbotron jumbotron-fluid text-white text-center top ">
            <div class="position-relative align-items-start">
                <h1 class="top-header"> <span class="text-warning">Life 4 Car</span> </h1>
                <p><span style="float: left;margin-top:-120px;font-size: large">Wszystko czego potrzebuje twoje auto w jednym miejscu</p></span>
                
                <button class="btn btn-warning text-white top-button2"><a href="Windex.html">Podgląd usług</a></button>
                <button class="btn btn-warning text-white top-button"><a href="logout.php">Rozpocznij</a></button> 
            </div>
        </div>
		
		<!--wprowadzenie-->
        <section class="introduction">
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
        </section>
		
		
		
		<!--Realizacje-->
        <section class="portfolio">
        <div class="portfolio-header">
            <h2 class="text-center text-uppercase">Nasze najnowsze realizacje</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <img class="rounded img-fluid portfolio-img" src="images/tuning1.jpg" alt="projekt1">
                    <br>
                    <span class="text-uppercase page-label text-danger">Typ</span>
                    <h3 class="text-uppercase portfolio-subheader">Detailing</h3>
                    <p>Wykonano: Oklejenie samochodu folią termokurczliwą o zmiennym kolorze, przyciemnienie szyb...</p>
                    <button class="btn btn-danger portfolio-button">Czytaj wiecej</button>
                </div>
                <div class="col-md">
                    <img class="rounded img-fluid portfolio-img" src="images/tuning2.jpg" alt="projekt2">
                    <br>
                    <span class="text-uppercase page-label text-danger">Typ</span>
                    <h3 class="text-uppercase portfolio-subheader">Detailing + Chip-tuning</h3>
                    <p>Wykonako: Odnowienie orginalnego lakieru, odmalowanie elementow plastikowych, zwiększenie mocy oraz...</p>
                    <button class="btn btn-danger portfolio-button">Czytaj wiecej</button>
                </div>
            </div>
        </div>
    </section>
	
	 <!--kontakt-->
       <!---- <section class="write-to-us">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="write-to-us-left">
                        <span class="text-uppercase text-success page-label">Masz pytanie?</span>
                        <h2 class="text-uppercase write-to-us-header">Skontaktuj się z nami</h2>
                        <form action="">
                            <label for="name" class="form-control-label">Imię i Nazwisko</label>
                            <input type="text" id="name" class="form-control">
                            <label for="email" class="form-control-label">E-mail</label>
                            <input type="email" id="email" class="form-control">
                            <label for="msg-title" class="form-control-label">Tytuł wiadomości</label>
                            <input type="text" id="msg-title" class="form-control">
                            <label for="message" class="form-control-label">Wiadmość</label>
                           <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            <button class="btn btn-success">Wyślij wiadomość</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-8 d-flex">
                    <img class="align-self-end img-fluid" src="images/budowlaniec.jpg" alt="Budowlnaiec">
                </div>
            </div>
        </div>
    </section>
    -->
	<!--stopka-->
    <footer class="text-white site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-2 footer-first-col">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-phone text-warning" aria-hidden="true"></i>888-223-111
                        </li>
            
                        <li>
                            <i class="fa fa-clock-o text-warning" aria-hidden="true"></i>Pn.-Pt. 8:00-16:00
                        </li>
                    
                        <li>
                            <i class="fa fa-envelope text-warning" aria-hidden="true"></i>life4car@wp.pl
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 footer-second-col">
                    <ul class="list-unstyled">
                        <li><span class="text-warning"></span>Lokalizacja</li>
                        <li><span class="text-warning"></span>Opinie</li>

                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <img src="images/mapa.jpg" alt="Mapa" class="img-fluid">
                </div>
            </div>
        </div>
    </footer>
    <!--prawa autorskie-->
    <section class="text-center text-white bg-warning copyright">
        <div class="container">
            &copy; Copyrights 2022 LIFE4CAR Wszelkie prawa zastrzeżone
            <span class="mt-2 d-block copyright-designed">Designed by Łysy i przyjaciele</span>
        </div>
    </section>
    </body>
</html>
