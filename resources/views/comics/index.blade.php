@extends('layouts.app')
{{-- vuol dire che estendo il layout app e ci metto dentro info che voglio al posto dei placeholder;
    in questo caso ho due placeholder: 1. Title; 2. Content.
    Il layout app si presenta già con header, jumbotron e footer; nel main ha spazio, tramite placeholder "content" di ospitare contenuti diversi; ma il layout è sempre quello!
--}}

@section('title', 'Comics')

@section('content')
<main class="">
    <div class="db-container pb-4">
        <span class="db-btn db-btn-1">Current series</span>
        <div class="container py-4">
            <div class="row g-3">
                @foreach ( $comics as $comic)
                    <div class="col-4 col-md-3 col-lg-2 h-100">
                        <div class="card">
                            <div class="db-card-img-container">
                                <img class="db-card-img" src="{{$comic->thumb}}" alt="">
                                <a href="{{route('comics.show', $comic->id)}}" class="db-btn db-btn-1">Show</a>
                            </div>
                            <div class="db-card-title text-uppercase">{{$comic->title}}</div>
                            {{-- <a href="{{route('comics.show', $comic->id)}}" class="db-btn db-btn-1">Show</a> --}}
                            <a href="{{route('comics.edit', $comic->id)}}" class="db-btn db-btn-1">Edit</a>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="db-btn db-btn-1">
                            </form>
                        </div> 
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <button class="db-btn db-btn-2">Load more</button>
        </div>    
    </div>
</main>

@endsection
