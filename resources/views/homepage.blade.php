<x-layout>
<x-navbar></x-navbar>
    <div class="container my-5 div">
        <div class="row text-center">
            <div class="col-12 text-center">
                <h1 class="display-1">Ciao a Tutti!!!</h1>
            </div>

    <div class="container div">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 card my-3 div-card">
                <<img src="{{asset('storage/'.$article->image)}}" class="img-fluid rounded-top" alt="{{$article->title}}">
                <h3 class="card-title">{{$article->title}}</h3>
                <p class="card-body">{{$article->content}}</p>
            </div>
            @endforeach
        </div>
    </div>

</x-layout>