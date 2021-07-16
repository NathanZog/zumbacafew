@extends('template/welcome')
@section('content')
@foreach($txthome as $txt)
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{$txt->imghome1}}" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">{{$txt->txthome1}}</span>
                    <span class="section-heading-lower">{{$txt->txthome2}}</span>
                </h2>
                <p class="mb-3">{{$txt->txthome3}}
                </p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="#">{{$txt->txthome4}}</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">{{$txt->txthome5}}</span>
                        <span class="section-heading-lower">{{$txt->txthome6}}</span>
                    </h2>
                    <p class="mb-0">{{$txt->txthome7}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection