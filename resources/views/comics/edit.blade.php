@extends('layouts.app')
@section('title', 'Update Comic')
@section('content')
<section class="container" id="edit">
    <h1 class="pt-3">Add Comic</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST" class="pb-3">
        {{-- @csrf generates token for security reason --}}
        @csrf;

        {{-- Specify method = PUT --}}
        @method('PUT');

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" value="{{$comic->title}}" required>
            {{-- <div id="titleHelp" class="form-text">Enter the title</div> --}}
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control">
            {{$comic->description}}
        </textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" id="thumb"  name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price"  name="price" value="{{$comic->price}}" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series"  name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" class="form-control" id="sale_date"  name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control" id="type"  name="type" value="{{$comic->type}}" required>
            <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>Comic Book</option>
            <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>Graphic novel</option>
            </select>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="db-btn">Add</button>
            <button type="reset" class="db-btn db-btn-back">Back</button>
        </div>
    </form>

</section>
@endsection