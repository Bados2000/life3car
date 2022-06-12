<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- <link href="{{ asset('css/pdf.css') }}" rel="stylesheet"> -->
    <style>

body{
    font-family: 'Roboto',"DejaVu Sans", sans-serif;
}




.infoTable, .servicesTable, .userCar{
    width: 100%;
    border-collapse: collapse; 
}
.infoTable tr td{
    font-size: 14px;
    max-width: 50%;
    width: 50%;
    vertical-align: top;
    border: 1px solid black;
    padding: 10px;
}

.infoTable th.title{
    width: 100%;
    font-size: 25px;
    text-align: center;
    padding-top: 10px;
    padding-bottom: 25px;
}

.infoTableData{
    display: inline-block;
    width: 100%;
}

.servicesTable{
    margin-top: 40px;
}

.servicesTable .servicesTableTitle{
    width: 100%;
    font-size: 24px;
    text-align: center;
    padding: 10px 0;
}

.servicesTable td {
    text-align: center;
    padding: 5px 0;
}

.servicesTable .servicesHeader th{
    border: 1px solid black;
    padding: 5px 0;
}

.servicesTable .servicesList td{
    border-left: 1px solid black;
    border-right: 1px solid black;
}

.servicesTable .totalRow{
    border: 1px solid black;
}

.servicesTable .totalRow th[colspan="5"]{
    text-align: right;
    padding: 5px 5px 5px 0px;
    font-size: 18px;
}

.userCar{
    margin-top: 30px;
}


.userCar .userCarTitle{
    font-size: 24px;
    text-align: center;
    width: 100%;
    padding: 10px 0; 
    border-top: 1px solid black;
    border-bottom: 1px dotted black;
}

.userCar .userCarInfo{
    text-align: center;
    width: 100%;
    font-size: 20px;
    padding: 10px 0; 
    border-bottom: 1px solid black;
}

.servicesList .nameWidth{
    width: 50%;
}
.servicesList .priceWidth{
    width: 15%;
}

.servicesList.servicesBackground {
    background: #ddd;
}

    </style>
	<title>{{$fileName}}</title>
</head>
<body>
	
    

	<table class="infoTable"> 
        <tr>
            <th colspan="2" class="title">Wycena usług - {{$downloadDate}}</th>
        </tr>
		<tr> 
			<td>
                 <span class="infoTableData">Zleceniodawca: {{$userName}} {{$userSurname}}</span> 
                 <span class="infoTableData">Miasto: {{$userCarInformation->town}} {{$userCarInformation->zipcode}}</span>
                 <span class="infoTableData">Adres: {{$userCarInformation->street}} {{$userCarInformation->houseNumber}} </span>
                 <span class="infoTableData">Telefon: {{$userPhone}}</span>
            </td>
			<td> 
                <span class="infoTableData">Wykonawca: Life4Car</span>
                <span class="infoTableData">Miasto: Ochotnica Wielka 00-054</span>
                <span class="infoTableData">Adres: Wielkie Marki 234</span>
                <span class="infoTableData">Telefon: 123456789</span>
            </td> 
		</tr> 
	</table> 

    <table class="userCar">
        <tr> <th class="userCarTitle"> Pojazd użytkownika </th> </tr>
        <tr>
            <td class="userCarInfo"> {{$userCarInformation->marka}} {{$userCarInformation->model}} {{$userCarInformation->generacja}}</td>
        </tr>
    </table>

    <table class="servicesTable">
        <tr>
            <th class="servicesTableTitle" colspan="5">Usługi do wykonania</th>
        </tr>
        <tr class="servicesHeader">
            <th>Nr</th><th>Nazwa</th><th>Cena</th><th>Ilosc</th><th>Koszt</th>
        </tr>
		
		@foreach($servicesInCart as $service)
            @php
                $koszt = $service['cena_brutto'] * $service['quantity'];
                $total = $total + $koszt;
            @endphp
        @if($loop->even)
        <tr class="servicesList servicesBackground">
        @else
        <tr class="servicesList">
        @endif
            <td>{{$loop->iteration}}</td>
            <td class="nameWidth">{{$service['nazwa_uslugi']}}</td>
            <td class="priceWidth">{{$service['cena_brutto']}} zł</td>
            <td>{{$service['quantity']}}</td>
            <td class="priceWidth">{{$koszt}} zł</td>
        </tr>
            @php
                $koszt = 0
            @endphp
		@endforeach
        <tr class="totalRow">
            <th colspan="5">Do zapłaty: {{$total}} zł</th>
        </tr>
        
    </table>

</body>
</html>