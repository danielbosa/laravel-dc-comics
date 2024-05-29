@extends('layouts.app')
@section('title', $comic->title)
@section('content')
<section class="container bg-white pt-4" id="show">
    <h1 class="text-center">{{$comic->title}}</h1>
    <div class="row pb-3">
        <div class="col-12 col-md-4">
            <img src="{{$comic->thumb}}" class="img-fluid" alt="{{$comic->title}}">
        </div>
        <div class="col-12 col-md-8">
            <p>{!!$comic->description!!}</p>
            <div>
                Series: {{$comic->series}}
            </div>
            <div>
                Type: {{$comic->type}}
            </div>
            <div>
                Price: {{$comic->price}}
            </div>
            <div class="py-3 d-flex gap-2">
                <a href="{{route('comics.edit', $comic->id)}}" class="db-btn db-btn-1">Edit</a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="db-btn db-btn-1">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="BtnToConfirm">
                </form>
            </div>
        </div>
    </div>
</section>
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
@endsection