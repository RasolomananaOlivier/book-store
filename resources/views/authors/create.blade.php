@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-center py-5">
    <form class="d-flex align-items-center flex-column" style="width: 40%;" method="POST" action="/authors">
      @csrf

      <h1 class="fw-bold text-center mb-3">Your Author identity</h1>
      <div class="vstack mb-3">
        <label for="first_name" class="form-label">First Name</label>

        <div class="">
          <input id="first_name" type="text" class="form-control" name="first_name" required autocomplete autofocus>
        </div>
      </div>

      <div class="vstack mb-3">
        <label for="middle_name" class="form-label">Middle Name</label>

        <div class="">
          <input id="middle_name" type="text" class="form-control" name="middle_name" autocomplete autofocus>
        </div>
      </div>

      <div class="vstack mb-3">
        <label for="last_name" class="form-label">Last Name</label>

        <div class="">
          <input id="last_name" type="text" class="form-control" name="last_name" required autocomplete autofocus>
        </div>
      </div>


      <div class="w-100">
        <button type="submit" class="btn btn-primary">Become an Author</button>
      </div>
    </form>
  </div>

</div>

@endsection