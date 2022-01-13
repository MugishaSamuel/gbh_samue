@extends('layouts.app')

@section('content')
<!--================Banner Area =================-->
<section class="banner_area">
    <div class="booking_table d_flex align-items-center">
    	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center">
				<h6>WELCOME</h6>
				<h2>Get an apartment, home or suite<br>for your vacation</h2>
				<p>If you are looking at blank cassettes on the web, you may be very confused at the<br> difference in price. You may see some for as low as $.17 each.</p>
				<a href="/apartments-and-rooms" class="btn theme_btn button_hover text-white">Get Started</a>
			</div>
		</div>
    </div>
    <div class="hotel_booking_area position">
        <div class="container">
            <div class="hotel_booking_table">
                <div class="col-md-3">
                    <h2>Book Your<br> Apartment</h2>
                </div>
                <div class="col-md-9">
                    <div class="boking_table">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input type='text' class="form-control" placeholder="Check In"/>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" placeholder="Check Out"/>
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Adult">Adult</option>
                                            <option value="1">Old</option>
                                            <option value="2">Younger</option>
                                            <option value="3">Potato</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Child">Child</option>
                                            <option value="1">Child</option>
                                            <option value="2">Baby</option>
                                            <option value="3">Child</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="book_tabel_item">
                                    <div class="input-group">
                                        <select class="wide">
                                            <option data-display="Number of Rooms">Number of Rooms</option>
                                            <option value="1">Room 01</option>
                                            <option value="2">Room 02</option>
                                            <option value="3">Room 03</option>
                                        </select>
                                    </div>
                                    <a class="book_now_btn button_hover text-dark" href="#" style="text-decoration: none !important;color: white !important;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Banner Area =================-->
<!--================ Accomodation Area  =================-->
<section class="accomodation_area section_gap">
<div class="container">
    <div class="section_title text-center" style="margin-bottom: 35px !important;">
        <h2 class="title_color">Apartments, Villas & Suites</h2>
        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
    </div>
    <div class="row mb_30">
        @if(count($posts)>0)
        @foreach($posts as $post)
        <div class="col-lg-3 col-sm-6">
            <div class="accomodation_item text-center">
                <div class="hotel_img">
                    <img src="/property/{{$post->image}}" alt="" style="height: 230px !important;width: 400px !important;">
                </div>
                <a href="posts/{{$post->id}}" style="text-decoration: none !important;">
                    <h4 class="sec_h4">{{$post->property_name}}</h4>
                </a>
                <h5>$ {{$post->price}}<small>/night</small></h5>
            </div>
        </div>
        @endforeach
        @else
        @endif
    </div>
</div>
</section>
<!--================ Accomodation Area  =================-->

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
            <div class="facilities_item" style="padding: 31px 0px 37px !important;">
                <h4 class="sec_h4 text-center" style="color: black !important;"><img src="/client/image/anemities/satellite-dish.png" style="height: 40px;"></h4>
                <p class="text-center" style="color: black !important;">DSTV Access</p>
            </div>
        </div>
    </div>
</div>
</section>
<!--================ Facilities Area  =================-->
@endsection