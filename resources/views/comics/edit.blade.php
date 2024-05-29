@extends('layouts.app')
@section('title', 'Update Comic')
@section('content')
<section class="container" id="edit">
    <h1 class="pt-3">Add Comic</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST" class="pb-3">
        {{-- @csrf generates token for security reason --}}
        @csrf

        {{-- Specify method = PUT --}}
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label @error('title') is-invalid @enderror">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" name="title" value="{{old('thumb',$comic->title)}}" required>
            {{-- <div id="titleHelp" class="form-text">Enter the title</div> --}}
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">
                {{old('description', $comic->description)}}
            </textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"  name="thumb" value="{{old('thumb', $comic->thumb)}}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"  name="price" value="{{old('price',$comic->price)}}" required>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"  name="series" value="{{old('series',$comic->series)}}">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"  name="sale_date" value="{{old('sale_date',$comic->sale_date)}}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control" id="type"  name="type" value="{{$comic->type}}" required>
            <option value="comic book" {{$comic->type == 'comic book' ? 'selected' : ''}}>Comic Book</option>
            <option value="graphic novel" {{$comic->type == 'graphic novel' ? 'selected' : ''}}>Graphic novel</option>
            </select>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="db-btn">Save</button>
            {{-- <button type="reset" class="db-btn db-btn-back">Leave</button> --}}
            <button type="reset" class="db-btn db-btn-back">
                <a href="{{route('comics.show', $comic->id)}}">Leave</a>
            </button>
        </div>
    </form>

</section>
@endsection