@extends('layouts.app')

@section('content')
<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">About Us</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">About Us</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->
<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d_flex align-items-center">
                <div class="about_content ">
                    <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                    {{-- <a href="#" class="button_hover theme_btn_two">Request Custom Price</a> --}}
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="image/about_bg.jpg" alt="img">
            </div>
        </div>
    </div>
</section>
<!--================ About History Area  =================-->
<!--================ Facilities Area  =================-->
<section class="section_gap" style="padding-top: 0px !important;">
<div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
</div>
<div class="container">
    <div class="section_title text-center" style="margin-bottom: 45px !important;">
        <h2 class="title_w" style="color: black;">Key Anemities</h2>
        <p>Who are in extremely love with eco friendly system.</p>
    </div>
    <div class="row mb_30">
        <div class="col-lg-2 col-md-2">
            <div class="facilities_item">
                <h4 class="sec_h4 text-center"><img src="/client/image/anemities/wifi-router.png" style="height: 40px;"></h4>
                <p class="text-center" style="color: black !important;">Free WIFI</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2">
            <div class="facilities_item">
                <h4 class="sec_h4 text-center" style="color: black !important;"><img src="/client/image/anemities/secure-shield.png" style="height: 40px;"></h4>
                <p class="text-center" style="color: black !important;">24/7 Security.</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2">
            <div class="facilities_item">
                <h4 class="sec_h4 text-center" style="color: black !important;"><img src="/client/image/anemities/air-conditioning.png" style="height: 40px;"></h4>
                <p class="text-center" style="color: black !important;">A/C</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2">
            <div class="facilities_item">
                <h4 class="sec_h4 text-center" style="color: black !important;"><img src="/client/image/anemities/kitchen.png" style="height: 40px;"></h4>
                <p class="text-center" style="color: black !important;">Equipped Kitchen</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2">
            <div class="facilities_item">
                <h4 class="sec_h4 text-center" style="color: black !important;"><img src="/client/image/anemities/house.png" style="height: 40px;"></h4>
                <p class="text-center" style="color: black !important;">House Keeping</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-2">
            <div class="facilities_item">
                <h4 class="sec_h4 text-center" style="color: black !important;"><img src="/client/image/anemities/satellite-dish.png" style="height: 40px;"></h4>
                <p class="text-center" style="color: black !important;">DSTV Access</p>
            </div>
        </div>
    </div>
</div>
</section>
<!--================ Facilities Area  =================-->
@endsection