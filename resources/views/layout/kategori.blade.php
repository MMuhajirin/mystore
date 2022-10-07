@extends('layout.template')
@section('content')

<div class='container'>
<div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
        <h2 class="text-center">Kategori Produk</h2>

    </div>

    {{--Kategori Pertama--}}
    <div class="card" style="width: 18rem;">
        <img src="asset/slide1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

       {{--Kategori Kedua--}}
      <div class="card" style="width: 18rem;">
        <img src="asset/slide2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      {{--Kategori Ktiga--}}
      <div class="card" style="width: 18rem;">
        <img src="asset/slide3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
