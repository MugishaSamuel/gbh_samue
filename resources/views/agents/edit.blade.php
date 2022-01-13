@extends('layouts.agentbase')

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        	<div class="row justify-content-center">
            <div class="col-md-10">
                {!! Form::open(['action'=>['App\Http\Controllers\PostsController@update', $post->id], 'method'=>'POST','enctype'=>"multipart/form-data"],array('files'=> true))!!}
                {{Form::hidden('_method','PUT')}}
                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('property_name','Property Name',['class'=>'mt-3'])}}
                            {{Form::text('property_name',$post->property_name,['class'=>'form-control','placeholder'=>'Property Name','required'])}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('price','Price (USD)',['class'=>'mt-3'])}}
                            {{Form::text('price',$post->price,['class'=>'form-control','placeholder'=>'Price','required'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('rooms','Rooms',['class'=>'mt-4'])}}
                            {{Form::select('rooms', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'),'S',['class'=>'form-control','required'])}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('room_capacity','Room Capacity(Persons)',['class'=>'mt-4'])}}
                            {{Form::select('room_capacity', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'),'S',['class'=>'form-control','required'])}}
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            {{Form::label('status','Check Availability',['class'=>'mt-3'])}}<br>
                            {{Form::select('status', array('Available' => 'Available', 'Booked' => 'Booked'), 'S',['class'=>'form-control','required'])}}
                        </div>
                    </div>
                    {{Form::label('property_description','Property Description',['class'=>'mt-4'])}}
                    {{Form::textarea('property_description',$post->property_description,['class'=>'form-control','placeholder'=>'Property Description','required'])}}
                    {{Form::submit('Edit Property Details',['class'=>'btn btn-primary mt-3 pull-right'])}}
                {!! Form::close() !!}
            </div>
        </div>
        </div>
    </div>
</div>
@endsection