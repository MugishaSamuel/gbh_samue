@extends('layouts.base')

@section('content')
<div class="container-fluid">
<div class="row" style="margin-left: 10px !important;">
<div class="col-md-12">
    <!-- DATA TABLE -->
    <h3 class="title-5 pt-4 pl-3 pr-3 pb-4">Manage User Accounts</h3>
    @include('messages.messages')
    <div class="table-responsive table-responsive-data2">
        <table class="table table-data2">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <!--th>email</th-->
                    <th>Email Address</th>
                    <th>date</th>
                    <th>Role</th>
                    <th>Assign Role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(count($users) > 0)
                @foreach($users as $user)
                <tr class="tr-shadow">
                    <td>{{$user->name}}</td>
                    <td class="desc">{{$user->email}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                        @if($user->user_type === "0")
                        <span class="text-warning">Client</span>
                        @elseif($user->user_type === "1")
                         <span class="status--process">Agent</span>
                        @else
                        <span class="text-danger">Administrator</span>
                        @endif
                    </td>
                    <td>
                        @if($user->user_type !== "2")
                        <a data-target="#change{{$user->id}}" href="" data-toggle="modal" data-placement="top">Change Role</a>
                        @endif
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <!--button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                <i class="zmdi zmdi-mail-send"></i>
                            </button-->
                            <a class="item" data-toggle="tooltip" data-placement="top" title="Edit"  href="posts/{{$user->id}}/edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            @if($user->user_type !== "2")
                            <a class="item" data-target="#delete{{$user->id}}" href="" data-toggle="modal" data-placement="top">
                                <i class="zmdi zmdi-delete"></i>
                            </a>
                            @endif
                            <!--button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                <i class="zmdi zmdi-more"></i>
                            </button-->
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


@foreach($users as $user)
<div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header border-bottom-0">
    <h5 class="modal-title text-center" id="exampleModalLabel">Warning!</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <p class="text-center pt-2">Delete User Account</p>
    <p class="text-center pt-2 mb-4">Clear All User Data Records!</p>
    <div class="text-center"><i class="fa fa-warning mt-3 mb-3 text-center text-warning fa-2x"></i></div>
    <div class="row justify-content-center pt-3 pb-4">
        <div class="text-center">
            {!! Form::open(['action'=>['App\Http\Controllers\PostsController@destroy', $user->id], 'method'=>'POST'])!!}
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

@foreach($users as $user)
<div class="modal fade" id="change{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header border-bottom-0">
    <h5 class="modal-title text-center" id="exampleModalLabel">Switch User Role</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row justify-content-center pb-4 pl-3 pr-5">
        <div class="col-md-12">
            {!! Form::open(['action'=>['App\Http\Controllers\AccountsController@update_role', $user->id], 'method'=>'POST'])!!}
            {{Form::hidden('_method','PUT')}}
                {{Form::label('user_type','Change User Role',['class'=>'mt-2'])}}
                {{Form::select('user_type', array('0' => 'Client', '1' => 'Agent',),'S',['class'=>'form-control','required'])}}
                {{Form::submit('Confirm Action',['class'=>'btn btn-sm btn-default mt-4'])}}
            {!! Form::close() !!}  
        </div>
    </div> 
  </div> 
</div>
</div>
</div>
@endforeach
@endsection