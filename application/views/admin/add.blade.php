@layout('layout')

@section('content')
<!-- MOCK, need to add rest of fields and some CSS (maybe thanks to bootstrapper) -->
@if ($errors->has('projectName'))
	{{ $errors->first('projectName') }}
@endif
<div class="uploadForm">
	<!-- Potrzebujemy tez nazwe projektu, dane o projekcie itd -->
	<div class="row">
		<div class="span9">
			{{ Form::horizontal_open()}}

			{{ Form::label('images[]', 'Screen')}}
			<input class="input-file" name="images[]" id="attachments" type="file" multiple>

			{{ Form::label('projectName', 'Nazwa projektu')}}
			{{ Form::text('projectName') }}
			{{ Form::label('projectDesc', 'Opis projektu')}}
			{{ Form::textarea('projectDesc', '', array('rows'=>'5'))}}
			{{Form::submit('Dodaj')}}
			{{Form::close()}}
		</div>
		<div class="span3">
			{{ Buttons::inverse_normal('Dodaj kolejny screen', array('class' => 'addImage'))}}
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.addImage').on('click', function(){
		//little dirty, would be nice to do it cleaner
		$('<label for="images[]">Screen</label><input class="input-file" name="images[]" id="attachments" type="file" multiple>').insertAfter($('.input-file').last());
		console.log("aa");
	});

</script>
@endsection