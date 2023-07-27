<x-layout>
    <x-navbar></x-navbar>


    @if ($errors->any())


        @foreach ($errors->all() as $error)
        
        <div class="p-3 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3">
            {{$error}}
        </div>

        @endforeach
        
    @endif






    <div class="container my-5 div">
        <div class="row">
            <div class="col-12">
                <h2 class="display-1">Aggiungi i tuoi articoli</h2>
            </div>
        </div>
    </div>

    <div class="container div">
        <div class="row text-center">
            <div class="col-12 card">
                <form  action="/articoli/aggiungi" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="col-12 card-body my-3">
                        <label class="col-12" for="title">Il titolo dell'articolo *</label>
                        <input class="div-card" type="text" name="title" id="title"  value="{{old('title')}}" placeholder="Titolo dell'articolo">
                    </div>
                    <div class="col-12 card-body my-3">
                        <label class="col-12" for="testo">Il contenuto dell'articolo *</label>
                        <textarea class="div-card" name="testo" id="testo"  value="{{old('testo')}}" cols="50" rows="10" placeholder="Immetti il tuo articolo"></textarea>
                    </div>
                    <div class="col-12 card-body">
                        <input type="file" name="immagine" id="immagine">
                    </div>
                    <div class="col-12 card-body">
                        <input class="" type="submit" value="Aggiungi">
                    </div>
                    <small class="text-primary-emphasis">i campi contrassegnati con * sono obbligatori</small>
                </form>
            </div>
        </div>
    </div>
</x-layout>