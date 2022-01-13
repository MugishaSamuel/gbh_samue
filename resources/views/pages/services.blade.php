@extends('layouts.app')

@section('content')
<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Services</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Services</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->
<!--================ Facilities Area  =================-->
<section class="section_gap">
<div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
</div>
<div class="container">
    <div class="section_title text-center" style="margin-bottom: 45px !important;">
        <h2 class="title_w" style="color: black;">Key Anemities</h2>
        <p>Better Service</p>
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