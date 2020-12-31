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
                            <input id="product-name-up" name="product-name" type="text" class="form-control form-control-user"  value="{{ !empty($product) ? $product->getProductName()  : "" }}">
                        </div>

                        <select name="product-select-brand" id="product-select-brand-up" class="form-control form-control-user mb-2">
                            <option value="{{ !empty($productBrand) ? $productBrand->getProductBrand($brandManager->getBranId())  : "" }}"></option>
                            
                        </select>

                        <select name="product-select-category" id="product-select-category-up" class="form-control form-control-user mb-2">
                            <option value="s">{{ !empty($productCategory) ? $productCategory->getProductCategory($brandManager->getCategoryId())  : "" }}</option>

                        </select>

                        <select name="product-select-year" id="product-select-year-up" class="form-control form-control-user mb-2">
                            <option value="a">{{ !empty($product) ? $product->getModelYear()  : "" }}</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>

                        <div class="pb-2">
                            <div class="error">{{ $errors->has("product-price") ? $errors->first("product-price") : "" }}</div>
                            <input id="product-price-up" name="product-price" type="text" class="form-control form-control-user"  value="{{ !empty($product) ? $product->getListPrice()  : "" }}">
                        </div>

                        <button type="submite" class="btn btn-primary btn-user btn-block">Enregistrer</button>
                    </form>
                </div>
            </div>

    </div>
</body>
