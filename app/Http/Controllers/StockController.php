<?php

namespace App\Http\Controllers;


use App\Http\Requests\StockRequest;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Manager\ProdStocksManagerInterface;
use App\Models\Manager\SalesStoresManagerInterface;
use App\Models\Model\ProdStocks;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function formCreateStk()
    {
        return view('/Stocks.StockForm');
    }



    public function createStk(StockRequest $request, ProdStocksManagerInterface $stocksManager, SalesStoresManagerInterface $storesManager, ProdProductsManagerInterface $productsManager)
    {
        $store = $request->input('stock-storeId');
        $prod = $request->input('stock-productId');
        $q = $request->input('quantity');

        $stock = new ProdStocks();
        $stock->setSalesStore($storesManager->getStoreById($store));
        $stock->setProdProduct($productsManager->getProductById($prod));
        $stock->setQuantity($q);

        $stocksManager->createStock($stock);
        return redirect('/success');
    }


    public function formUpdateStk(ProdStocksManagerInterface $stocksManager, $stockId)
    {
        $stock = $stocksManager->getStockById($stockId);
        return view('stocks.stockform')->with(["stock" => $stock]);
    }


    public function updateStk(StockRequest $request, ProdStocksManagerInterface $stocksManager, SalesStoresManagerInterface $storesManager, ProdProductsManagerInterface $productsManager, $stockId)
    {
        $stock = new ProdStocks();
        $stock->setSalesStore($request->input("stock-storeId"));
        $stock->setProdProduct($request->input("stock-productId"));
        $stock->setQuantity($request->input("quantity"));

        $stocksManager->updateStock($stock);
        return redirect('/success');
    }
}
