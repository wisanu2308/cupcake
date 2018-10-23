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
?>



<table width="500" border="1" style="border-collapse: collapse;">

	<?php $row_index = 1;  ?>
	<?php foreach ($row as $value): ?>
		<tr>

			<?php $col_index = 1; ?>
			<?php foreach ($col as $$value): ?>

				<?php $index = $row_index.$col_index; ?>
				<input type="hidden" id="ref_index" name="ref_index" value="{{$index}}">
				<td id="data<?=$index?>" style="line-height: 30px;" align="center">{{$index}}</td>
				<?php $col_index++; ?>

			<?php endforeach ?>
		</tr>
		<?php $row_index++; ?>
	<?php endforeach ?>

</table>
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
			$('#data'+index).css("background-color", "blue");
		}
		if (select == 99) {
			$('#data'+index).css("background-color", "green");
		}
		if (select == 2) {
			$('#data'+index).css("background-color", "red");
		}
	}
	



</script>

@endsection