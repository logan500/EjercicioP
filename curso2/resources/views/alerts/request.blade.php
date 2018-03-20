	@if(count($errors) > 0)
	<div class="alert alert-danger alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" arial-label="Close"><span arial-hidden="true">&times;</span></button>
	</div>
	<ul>
		@foreach($errors->all() as $error)
		<li>{!! $error !!}</li>
		@endforeach
	</ul>
	@endif