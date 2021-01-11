<?php

namespace App\Http\Controllers;


use App\Http\Requests\StockRequest;
use App\Models\Manager\ProdStocksManagerInterface;
use App\Models\Model\ProdStocks;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Manager\SalesStoresManagerInterface;



class StockController extends Controller
{
    public function index(){

    }

    public function formCreateStk()
    {
        return view('/Stocks/StockForm');
    }



    public function createStk(StockRequest $request, ProdStocksManagerInterface $stocksManager, SalesStoresManagerInterface $storesManager, ProdProductsManagerInterface $productsManager)
    {
        $storeId = $request->input('stock-storeId');
        $prodId = $request->input('stock-productId');
        $q = $request->input('stock-quantity');

        $stock = new ProdStocks();
        $stock->setSalesStore($storesManager->getStoreById($storeId));
        $stock->setProdProduct($productsManager->getProductById($prodId));
        $stock->setQuantity($q);

        $stocksManager->createStock($stock);
        return redirect('/success');
    }


    public function formUpdateStk(ProdStocksManagerInterface $stocksManager, SalesStoresManagerInterface $storesManager, $storeId, $productId)
    {
        $stock = $stocksManager->getStockById($storeId, $productId);
        $stores = $storesManager->getAllStores();
        return view('stocks/stockform')->with([
            "stock" => $stock,
            "stores" => $stores
        ]);
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


    public function allJsonStk(ProdStocksManagerInterface $stocksManager)
    {
        $stock = $stocksManager->getAllStocks();
        return response()->json($stock);
    }
}
