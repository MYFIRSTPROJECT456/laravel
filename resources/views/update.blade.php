@include('layout.header')
<div class="container">
	<div class="row">
		
		<div class="col-md-6">
			<form class="form-horizontal" action='{{ url("/edit/{$article->id}") }}' method="post">
				{{csrf_field()}}

				@if(count($errors) > 0)
					@foreach($errors->all() as $error)
					<div class="alert alert-danger">
						{{ $error }}
					</div>
					@endforeach
				@endif
			  <div class="form-group">
			    <label for="Title">Title</label>
			    <input type="text" name="title" class="form-control" id="formGroupExampleInput" value="<?php echo $article->title ?>">
			  </div>
			  <div class="form-group">
			    <label for="Description">Description</label>
			    <textarea name="description" class="form-control" id="formGroupExampleInput2"><?php echo $article->description ?></textarea>
			  </div>
			  <input type="submit" class="btn btn-success" value="Submit">
			  <a href="{{ url('/')}}" class="btn btn-success">Back</a>
			</form>
		</div>
		<div class="col-md-6"></div>
	</div>
</div>
@include('layout.footer')