<!-- Modal -->
<div class="modal fade" id="ModalEditeror" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Typ usługi</label>
                        <input placeholder='Typ usługi'     name='typ_uslugi'  class="form-control  name='typ_uslugi' @error('name') is-invalid @enderror"  value="{{ old('typ_uslugi') }}" required autocomplete="typ_uslugi" autofocus >
                    </div>
                    <div class="form-group">
                        <label> Nazwa usługi</label>
                        <input placeholder='Nazwa usługi'     name='nazwa_uslugi'  class="form-control  name='nazwa_uslugi' @error('name') is-invalid @enderror"  value="{{ old('nazwa_uslugi') }}" required autocomplete="nazwa_uslugi" autofocus >
                    </div>
                    <div class="form-group">
                        <label> Cena usługi</label>
                        <input placeholder='Cena usługi'     name='cena_brutto'  class="form-control  name='cena_brutto' @error('name') is-invalid @enderror"  value="{{ old('cena_brutto') }}" required autocomplete="cena_brutto" autofocus >
                    </div>
                    <div class="form-group">
                        <label> Czas realizacji</label>
                        <input placeholder='Czas realizacji'     name='czas_realizacji'  class="form-control  name='czas_realizacji' @error('name') is-invalid @enderror"  value="{{ old('czas_realizacji') }}" required autocomplete="czas_realizacji" autofocus >
                    </div>


                    <button type="submit" class="btn btn-primary">Dodaj</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</div>
