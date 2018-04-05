@include('layout.header')
<style>
	b{
		background-color: lightgrey;
		border-radius: 6px;
		padding: 5px;
	}
	h5,p{
		background-color: pink;
		color: white;
		padding: 5px;
		margin-top: 10px;
		font-family: all;
		font-size: 18px;
	}
</style>
<div class="container">
	<div class="row">
		<b>Title:</b><h5>{{ $article->title}}</h5>
		<b>Description:</b><p>{{ $article->description}}</p>
	</div>
	
</div>
@include('layout.footer')