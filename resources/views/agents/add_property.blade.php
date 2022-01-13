@extends('layouts.agentbase')

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        	<div class="row justify-content-center">
            <div class="col-md-10">
                {!! Form::open(['action'=>'App\Http\Controllers\PostsController@store', 'method'=>'POST','enctype'=>"multipart/form-data"],array('files'=> true))!!}
                    <div class="row">
                        <div class="col-md-6">
                            {{Form::label('property_name','Property Name',['class'=>'mt-3'])}}
                            {{Form::text('property_name','',['class'=>'form-control','placeholder'=>'Property Name','required'])}}
                        </div>
                        <div class="col-md-6">
                            {{Form::label('price','Price (USD)',['class'=>'mt-3'])}}
                            {{Form::text('price','',['class'=>'form-control','placeholder'=>'Price','required'])}}
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
                        <div class="col-md-12">
                            {{Form::label('image','Select Image',['class'=>'mt-3'])}}<br>
                            {!! Form::file('image') !!}
                        </div>
                    </div>
                    {{Form::label('property_description','Property Description',['class'=>'mt-4'])}}
                    {{Form::textarea('property_description','',['class'=>'form-control','placeholder'=>'Property Description','required'])}}
                    {{Form::submit('Upload Property',['class'=>'btn btn-primary mt-3 pull-right'])}}
                {!! Form::close() !!}
            </div>
        </div>
        </div>
    </div>
</div>
@endsection