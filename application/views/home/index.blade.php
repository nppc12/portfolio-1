@layout('layout')

@section('content')
<div class="row">
	<h3 class="nivo-header">Ostatnio wykonany projekt</h3>
	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="img/nivo/twitter.png" data-thumb="img/nivo/twitter.png" alt="" />
	                <a href="#"><img src="img/nivo/dp.png" data-thumb="img/nivo/dp.png" alt="" title="Strona dla wedkarzy" /></a>

	            </div>
	</div>
</div>

<?php
	echo $project[0]->id; 
?>
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