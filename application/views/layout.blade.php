<!doctype html>
<html>
	<head>
		<title></title>
		{{ Asset::container('bootstrapper')->styles() }}
		{{ Asset::container('bootstrapper')->scripts() }}
		{{ HTML::style('css/reset.css') }}
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Rye')}}
		{{ HTML::script('js/jquery.nivo.slider.js') }}
		{{ HTML::style('css/nivo-slider.css') }}
		{{ HTML::style('css/nivo-default-theme.css') }}

	</head>
	<body>
		<header>
			@include('navbar')			
		</header>
		<div class="container">
			@yield('content') 
			
		</div>
			@include('footer')
		
		</div>
		{{ Asset::container('bootstrapper')->scripts() }}
	</body>
</html>