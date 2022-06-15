@extends('layout')

@section('content')
    <form action="{{route('orders.store')}}" method="POST" id="order-form">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Nazwa usługi</th>
            <th style="width:10%">Cena</th>
            <th style="width:8%">Ilość</th>
            <th style="width:22%" class="text-center">Łączny koszt</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        @php
            $total = 0;
            $totalquantity=0;
        @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php
                    $total += $details['cena_brutto'] * $details['quantity'];
                    $totalquantity += $details['quantity'];
                @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">

                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['nazwa_uslugi'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['cena_brutto'] }} PLN</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['cena_brutto'] * $details['quantity'] }} PLN</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <input type='hidden' placeholder='xD' style="border: solid green 2px; border-radius: 5px;"    name='price'  value='{{ $total }}' size="10px" >
        <input type='hidden' placeholder='xD2.0' style="border: solid green 2px; border-radius: 5px;"    name='quantity'  value='{{ $totalquantity }}' size="10px" >
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total {{ $total }} PLN</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/services/list') }}" class="btn btn-info"><i class="fa fa-angle-left"></i> Kontynuj wybieranie usług</a>
                @if(session()->exists('cart') and count(session('cart')) > 0 )
                <a class="btn btn-info" href="{{route('getPDF')}}">Pobierz w wersji PDF</a>
                <button type='submit' class="btn  btn-info">Checkout</button>
                @endif
            </td>
        </tr>
        </tfoot>
    </table>
    </form>
@endsection

@section('scripts')
    <script type="text/javascript">

        $(".update-cart").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Czy na pewno chcesz usunąć usługe z koszyka ?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
@endsection
