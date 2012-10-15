@layout('layout')

@section('content')
{{ Form::open_vertical()}}
<input class="input-file" name="images[]" id="attachments" type="file" multiple>

{{Form::submit('Dodaj')}}
{{Form::close()}}



@endsection