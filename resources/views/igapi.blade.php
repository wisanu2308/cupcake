@extends("layout.layout")

@section("stlye")

@endsection


@section("htmlBody")

<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default" onclick="getFeed()">Instagram Feed</button>
  <button type="button" class="btn btn-default" onclick="getHashtag()">Instagram Hashtag</button>
</div>

<div id="feed">

	<div class='sk-instagram-feed' data-embed-id='15211'></div>
	<script src='https://www.sociablekit.com/app/embed/instagram-feed/widget.js'></script>

</div>

<div id="hashtag">
	
	<div class='sk-ww-instagram-hashtag-feed' data-embed-id='15136'></div>
	<script src='https://www.sociablekit.com/app/embed/instagram-hashtag-feed/widget.js'></script>

</div>

@endsection


@section("script")
<script type="text/javascript">
	
	$(document).ready(function(){
	    $("#hashtag").hide();
	});

	function getFeed(){

		$("#hashtag").hide();
		$("#feed").show();
	}

	function getHashtag(){

		$("#feed").hide();
		$("#hashtag").show();

	}



</script>

@endsection