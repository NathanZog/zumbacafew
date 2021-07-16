@extends('template/welcome')
@section('content')
<section class="page-section about-heading">
    <div class="container">
        @foreach($texts as $text)
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{$text->imgabout}}" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">{{$text->txtabout1}}</span>
                            <span class="section-heading-lower">{{$text->txtabout2}}</span>
                        </h2>
                        <p>{{$text->txtabout3}}</p>
                        <p class="mb-0">{{$text->txtabout4}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection