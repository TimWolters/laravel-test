<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
	<header id="top" class="navbar navbar-static-top bs-docs-nav" role="banner" />
		<div container="container">
			@yield('navbar')

			@if(Auth::check())
				<div class="navbar-header pull-right">
					<a class="navbar-brand" href='/logout'>Logout</a>
				</div>
			@else	
				<div class="navbar-header pull-right">
					<a class="navbar-brand" href='/login'>Login</a>
				</div>
				<div class="navbar-header pull-right">
					<a class="navbar-brand" href='/employees/create'>Register</a>
				</div>
			@endif

		</div>
	</header>
	<div class="container bs-docs-container">
		<div class="bs-docs-section">
			@yield('content')
		</div>
	</div>
</body>
</html>
