<?php

namespace App\Models\Model;

use App\Models\Model\ProdProducts;
use App\Models\Model\SalesStores;
use JsonSerializable;

class ProdStocks implements JsonSerializable
{
    private $quantity;

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
        return [
            'id' => $this->prodProduct->getProductId(),
            'name' => $this->prodProduct->getProductName(),
            'quantity' => $this->quantity,
            'store' => $this->salesStore->getStoreName(),
            'year' => $this->prodProduct->getModelYear(),
            'price' => $this->prodProduct->getListPrice()
        ];
    }
}
