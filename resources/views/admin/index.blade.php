@extends('layouts.app')

@section('content')
<div class="container">
  <a href="/admin/create" class="btn btn-link ">Publish a new book ></a>

  <h1 class="fw-bold">My collection of books :</h1>
  <div class="row">
    @forelse ($books as $book)
    <div class="col-4">
      <div class="row">
        <div class="col-6">
          <a href="/admin/{{$book->id}}">
            <img src="{{ asset('images/book2.jpeg') }}" alt="" class="w-100">
          </a>
        </div>
        <div class="col-6">
          <h4 class="pt-2 fw-bold">{{$book['title']}}</h4>
          <p>
            {{ $book->author->first_name . ' ' . $book->author->last_name }} ( {{ $book['total_pages'] }} )
          </p>
          <div class="mb-3">
            <a href="/admin/{{$book->id}}/edit" class="btn btn-outline-primary">Edit</a>
          </div>
          <form action="/admin/{{$book->id}}" method="post">
            @csrf
            @method('delete')

            <button type="submit" class="btn btn-outline-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
    @empty
    No books yet
    @endforelse
  </div>

</div>
@endsection