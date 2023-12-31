@extends('template/main')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/sepatu1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/sepatu2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img/sepatu3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection

@section('content2')
<div class="row row-cols-2 row-cols-md-4 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="img/p1.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Air Jordan 1 Retro High OG 'Chicago' 2015</h5>
        <p class="card-text">$3,513</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="img/p2.jpeg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Men's Nike Air Jordan 1 Retro High OG "Royal Toe"</h5>
        <p class="card-text">$382.50</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="img/p3.jpeg" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Jordan 1 Mid Arctic Orange (GS)</h5>
        <p class="card-text">$224</p>
      </div>
    </a>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <a href="/toko/detail" class="btn">
      <img src="img/p4.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Air Jordan 1 Mid Wolf Grey Aluminum (W)</h5>
        <p class="card-text">$31.59</p>
      </div>
    </a>
    </div>
  </div>
</div>
@endsection