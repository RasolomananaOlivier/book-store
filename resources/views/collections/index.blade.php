@extends('layouts.app')

@section('content')
<div class="container">
  <div class="text-center pt-5 pb-2">
    <h1 class="fw-bold">Explore our collection</h1>
    <h5>There's something for everybody</h5>
  </div>
  <hr>

  <div class="px-5">
    <div class="d-flex flex-wrap justify-content-center mb-5 px-5">
      @foreach ($genres as $genre)
      <a href="/collections/{{$genre->id}}" class="p-1 m-2 btn btn-outline-primary"> {{$genre->genre}} </a>
      @endforeach
    </div>
  </div>


  @foreach ($genres as $genre)
  @if ($loop->index < 3) <div class="mb-5">
    <div class="text-center px-5">
      <h1 class="fs-1 fw-bold"> {{ $genre->genre }} </h1>
      <p class="px-5 mx-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Culpa labore iste, animi enim.
      </p>
      <a href="/collections/{{$genre->id}}" class="btn-link">See all</a>
    </div>
    <hr>

    <div class="row">
      @foreach ($genre->books as $book)
      <div class="col-3">
        <a href="/books/{{$book->id}}">
          <img src="{{ asset('images/book2.jpeg') }}" alt="" class="w-100">
        </a>
        <h6 class="pt-2 fw-bold">{{$book['title']}}</h6>
        <p>
          {{ $book->author->first_name . ' ' . $book->author->last_name }} ( {{$book['total_pages']}} )
        </p>
      </div>
      @endforeach
    </div>
</div>
@endif

@endforeach


</div>
@endsection