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
			@include('navbar')			
		</header>
		<div class="container">
			<!-- To ma byc inne w zaleznosci od widoku!-->
			<!-- <div class="row">
				<div class="span9">##</div>
				<div class="span3">##</div>
			</div>
			<div class="row">
			2 kolumny ale z duza separacja
			O mnie  i Formularz kontaktowy
			--> -->
				
			</div>
			@include('footer')
		
		</div>
		{{ Asset::container('bootstrapper')->scripts() }}
	</body>
</html>