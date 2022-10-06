@extends('layouts.app')

@section('content')
<div class="container py-4">

  <h1 class="text-center pb-3"> {{ ($genre->genre) }} </h1>

  <div class="row">

    <div class="col-9 border">
      <div class="row">

        @foreach ($genre->books as $book)
        <div class="col-6">
          <div class="row">
            <div class="col-6">
              <a href="/books/{{$book->id}}">
                <img src="{{ asset('images/book2.jpeg') }}" alt="" class="w-100">
              </a>
            </div>
            <div class="col-6">
              <h4 class="pt-2 fw-bold">{{$book['title']}}</h4>
              <p>
                {{ $book->author->first_name . ' ' . $book->author->last_name }} ( {{ $book['total_pages'] }} )
              </p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>

    <div class="col-3 border">
      filter
    </div>
  </div>

</div>
@endsection