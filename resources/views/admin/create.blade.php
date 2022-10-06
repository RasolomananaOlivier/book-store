@extends('layouts.app')

@section('content')
<div class="container">
  <div class="d-flex justify-content-center py-5">
    <form class="d-flex align-items-center flex-column" style="width: 40%;" method="POST" action="/admin"
      enctype="multipart/form-data">
      @csrf

      <h1 class="fw-bold text-center mb-3">Publish a new book</h1>
      <div class="vstack mb-3">
        <label for="title" class="form-label">Title</label>

        <div class="">
          <input id="title" type="text" class="form-control" name="title" required autocomplete autofocus>
        </div>
      </div>

      <div class="vstack mb-3">
        <label for="cover" class="form-label">Cover</label>
        <input id="cover" type="file" class="form-control" name="cover">
      </div>

      <div class="vstack mb-3">
        <label for="document" class="form-label">Ebook file ( pdf or epub )</label>
        <input id="document" type="file" class="form-control" name="document">
      </div>

      <div class="vstack mb-3">
        <label for="Pages" class="form-label">Pages</label>

        <div class="">
          <input id="Pages" type="number" class="form-control" name="total_pages" required autocomplete autofocus>
        </div>
      </div>


      <div class="vstack mb-3">
        <label for="published-date" class="form-label">Published date</label>

        <div class="">
          <input id="published-date" type="date" class="form-control" name="published_date" required autocomplete
            autofocus>
        </div>
      </div>

      <div class="vstack mb-3">
        <label for="publisher" class="form-label">Publisher</label>

        <select name="publisher" id="publisher" class="form-control">
          <option value="Google">Google</option>
          <option value="BBC">BBC</option>
        </select>
      </div>

      <select class="form-control js-example-basic-single" name="genres[]" multiple="">
        <option value="Thriller">Thriller</option>
        <option value="Romance">Romance</option>
        <option value="Comedy">Comedy</option>
        <option value="Business">Business</option>
        <option value="Children">Children</option>
        <option value="Fantasy">Fantasy</option>

        <option value="Fiction">Fiction</option>
        <option value="History">History</option>
        <option value="Litterature">Litterature</option>
        <option value="Mystery">Mystery</option>
        <option value="Religion">Religion</option>
        <option value="Science Fiction">Science Fiction</option>
        <option value="Travel">Travel</option>
        <option value="Suspense">Suspense</option>
      </select>
      <div class="w-100">
        <button type="submit" class="btn btn-primary">Save book</button>
      </div>
    </form>
  </div>

  <script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
    });
  </script>
</div>

@endsection