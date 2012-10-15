@layout('layout')

@section('content')
<div class="uploadForm">
	{{ Bootstrapper\Form::horizontal_open()}}

	{{ Bootstrapper\Form::label('images[]', 'Screen')}}
	<input class="input-file" name="images[]" id="attachments" type="file" multiple>


	{{Form::submit('Dodaj')}}
	{{Form::close()}}
	<button class="addImage">Dodaj Obrazek</button>
</div>

<script type="text/javascript">
	$('.addImage').on('click', function(){
		//little dirty, would be nice to do it cleaner
		$('<label for="images[]">Screen</label><input class="input-file" name="images[]" id="attachments" type="file" multiple>').insertAfter($('.input-file').last());
		console.log("aa");
	});

</script>
@endsection