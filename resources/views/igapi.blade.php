@extends("layout.layout")

@section("stlye")

@endsection


@section("htmlBody")

<div class="btn-group" role="group" aria-label="...">
  <a href="{{url('igapi')}}" type="button" class="btn btn-default">Instagram Feed</a>
  <a href="{{url('igapi/hashtag')}}" type="button" class="btn btn-default">Instagram Hashtag</a>
</div>

<div class='sk-instagram-feed' data-embed-id='15211'></div>
<script src='https://www.sociablekit.com/app/embed/instagram-feed/widget.js'></script>

@endsection


@section("script")
<script type="text/javascript">
	
	$(document).ready(function(){

	});

	// function getFeed(){

	// 	$("#hashtag").hide();
	// 	$("#feed").show();
	// }

	// function getHashtag(){

	// 	$("#feed").hide();
	// 	$("#hashtag").show();

	// }

</script>

@endsection