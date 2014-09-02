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
			<div class="navbar-header">
				<a class="navbar-brand">Employees</a>
			</div>
			<div class="navbar-header">
				<a class="navbar-brand">Tasks</a>
			</div>
			<div class="navbar-header">
				<a class="navbar-brand">Categories</a>
			</div>
			<div class="navbar-header pull-right">
				<a class="navbar-brand">Login</a>
			</div>
			<div class="navbar-header pull-right">
				<a class="navbar-brand">Register</a>
			</div>
		</div>
	</header>
	<div class="container bs-docs-container">
		<div class="bs-docs-section">
			@yield('content')
		</div>
	</div>
</body>
</html>
