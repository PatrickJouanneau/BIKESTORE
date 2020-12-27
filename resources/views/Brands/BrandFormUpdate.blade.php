@extends('layouts/Layout')

<body style="background-image: url(/img/couple-5709651_1920.jpg">
    <div class="container row">
        <div class="col-md-4"></div>
            <div class="jumbotron border border-primary col-md-5 mt-6">
                <div class="p-3">
                    <h4 class="pb-5" >MODIFICATION d'une marque <small> : </small><img src="/img/wrench.svg" alt="Clé"></h4>

                    <form name="brand" action="{{ !empty($brand) ? url('/brands/'.$brand->getBrandId().'/edit') : url('/brands/create') }}" method="POST">
                        @csrf
                        <div class="form-brand">
                            <div class="error">{{ $errors->has("brand") ? $errors->first("brand") : "" }}</div>
                            <input id="brandUp" name="brand" type="text" class="form-control form-control-user" placeholder=" " value="{{ !empty($brand) ? $brand->getBrandName()  : "" }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                    </form>
                </div>
            </div>
    </div>

</body>
