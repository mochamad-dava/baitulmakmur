@extends('layouts.main')


    {{-- Article --}}
@section('container2')
<section id="article">
  <div class="container">
      <div class="row text-center mb-3 py-5">
          <div class="col">
              <h2>Article</h2>
          </div>
      </div>
      <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
              <img src="../img/baitulmakmur01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
              <img src="../img/baitulmakmur01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
              <img src="../img/baitulmakmur01.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
      </div>
      <div class="d-grid gap-2 col-2 mx-auto">
        <button class="btn btn-primary" type="button">Load More</button>
      </div>
  </div>
</section>
@endsection
{{-- Akhir Article --}}

