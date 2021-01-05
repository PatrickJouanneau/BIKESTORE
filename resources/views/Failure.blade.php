@extends('layouts/Layout')

<div class="jumbotron-red text-center m-5">
    <h1 class="display-3 p-5">Opération impossible !</h1>
    <p class="lead p-5"><strong>Vérifiez vos enregistrements,</strong> des opérations existent.</p>
    <p>{{ $message ?? '' }}</p>
    <hr>
    <br><br>
    <p class="lead p-5">
      <a class="btn btn-success btn-lg" href="{{ URL::previous() }}" role="button">Retour </a>
    </p>
  </div>
