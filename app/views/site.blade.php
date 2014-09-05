<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<header id="top" class="navbar navbar-static-top bs-docs-nav" role="banner" />
		<div container="container">
			@yield('navbar')
		</div>
	</header>
	<div class="container bs-docs-container">
		<div class="bs-docs-section">
			@yield('content')
		</div>
	</div>
</body>
</html>
