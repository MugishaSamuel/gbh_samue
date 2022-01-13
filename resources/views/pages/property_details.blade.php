@extends('layouts.app')

@section('content')
<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">{{$post->property_name}}</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Apartment Rooms</a></li>
                <li class="active">{{$post->property_name}}</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->
<!--================ About History Area  =================-->
<section class="about_history_area section_gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-8">
                    <img class="img-fluid img-responsive" src="/property/{{$post->image}}" alt="img" style="width: 90%;height: 400px;">
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-12 mt-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-center" style="font-weight: bold;"><span style="color: grey;">Capacity</span><br>
                                    Max Person: {{$post->room_capacity}}</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-center" style="font-weight: bold;"><span style="color: grey;">Rooms</span><br>
                                    {{$post->rooms}}</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-center" style="font-weight: bold;"><span style="color: grey;">Services</span><br>
                                    Free WIFI, Laundry..</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="mt-4">
                               {{$post->property_description}}
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="boking_table">
                        <div class="row">
                            {!! Form::open(['action'=>'App\Http\Controllers\PagesController@checkout', 'method'=>'POST'])!!}
                                <p class="text-dark" style="color: black !important;font-weight: bold;">Date</p>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input name="arrival" id="arrival" type='text' class="form-control" placeholder="Arrival Date"/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input name="property_name" id="arrival" type='hidden' class="form-control" value="{{$post->property_name}}" />
                                <input name="price" id="arrival" type='hidden' class="form-control" value="{{$post->price}}" />
                                <input name="property_id" id="arrival" type='hidden' class="form-control" value="{{$post->id}}" />
                                <div class="col-md-6">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input name="departure" id="departure" type='text' class="form-control" placeholder="Departure Date"/>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-12">
                                    <p class="pt-2" style="color: black !important;font-weight: bold;">Guests</p>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide" name="guests" id="guests">
                                                <option data-display="Adult">Adult</option>
                                                <option value="1">Old</option>
                                                <option value="2">Younger</option>
                                                <option value="3">Potato</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="book_tabel_item">
                                        <div class="input-group">
                                            <select class="wide" name="rooms" id="rooms">
                                                <option data-display="Number of Rooms">Number of Rooms</option>
                                                <option value="1">Room 01</option>
                                                <option value="2">Room 02</option>
                                                <option value="3">Room 03</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                {{Form::submit('Make Reservation',['class'=>'btn btn-primary btn-block mt-4'])}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>
<!--================ About History Area  =================-->
@endsection



 