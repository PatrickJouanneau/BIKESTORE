@extends('layouts/Layout')

<body style="background-image: url(/img/bike-3521378-1920.jpg">
    <div class="container row">
        <div class="col-md-6"></div>
            <div class="jumbotron border border-primary col-md-5 mt-6">
                <div class="p-3">
                    <h4 class="pb-5" >MODIFICATION d'une catégorie <small> : </small><img src="/img/wrench.svg" alt="Clé"></h4>

                    <form name="categorieUp" action="{{ !empty($category) ? url('/categories/'.$category->getCategoryId().'/edit') : url('/categories/create') }}" method="GET">
                        @csrf
                        <div class="form-categorie">
                            <div class="error">{{ $errors->has("categorieUp") ? $errors->first("categorieUp") : "" }}</div>
                            <input type="text" class="form-control form-control-user" name="categorieUp" id="categorieUp" placeholder=" " value="{{ !empty($category) ? $category->getCategoryName()  : "" }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                    </form>
                </div>
            </div>
    </div>

</body>
