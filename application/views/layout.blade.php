<!doctype html>
<html>
	<head>
		<title></title>
		{{ Asset::container('bootstrapper')->styles() }}
		{{ HTML::style('css/reset.css') }}
		{{ HTML::style('css/style.css') }}
	</head>
	<body>
		<header>
			
		</header>
		<div class="container">
			

			@include('footer')
		
		</div>
		{{ Asset::container('bootstrapper')->scripts() }}
	</body>
</html>