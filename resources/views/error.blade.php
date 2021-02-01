@extends('layouts/Layout')

@section('content')

<body style="background-image: url(/img/bicycle-1839005_1280.jpg)">
	<div class="container text-center mt-5">
        <div class="jumbotron border border-primary col-md-5 mt-9">
		<div class="brand">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			<h1 class="text-uppercase">Bike-Ride</h1>
        </div>


            <h1 class="head"><span>404</span></h1>
		    <p>Oops! La page que vous avez demandé n'a pas été trouvée !</p>
		    <p>{{ $message ?? '' }}</p>
		    <a href="/formLogin" class="btn btn-outline-primary"> Retour à la page d'accueil</a>
        </div>
	</div>



    <!-- jQuery -->
    <script src="{{asset ('js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ ('js/bootstrap.js') }}"></script>
    <!-- Theme JavaScript -->
    <script src="{{ ('js/script.js') }}"></script>

</body>

@endsection
