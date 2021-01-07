@extends('layouts.Layout')

<body style="background-image: url(/img/bicycle-691831_1920.jpg">
    <div class="container row">
        <div class="col-mb-6"></div>
            <div class="jumbotron border border-primary col-md-5 m-6">
                <div class="p-3">
                    <h4 class="pb-5">MODIFICATION d'un produit<small> : </small><img src="/img/wrench.svg" alt="Clé"></h4>

                    <form name="product-create" action="{{ !empty($product) ? url('/products/'.$product->getProductId().'/edit') : url('/products/create') }}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <div class="error">{{ $errors->has("product-name") ? $errors->first("product-name") : "" }}</div>
                            <input id="product-name-up" name="product-name" type="text" class="form-control form-control-user"  value="{{ !empty($product) ? $product->getProductName() : "" }}">
                        </div>

                        <select name="product-select-brand" id="product-select-brand-up" class="form-control form-control-user mb-2">
                            <!--option value="{!-{ !empty($product->getProductBrand()->getBrandId()) ? $product->getProductBrand()->getBrandId()) : "" }}"></option-->
                            <option value="Tout">Choisir une marque...</option>
                            @foreach ($brands as $b)
                                <option value="{{ $b->getBrandId() }}"  {{ !empty($product->getProductBrand()->getBrandId()) && $product->getProductBrand()->getBrandId() ==  $b->getBrandId() ? "selected" : "" }}    >{{ $b->getBrandName() }}</option>
                            @endforeach

                            
                        </select>

                        <select name="product-select-category" id="product-select-category-up" class="form-control form-control-user mb-2">
                            <option value="allCategories">Choisir une catégorie</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->getCategoryId() }}"   {{ !empty($product->getProductCategory()->getCategoryId()) && $product->getProductCategory()->getCategoryId() ==  $cat->getCategoryId() ? "selected" : "" }}>{{ $cat->getCategoryName() }}</option>
                            @endforeach
                        </select>

                        <select name="product-select-year" id="product-select-year-up" class="form-control form-control-user mb-2">

                            @for ($i = 2016; $i < 2099; $i++)
                                <option value="{{ $i }}"   {{  $product->getModelYear() ==  $i ? "selected" : "" }}>{{ $i }}</option>
                            @endfor
                        </select>

                        <div class="pb-2">
                            <div class="error">{{ $errors->has("product-price") ? $errors->first("product-price") : "" }}</div>
                            <input id="product-price-up" name="product-price" type="text" class="form-control form-control-user"  value="{{ !empty($product) ? $product->getListPrice() : "" }}">
                        </div>

                        <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                    </form>
                </div>
            </div>

    </div>
</body>
