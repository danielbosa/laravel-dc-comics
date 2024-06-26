@extends('layouts.app')
@section('title', 'Add Comic')
@section('content')
<section class="container" id="create">
    <h1 class="pt-3">Add Comic</h1>

    {{-- per mostrare messaggi di errori --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('comics.store')}}" method="POST" class="pb-3">
        {{-- @csrf generates token for security reason --}}
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" name="title">
            {{-- <div id="titleHelp" class="form-text">Enter the title</div> --}}
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror"></textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"  name="thumb">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"  name="price">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"  name="series">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"  name="sale_date">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control @error('type') is-invalid @enderror" id="type"  name="type">
            <option value="comic book">Comic Book</option>
            <option value="graphic novel">Graphic novel</option>
            </select>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="db-btn">Add</button>
            <button type="reset" class="db-btn db-btn-back">Back</button>
        </div>
    </form>

</section>
@endsection