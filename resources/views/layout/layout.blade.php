<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body><center>

	<header>
		@include('layout.header')
	</header>

	<div class="row">
		<div class="wrna">
		<div class="col-md-4 col-lg-6">
			<ul class="nav flex-column">

				<br>
				@section('sidebar')
				  <li class="nav-item">
					<a class="nav-link active" href="#">HTML</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">CSS</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">JS</a>
				  </li>
				@show
			</ul>
		</div>
		</div>


		<div class="col-sm-12 col-md-8 col-lg-6">
			<div class="container">
				@yield('content')
			</div>
		</div>
	</div>

</center>
</div>

<footer class="bs-footer" role="contentinfo">
<div class="c">
        <center>by Anisa Nur Rohkmah
</div>
</footer>

</body>
</html>