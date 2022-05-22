<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name='id' value="{{$data['id']}}">
    <input  type="text" name='typ_uslugi' value="{{$data['typ_uslugi']}}"> <br><br>
    <input  type="text" name='nazwa_uslugi' value="{{$data['nazwa_uslugi']}}"> <br><br>
    <input  type="text" name='czas_realizacji' value="{{$data['czas_realizacji']}}"> <br><br>
    <input  type="text" name='cena_brutto' value="{{$data['cena_brutto']}}" > <br><br>
    <button  type="submit">AKTUALIZUJ</button>
</form>    