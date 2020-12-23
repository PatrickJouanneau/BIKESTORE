@extends('layouts/Layout')



  <body style="background-image: url(/img/race-92193_1920.jpg">

    <div class="container row">

            <div class="jumbotron text-center m-6">
                <h1 class="display-3 p-4">C'est réussi !</h1>
                <p class="lead p-3"><strong>Votre enregistrement</strong> a bien été transmis en base de données.</p>
                <hr>
                <br><br>
                <p class="lead p-2">
                  <a class="btn btn-success btn-lg" href="{{ url('/') }}{{ !empty($activeTab) ? '?activeTab='.$activeTab :  ''  }}" role="button">On continue </a>
                </p>
          </div>
    </div>

</body>

