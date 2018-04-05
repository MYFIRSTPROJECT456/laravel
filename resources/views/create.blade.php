@include('layout.header')
<div class="container">
	<div class="row">
		
		<div class="col-md-6">
			<form class="form-horizontal" action="{{ url('/insert') }}" method="post">
				{{csrf_field()}}

				@if(count($errors) > 0)
					@foreach($errors->all() as $error)
					<div class="alert alert-danger">
						{{ $error }}
					</div>
					@endforeach
				@endif
			  <div class="form-group">
			    <label for="formGroupExampleInput">Title</label>
			    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Title">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Description</label>
			    <textarea name="description" class="form-control" id="formGroupExampleInput2" placeholder="Description"></textarea>
			  </div>
			  <input type="submit" class="btn btn-success" value="Submit">
			  <a href="{{ url('/')}}" class="btn btn-success">Back</a>
			</form>
		</div>
		<div class="col-md-6"></div>
	</div>
</div>
@include('layout.footer')