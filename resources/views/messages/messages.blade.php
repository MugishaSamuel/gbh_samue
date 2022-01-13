{{-- @if(count(errors)>0)
	@foreach($errors->all() as error)
		<div class="alert alert-danger">
			{{$error}}
		</div>
	@endforeach
@endif --}}

@if(session()->has('Success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  {{session()->get('Success')}}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
@endif

@if(session()->has('Error'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  {{session()->get('Error')}}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
@endif 