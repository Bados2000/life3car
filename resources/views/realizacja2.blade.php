@extends('layouts.app')

@section('content')
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/styl.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"><br/>
            <h2 class="text-center text-uppercase introduction-header text-danger">TYP:   <span style="color: black">Detailing + Chip-tuning</h2>
            <div class="container">
                <div class="row">
                    <div class="portfolio">
                        <div class="portfolio-header">
                            <h2 class="text-center text-uppercase"><b> Fiat Seicento</b></h2>
                        </div>
                        <span style="font-size: x-large"><b>Wykonano:</b> </span><br/>  
                        <span style="font-size: large"> Odnowienie orginalnego lakieru, odmalowanie elementow plastikowych, zwiększenie mocy silnika oraz zostało wymienionych kilka elementów takich jak felgi,<br/> 
                        czy zderzak przedni. Ponadto przeprowadziliśmy renowację lefrektorów i lamp wraz z ich przyciemnieniem. Z tyłu samochodu został zamontowany spoiler, a na dachu - relingi.<br/> 
                        Jeżeli interesują cię usługi oferowane przez nasz warsztat, zapraszamy do zapoznania się z nimi poprzez kliknięcie w przycisk "Podgląd usług" znajdującego się na stronie głównej
                        i złożenia zlecenia. <b>Gwarantujemy, że zajmiemy się doskonale twoim maleństwem, ponieważ satysfakcja i zadowolenie klienta to nasz priorytet!</b></span> <br/><br/>
                        
                        <div class="portfolio-header">
                            <h3 class="text-center text-uppercase">GALERIA</h3>
                        </div>

                        <p style="text-align: center">
                        <a data-gallery href="images/sej6.jpg"><img src="images/sej6-miniaturka.jpg" border="0" width="450" height="250"></a>
                        <a data-gallery href="images/sej1.jpg"><img src="images/sej1-miniaturka.jpg" border="0" width="450" height="250"></a>
                        <a data-gallery href="images/sej2.jpg"><img src="images/sej2-miniaturka.jpg" border="0" width="230" height="254"></a>
                        <a data-gallery href="images/sej3.jpg"><img src="images/sej3-miniaturka.jpg" border="0" width="230" height="254"></a>
                        <a data-gallery href="images/sej4.jpg"><img src="images/sej4-miniaturka.jpg" border="0" width="450" height="250"></a>
                        <a data-gallery href="images/sej5.jpg"><img src="images/sej5-miniaturka.jpg" border="0" width="450" height="250"></a>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
    
<!-- Scripts -->
<script src="{{ asset('js/gallery.js') }}" async></script>
                    
            
@include('layouts.prawa')
@endsection







