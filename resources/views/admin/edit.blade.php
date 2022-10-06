@extends('layouts.app')

@section('content')
<div class="container">
  
  <div class="d-flex justify-content-center py-5">
    <form class="d-flex align-items-center flex-column" style="width: 40%;" method="POST" action="/admin/{{$book->id}}">
      @csrf
      @method('put')

      <h1 class="fw-bold text-center mb-3">Update this book</h1>
      <div class="vstack mb-3">
        <label for="title" class="form-label">Title</label>

        <div class="">
          <input id="title" value="{{$book->title}}" type="text" class="form-control" name="title" required autocomplete autofocus>
        </div>
      </div>

      <div class="vstack mb-3">
        <label for="Pages" class="form-label">Pages</label>

        <div class="">
          <input id="Pages"  value="{{$book->total_pages}}"  type="number" class="form-control" name="total_pages" required autocomplete autofocus>
        </div>
      </div>


      <div class="vstack mb-3">
        <label for="published-date" class="form-label">Published date</label>

        <div class="">
          <input id="published-date"  value="{{$book->published_date}}"  type="date" class="form-control" name="published_date" required autocomplete autofocus>
        </div>
      </div>

      <div class="vstack mb-3">

        <label for="Publisher"  class="form-label">Publisher</label>

        <div class="">
          <input id="Publisher" value="{{ $book->publisher->name }}"" type="text" class="form-control" name="publisher" required autocomplete autofocus>
        </div>
      </div>

      <div class="w-100">
        <button type="submit" class="btn btn-primary">Save book</button>
      </div>
    </form>
  </div>
</div>
    
@endsection