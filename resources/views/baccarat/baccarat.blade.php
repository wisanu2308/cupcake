@extends("layout.layout")

@section("style")
	
	<style type="text/css">
		
		.btn {
			border-radius: 0px;
		}

	</style>
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
<center>

<div id="check_status" style="display: block;">
	ครั้งที่ : <input type="text" id="ref_index" name="ref_index" style="width: 30px;text-align: center;" value="1">
</div>

<br>

<div style="background-color: #D0D0D0;padding: 1em;">

<?php foreach ($col as $key => $value): ?>
	
	<table align="center" id="tableCol{{$col_index}}" border="1" style="display: inline-block;border-collapse: collapse;border: 0px solid #00000030">
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

</div>


<br>
<br>


	
<button class="btn btn-info" onclick="select(1)">BLUE</button>
<button class="btn btn-success" onclick="select(99)">GREEN</button>
<button class="btn btn-danger" onclick="select(2)">RED</button>

</center>
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