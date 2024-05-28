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

    {{-- !! TO BE FIXED !! --}}
        @if(session()->has('message'))
            <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
    {{-- !! TO BE FIXED !! --}}

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
                                <input type="submit" value="Delete" class="db-btn db-btn-1 BtnToConfirm">
                            </form>
                        </div> 
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <button class="db-btn db-btn-2">Load more</button>
        </div>
        {{-- modal --}}
        <div class="modal fade" id="indexModal" tabindex="-1" aria-labelledby="indexModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="indexModalLabel">ATTENTION: this action cannot be undone.</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Would you like to continue?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary">Yes</button>
                </div>
                </div>
            </div>
        </div>  
    </div>
</main>

@endsection
