@extends('layouts.app')

@section('content')
<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">Check Out</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Check Out</a></li>
                <li class="active">Check Out</li>
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
                        <h4 class="pb-4">Billing Details</h4>
                        <form role="form" method="post" action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="fName">First Name</label>
                                <input type="text" class="form-control" id="fName" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lName">Last Name</label>
                                <input type="text" class="form-control" id="lName">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <label for="emailId">Email (Optional)</label>
                                <input type="email" class="form-control" id="emailId">
                            </div>
                            <div class="col-md-6">
                                <label for="mobileNo" >Mobile No.</label>  
                                <input type="email" class="form-control" id="emailId">
                            </div>
                        </div>  
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label for="emailId" style="font-weight: bolder;">Additional Information</label><br>
                                <small>Booking notes (optional)</small>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div> 
                        <button type="submit" id="submit" class="btn btn-primary text-white mt-4" style="border-radius: 20px !important;">Complete Booking Request</button>
                      </form>
                    </div>
                    <div class="col-md-4">
                        <h4 class="pb-4">Your Booking Details</h4>
                        <table class="table table-boardered">
                            <thead>
                                <tr>
                                    <th>Details</th>
                                    <th>Breakdown</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$property_name}}</td>
                                    <td>$ {{$price}}</td>
                                </tr>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>$ {{$price}}</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>$ {{$price}}</td>
                                </tr>
                                <tr>
                                    <td class="text-danger">Deposit(50%)</td>
                                    <td>$ {{$deposit}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>
<!--================ About History Area  =================-->
@endsection

 