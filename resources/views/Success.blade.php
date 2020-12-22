@extends('layouts/Layout')

<div class="jumbotron text-center m-5">
    <h1 class="display-3 p-5">C'est réussi !</h1>
    <p class="lead p-5"><strong>Votre enregistrement</strong> a bien été transmis en base de données.</p>
    <hr>
    <br><br>
    <p class="lead p-5">
      <a class="btn btn-success btn-lg" href="{{ URL::previous() }}" role="button">On continue </a>
    </p>
  </div>

