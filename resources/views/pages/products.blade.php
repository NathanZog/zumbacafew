@extends('template/welcome')
@section('content')
@foreach($txtproducts as $txtprod)
<section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">{{$txtprod->txtprod1}}</span>
              <span class="section-heading-lower">{{$txtprod->txtprod2}}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$txtprod->imgprod1}}" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{$txtprod->txtprod3}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">{{$txtprod->txtprod4}}</span>
              <span class="section-heading-lower">{{$txtprod->txtprod5}}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$txtprod->imgprod2}}" alt="">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{$txtprod->txtprod6}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">{{$txtprod->txtprod7}}</span>
              <span class="section-heading-lower">{{$txtprod->txtprod8}}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{$txtprod->imgprod3}}" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">{{$txtprod->txtprod9}}.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  @endsection