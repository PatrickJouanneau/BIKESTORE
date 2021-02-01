<?php

namespace App\Http\Controllers;


use App\Http\Requests\StockRequest;
use App\Models\Manager\ProdStocksManagerInterface;
use App\Models\Model\ProdStocks;
use App\Models\Manager\ProdProductsManagerInterface;
use App\Models\Manager\SalesStoresManagerInterface;



class StockController extends Controller
{
    public function index()
    {
    }

    public function formCreateStk(ProdStocksManagerInterface $stocksManager, SalesStoresManagerInterface $storesManager, $storeId, $productId)
    {
        $stock = $stocksManager->getStockById($storeId, $productId);
        $stores = $storesManager->getAllStores();
        return view('/Stocks/StockForm')->with(
            [
                "stock" => $stock,
                "stores" => $stores
            ]
        );
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

        $stocksManager->createStock($stock, $storeId, $prodId);
        return redirect('/success');
    }


    public function formUpdateStk(ProdStocksManagerInterface $stocksManager, SalesStoresManagerInterface $storesManager, $storeId, $productId)
    {
        $stock = $stocksManager->getStockById($storeId, $productId);
        $stores = $storesManager->getAllStores();
        return view('stocks/stockformUpdate')->with(
            [
                "stock" => $stock,
                "stores" => $stores
            ]
        );
    }


    public function updateStk(StockRequest $request, ProdStocksManagerInterface $stocksManager, SalesStoresManagerInterface $storesManager, ProdProductsManagerInterface $productsManager, $storeId, $productId)
    {
        $stock = new ProdStocks();
        $stock->setSalesStore($storesManager->getStoreById($storeId->$request->input("stock-storeId")));
        $stock->setProdProduct($productsManager->getProductById($productId->$request->input("stock-productId")));
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
