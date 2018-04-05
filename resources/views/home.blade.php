@include('layout.header')
<style>
.morelink {
    color: #0254EB
}
.morelink:visited {
    color: #0254EB
}
a.morelink {
    text-decoration:none;
    outline: none;
}
.morecontent span {
    display: none;
}
.comment {
    width: 400px;
    background-color: #f0f0f0;
    margin: 10px;
}
</style>
<div class="container">
	<div class="row">
		@if(session('info'))
		<div class="alert alert-success col-md-6">
				{{ session('info') }}
		</div>
		@endif
		<div class="col-md-12">
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>TITLE</th>
			        <th>DESCRIPTION</th>
			        <th colspan="3">Action</th>
			      </tr>
			    </thead>
			    <tbody>

			    	@if(count($article) > 0)
			    		@foreach($article->all() as $list)

			      <tr>
			        <td>{{ $list -> id }}</td>
			        <td>{{ $list -> title }}</td>
			        <td><div class="comment more">{{ $list -> description }}</div>
                    </td>
			        <td><a href='{{ url("/read/{$list -> id}")}}' class="btn btn-success">Read</a> |
						<a href='{{ url("/update/{$list -> id}")}}' class="btn btn-primary">Update</a> |
						<a href='{{ url("/delete/{$list -> id}")}}' class="btn btn-danger">Delete</a>
			        </td>
			      </tr>
			      		@endforeach
			    	@endif
			    </tbody>
		  	</table>
		</div>
		<div class="col-md-6">
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
    var showChar = 100;
    var ellipsestext = "...";
    var moretext = "more";
    var lesstext = "less";
    $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);

            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</script>
@include('layout.footer')