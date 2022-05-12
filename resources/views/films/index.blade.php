@extends("layouts.main")

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row text-center d-flex justify-content-center align-items-center p-5">
                @foreach ($films as $film)
                    <div class="col-5 d-flex justify-content-center align-items-center m-0">
                        <div class="card m-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><h4 class="text-danger">Titolo:</h4>{{$film->title}}</h5>
                                <p class="card-text"><h4 class="text-danger">Titolo originale:</h4>{{$film->original_title}}</p>
                                <p class="card-text"><h4 class="text-danger">Nazionalità:</h4>{{$film->nationality}}</p>
                                <p class="card-text"><h4 class="text-danger">Data di pubblicazione:</h4>{{$film->date}}</p>
                                <p class="card-text"><h4 class="text-danger">Voto:</h4>{{$film->vote}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    
@endsection