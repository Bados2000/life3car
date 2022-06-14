
<form action="{{ route('order.update',$order->id) }}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalEdit{{$order->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Zarządzanie zamówieniem') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('status') }}:</strong>
                            {!! Form::text('status', $order->status, array('value' => '{{$status}}','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('data_start') }}:</strong>
                            {!! Form::text('data_start', $order->data_start, array('value' => '{{$data_start}}','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('data_koniec') }}:</strong>
                            {!! Form::text('data_koniec', $order->data_koniec, array('value' => '{{$data_koniect}}','class' => 'form-control')) !!}
                        </div>
                    </div>



                    <div class="row d-flex justify-content-center">
                        <button type="submit" class="btn btn-warning">{{ __('Zatwierdź') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
