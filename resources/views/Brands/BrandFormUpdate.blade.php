@extends('layouts/Layout')

<body style="background-image: url(/img/couple-5709651_1920.jpg">
    <div class="container row">
        <div class="col-md-4"></div>
            <div class="jumbotron border border-primary col-md-5 mt-6">
                <div class="p-3">
                    <h4 class="pb-5" >MODIFICATION d'une marque <small> : </small><img src="/img/wrench.svg" alt="Clé"></h4>

                    <form name="brandUp" action="{{ !empty($brand) ? url('/brands/'.$brand->getBrandId().'/edit') : url('/brands/create') }}" method="GET">
                        @csrf
                        <div class="form-brand">
                            <div class="error">{{ $errors->has("brandUp") ? $errors->first("brandUp") : "" }}</div>
                            <input type="text" class="form-control form-control-user" name="brandUp" id="brandUp" placeholder=" " value="{{ !empty($Brand) ? $Brand->getBrandName()  : "" }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                    </form>
                </div>
            </div>
    </div>

</body>
