@extends('layouts.app')
@section('title', 'Add Comic')
@section('content')
<section class="container" id="create">
    <h1>Add Comic</h1>

    <form action="{{route('comics.store')}}" method="POST" class="pb-3">
        {{-- @csrf generates token for security reason --}}
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title" required>
            <div id="titleHelp" class="form-text">Enter the title</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" id="thumb"  name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price"  name="price" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series"  name="series" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" class="form-control" id="sale_date"  name="sale_date" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control" id="type"  name="type" required>
            <option value="comic book">Comic Book</option>
            <option value="graphic novel">Graphic novel</option>
            </select>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="reset" class="btn btn-danger">Back</button>
        </div>
    </form>

</section>
@endsection