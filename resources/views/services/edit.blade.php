
<form action="{{ route('services.update',$uslugixd->id) }}" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalEditer{{$uslugixd->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Edycja usług') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('typ_uslugi') }}:</strong>
                            {!! Form::text('typ_uslugi', $uslugixd->typ_uslugi, array('value' => '{{$typ_uslugi}}','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('nazwa_uslugi') }}:</strong>
                            {!! Form::text('nazwa_uslugi', $uslugixd->nazwa_uslugi, array('value' => '{{nazwa_uslugi}}','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('czas_realizacji') }}:</strong>
                            {!! Form::text('czas_realizacji', $uslugixd->czas_realizacji, array('value' => '{{czas_realizacji}}','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>{{ __('cena_brutto') }}:</strong>
                            {!! Form::text('cena_brutto', $uslugixd->cena_brutto, array('value' => '{{cena_brutto}}','class' => 'form-control')) !!}
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
