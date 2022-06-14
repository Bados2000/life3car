<form action="/editerek" method="POST">
    @csrf
    <input type="hidden" name='id' value="{{$data['id']}}">
    <input  type="text" name='status' value="{{$data['status']}}"> <br><br>
    <input  type="text" name='data_start' value="{{$data['data_start']}}"> <br><br>
    <input  type="text" name='data_koniec' value="{{$data['data_koniec']}}"> <br><br>
    <button  type="submit">AKTUALIZUJ</button>
</form>
