@extends('layouts.app')

@section('content')
<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Vacation Rooms</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Vacation Rooms & Apartments</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->
<section class="accomodation_area section_gap">
<div class="container">
    <div class="section_title text-center">
        <h2 class="title_color">Hotel Accomodation</h2>
        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
    </div>
    <div class="row mb_30">
        @if(count($posts)>0)
        @foreach($posts as $post)
        <div class="col-lg-3 col-sm-6">
            <div class="accomodation_item text-center">
                <div class="hotel_img">
                    <img src="/property/{{$post->image}}" alt="" style="height: 250px !important;width: 400px !important;">
                </div>
                <a href="posts/{{$post->id}}" style="text-decoration: none !important;">
                    <h4 class="sec_h4">{{$post->property_name}}</h4>
                </a>
                <h5>$ {{$post->price}}<small>/night</small></h5>
            </div>
        </div>
        @endforeach
        <div class="text-center">{{$posts->links()}}</div>
        @else
        @endif
    </div>
</div>
</section>
@endsection