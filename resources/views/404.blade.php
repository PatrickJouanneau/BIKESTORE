@extends('Layout')

@section('content')

<body>
	<div class="container text-center">
		<div class="brand">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			<h3 class="text-uppercase">Bike-Ride</h3>
		</div>
		<h1 class="head"><span>404</span></h1>
		<p>Oops! La page que vous avez demandé n'a pas été trouvée !</p>
		<a href="#" class="btn-outline"> Retour à la page d'accueil</a>
	</div>

    <!-- jQuery -->
    <script src="{{asset ('js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ ('js/bootstrap.js') }}"></script>
    <!-- Theme JavaScript -->
    <script src="{{ ('js/script.js') }}"></script>

</body>

@endsection
