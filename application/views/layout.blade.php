<!doctype html>
<html>
	<head>
		<title></title>
		{{ Asset::container('bootstrapper')->styles() }}
		{{ Asset::container('bootstrapper')->scripts() }}
		{{ HTML::style('css/reset.css') }}
		{{ HTML::style('css/style.css') }}
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