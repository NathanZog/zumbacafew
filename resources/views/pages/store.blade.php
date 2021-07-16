@extends('template/welcome')
@section('content')
@foreach($storeitem as $item)
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">{{$item->txtstore1}}</span>
                        <span class="section-heading-lower">{{$item->txtstore2}}</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                        {{$item->txtstore3}}
                            <span class="ml-auto">{{$item->txtstore4}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                        {{$item->txtstore5}}
                            <span class="ml-auto">{{$item->txtstore6}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                        {{$item->txtstore7}}
                            <span class="ml-auto">{{$item->txtstore6}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                        {{$item->txtstore8}}
                            <span class="ml-auto">{{$item->txtstore6}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                        {{$item->txtstore9}}
                            <span class="ml-auto">{{$item->txtstore6}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                        {{$item->txtstore10}}
                            <span class="ml-auto">{{$item->txtstore6}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                        {{$item->txtstore11}}
                            <span class="ml-auto">{{$item->txtstore12}}</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>{{$item->txtstore13}}</strong>
                            <br>
                            {{$item->txtstore14}}
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>{{$item->txtstore15}}</em>
                        </small>
                        <br>
                        {{$item->txtstore16}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{$item->imgstore1}}" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">{{$item->txtstore17}}</span>
                            <span class="section-heading-lower">{{$item->txtstore18}}</span>
                        </h2>
                        <p>{{$item->txtstore19}}</p>
                        <p class="mb-0">{{$item->txtstore20}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection