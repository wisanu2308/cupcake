@extends("layout.layout")

@section("stlye")

@endsection


@section("htmlBody")

<?php 
	$row = ["","","","","",""];
	$col = [
		"","","","","",
		"","","","","",
	];

	$col_index = 1; 
	$index = 1;
?>

<?php foreach ($col as $key => $value): ?>
	<table id="tableCol{{$col_index}}" border="1" style="display: inline-block;border-collapse: collapse;">
		<?php foreach ($row as $key => $value): ?>
			<tr>
				<td id="data{{$index}}" align="center" width="40" style="line-height: 30px;">
					&nbsp;<!-- {{$index}} -->
				</td>
			</tr>
			<?php $index++; ?>
		<?php endforeach ?>
	</table>
<?php endforeach ?>

<input type="hidden" id="ref_index" name="ref_index" value="1">


<br>
<br>

<button onclick="select(1)">blue</button>
<button onclick="select(99)">green</button>
<button onclick="select(2)">red</button>

@endsection


@section("script")
<script type="text/javascript">
	
	$(document).ready(function(){

	});

	function select(select){
		index = $('#ref_index').val();
		if (select == 1) {
			$('#data'+index).css("background-color", "#0000FF");
		}
		if (select == 99) {
			$('#data'+index).css("background-color", "#00FF00");
		}
		if (select == 2) {
			$('#data'+index).css("background-color", "#FF0000");
		}

		index++;
		$('#ref_index').val(index);
	}



</script>

@endsection