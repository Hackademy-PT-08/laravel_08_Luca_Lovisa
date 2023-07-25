<x-layout>
    <x-navbar></x-navbar>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="display-1">Aggiungi i tuoi articoli</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <form  action="/articoli/aggiungi" method="post">
                  @csrf
                    <div class="col-12 card-body my-3">
                        <input type="text" name="title" placeholder="Titolo dell'articolo">
                    </div>
                    <div class="col-12 card-body my-3">
                        <textarea name="testo" cols="50" rows="10" placeholder="Immetti il tuo articolo"></textarea>
                    </div>
                    <div class="col-12 card-body">
                        <input class="" type="submit" value="Aggiungi">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>