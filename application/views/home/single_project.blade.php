@layout('layout')
@section('content')
<div class="row projectName">
	<h1>{{ $project->name }}</h1>
</div>
<div class="row">
	<div class="span12">
		@foreach ($screens as $s)
			<img class="projectImg" src="{{URL::base()}}/screenS/{{ $s->name }}" alt="" />
		@endforeach
	</div>
</div>
<div class="row">
	<div class="span12">
		<p class="projectDesc">{{ $project->description }}</p>
	</div>
</div>
<!-- Dodać lightboxa jakiegoś i taki efekt przy najezdzaniu jak przy linkach do facebooka, githuba itd -->
@endsection