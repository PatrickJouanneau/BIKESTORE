<?php

namespace App\Models\Model;

use App\Models\Model\ProdProducts;
use App\Models\Model\SalesStores;
use JsonSerializable;

class ProdStocks implements JsonSerializable
{
    private int $quantity;
    private ProdProducts $prodProduct;
    private SalesStores $salesStore;



    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getProdProduct(): ProdProducts
    {
        return $this->prodProduct;
    }
    public function getSalesStore(): SalesStores
    {
        return $this->salesStore;
    }


    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function setProdProduct(ProdProducts $prodProduct)
    {
        $this->prodProduct = $prodProduct;
    }
    public function setSalesStore(SalesStores $salesStore)
    {
        $this->salesStore = $salesStore;
    }



    public function jsonSerialize()
    {

        $arr = [];

        if($this->quantity != null){
            $arr["quantity"] = $this->quantity;
        }
        if(isset($this->prodProduct) && $this->prodProduct->getProductName() != null){
            $arr["product"] = $this->prodProduct->getProductName();
        }
        if(isset($this->prodProduct) && $this->prodProduct->getModelYear() != null){
            $arr["product"] = $this->prodProduct->getModelYear();
        }
        if(isset($this->prodProduct) && $this->prodProduct->getListPrice() != null){
            $arr["product"] = $this->prodProduct->getListPrice();
        }
        if(isset($this->salesStore) && $this->salesStore->getStoreName() != null){
            $arr["store"] = $this->salesStore->getStoreName();
        }


        return $arr;

    }
}
