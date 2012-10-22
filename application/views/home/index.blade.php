@layout('layout')

@section('content')
<div class="row">
	<h3 class="nivo-header">Ostatnio wykonany projekt</h3>
	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	            	@foreach ($screens as $s)
	            	
	                	<a href=""><img src="screenS/{{ $s->name }}" data-thumb="screenS/toSlider/{{ $s->name }}" alt="" title="{{ $project->name }}" /></a>
	                @endforeach
	            </div>
	</div>
</div>

{{ HTML::script('js/jquery.nivo.slider.js') }}
<script type="text/javascript">
	(function(){
		$('#slider').nivoSlider({
			 pauseTime: 3000
		});
		console.log('work');
	})();

</script>

@endsection