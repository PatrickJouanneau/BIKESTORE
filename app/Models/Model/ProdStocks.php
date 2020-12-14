<?php

namespace App\Models\Model;

use App\Models\Model\ProdProducts;

class ProdStocks
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
}
