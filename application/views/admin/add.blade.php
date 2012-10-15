@layout('layout')

@section('content')
<div class="uploadForm">
	{{ Form::horizontal_open()}}

	{{ Form::label('images[]', 'Screen')}}
	<input class="input-file" name="images[]" id="attachments" type="file" multiple>


	{{Form::submit('Dodaj')}}
	{{Form::close()}}
	{{ Buttons::inverse_normal('Dodaj Obrazek', array('class' => 'addImage'))}}
	<!-- <button class="addImage inverse_normal">Dodaj Obrazek</button> -->
</div>

<script type="text/javascript">
	$('.addImage').on('click', function(){
		//little dirty, would be nice to do it cleaner
		$('<label for="images[]">Screen</label><input class="input-file" name="images[]" id="attachments" type="file" multiple>').insertAfter($('.input-file').last());
		console.log("aa");
	});

</script>
@endsection