@extends('layouts.agentbase')

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
        	<div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Property Details</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                    </div>
                    <div class="table-data__tool-right">
                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="/add-property">
                            <i class="zmdi zmdi-plus"></i>add New</a>
                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                            <select class="js-select2" name="type">
                                <option selected="selected">Export</option>
                                <option value="">PDF</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                </div>
                @include('messages.messages')
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>name</th>
                                <!--th>email</th-->
                                <th>description</th>
                                <th>date</th>
                                <th>status</th>
                                <th>price</th>
                                <th>Approval Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($posts) > 0)
                            @foreach($posts as $post)
                            <tr class="tr-shadow">
                                <td>{{$post->property_name}}</td>
                                <td class="desc">{{Str::limit($post->property_description,50)}}</td>
                                <td>{{$post->updated_at}}</td>
                                <td>
                                    @if($post->status === "Booked")
                                    <span class="text-danger">{{$post->status}}</span>
                                    @else
                                    <span class="text-success">{{$post->status}}</span>
                                    @endif
                                </td>
                                <td>${{$post->price}}</td>
                                <td>
                                    @if($post->approval === "Pending")
                                    <span class="text-danger">{{$post->approval}}</span>
                                    @elseif($post->approval === "Rejected")
                                    <span class="text-danger">{{$post->approval}}</span>
                                    @else
                                    <span class="text-success">{{$post->approval}}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="table-data-feature">
                                        <!--button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                            <i class="zmdi zmdi-mail-send"></i>
                                        </button-->
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit"  href="posts/{{$post->id}}/edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </a>
                                        <a class="item" data-target="#delete{{$post->id}}" href="" data-toggle="modal" data-placement="top">
                                            <i class="zmdi zmdi-delete"></i>
                                        </a>
                                        <button data-target="#more{{$post->id}}" data-toggle="modal" data-placement="top" class="item" data-toggle="tooltip" data-placement="top" title="More">
                                <i class="zmdi zmdi-more"></i>
                            </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                            @else
                            <div class="text-center">
                                <p>No Records Found!</p>
                            </div>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
        </div>
    </div>
</div>

@foreach($posts as $post)
<div class="modal fade" id="delete{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header border-bottom-0">
    <h5 class="modal-title text-center" id="exampleModalLabel">Warning!</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <p class="text-center pt-2">Are You Sure</p>
    <p class="text-center pt-2 mb-4">All data deleted can not be recovered!</p>
    <div class="text-center"><i class="fa fa-warning mt-3 mb-3 text-center text-warning fa-2x"></i></div>
    <div class="row justify-content-center pt-3 pb-4">
        <div class="text-center">
            {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $post->id], 'method'=>'POST'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Continue',['class'=>'btn btn-sm btn-default'])}}
            {!! Form::close() !!} 
        </div>
    </div> 
  </div> 
</div>
</div>
</div>
@endforeach

@foreach($posts as $post)
<div class="modal fade" id="more{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100%;">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
  <div class="modal-header border-bottom-0">
    <h5 class="modal-title text-center" id="exampleModalLabel">{{$post->property_name}}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body mb-3">
    <img class="img-fluid img-responsive" src="/property/{{$post->image}}" alt="img" style="width: 100%;height: 300px;">
    <p class="mt-3 mb-2" style="color: black;font-size: 14px !important;font-weight: bold;">Property Description</p>
    <p style="font-size: 13px !important;">{{$post->property_description}}</p>
  </div> 
</div>
</div>
</div>
@endforeach
@endsection