@layout('layout')

@section('content')

@if ($errors->has('projectName'))
	<div class="error notif">
	@if ($errors->has('projectDesc'))
	{{ $errors->first('projectDesc') }}
	@endif
	{{ $errors->first('projectName') }}
	</div>
@endif


@if (isset($message))
	<div class="message notif">{{ $message }}</div>
@endif

<div class="row">
	<div class="uploadForm">
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
	});

	//maybe separate it.. maybe not
	if ($('.notif').length > 0)
	{
		$('.notif').fadeOut(5000);
	}
</script>
@endsection