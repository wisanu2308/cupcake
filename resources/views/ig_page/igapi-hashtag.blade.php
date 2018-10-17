@extends("layout.layout")

@section("stlye")

@endsection


@section("htmlBody")

<div class="btn-group" role="group" aria-label="...">
  <a href="{{url('igapi')}}" type="button" class="btn btn-default">Instagram Feed</a>
  <a href="{{url('igapi/hashtag')}}" type="button" class="btn btn-default">Instagram Hashtag</a>
</div>
	


@endsection


@section("script")
<script type="text/javascript">
	
	$(document).ready(function(){

	});

</script>

@endsection