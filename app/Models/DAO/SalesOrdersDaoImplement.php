<?php

namespace App\Models\DAO;

use Illuminate\Support\Facades\DB;
use App\Models\Model\SalesOrders;
use App\Models\DAO\SalesOrdersDaoInterface;
use App\Models\DAO\SalesCustomersDaoInterface;
use App\Models\DAO\SalesStaffsDaoInterface;
use App\Models\DAO\SalesStoresDaoInterface;
use Exception;
use App\Exceptions\DaoException;
use Illuminate\Support\Facades\Log;

class SalesOrdersDaoImplement implements SalesOrdersDaoInterface
{
    private $customerDao;
    private $storeDao;
    private $staffDao;
    public function __construct(
        SalesCustomersDaoInterface $customerDao,
        SalesStoresDaoInterface $storeDao,
        SalesStaffsDaoInterface $staffDao
    ) {
        $this->customerDao = $customerDao;
        $this->storeDao = $storeDao;
        $this->staffDao = $staffDao;
    }



    public function getListeOrders()
    {
        try {
            /*
            $bdd = DB::getPdo();
            $reponse = $bdd->query('SELECT TOP 10 * FROM sales.orders ORDER BY order_id DESC');
            $resultBdd = $reponse->fetchAll();

            $listeOrders = [];
            foreach ($resultBdd as $i => $row) {
                $order = new SalesOrders();
                $order->setOrderId($row['order_id']);
                $order->setOrderStatus($row['order_status']);
                $order->setOrderDate($row['order_date']);
                $order->setRequiredDate($row['required_date']);
                $order->setShippedDate($row['shipped_date']);

                $customer = $this->customerDao->getCustomerById($row['customer_id']);
                $order->setSalesCustomers($customer);

                $store = $this->storeDao->getStoreById($row['store_id']);
                $order->setSalesStores($store);

                $staff = $this->staffDao->getStaffById($row['staff_id']);
                $order->setSalesStaffs($staff);

                array_push($listeOrders, $order);
            }
            return $listeOrders;
            */

            $resultBdd = DB::select('exec dbo.get_liste_orders');

            $listeOrders = [];
            foreach ($resultBdd as $i => $row) {
                $order = new SalesOrders();
                $order->setOrderId($row->order_id);
                $order->setOrderStatus($row->order_status);
                $order->setOrderDate($row->order_date);
                $order->setRequiredDate($row->required_date);
                $order->setShippedDate($row->shipped_date);

                $customer = $this->customerDao->getCustomerById($row->customer_id);
                $order->setSalesCustomers($customer);

                $store = $this->storeDao->getStoreById($row->store_id);
                $order->setSalesStores($store);

                $staff = $this->staffDao->getStaffById($row->staff_id);
                $order->setSalesStaffs($staff);

                array_push($listeOrders, $order);
            }
            return $listeOrders;
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }




    public function getAllOrders()
    {
        try {
            $resultBdd = DB::select('exec dbo.get_all_orders');

            $allOrders = [];
            foreach ($resultBdd as $i => $row) {
                $order = new SalesOrders();
                $order->setOrderId($row->order_id);
                $order->setOrderStatus($row->order_status);
                $order->setOrderDate($row->order_date);
                $order->setRequiredDate($row->required_date);
                $order->setShippedDate($row->shipped_date);

                $customer = $this->customerDao->getCustomerById($row->customer_id);
                $order->setSalesCustomers($customer);

                $store = $this->storeDao->getStoreById($row->store_id);
                $order->setSalesStores($store);

                $staff = $this->staffDao->getStaffById($row->staff_id);
                $order->setSalesStaffs($staff);

                array_push($allOrders, $order);
            }
            return $allOrders;
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }



    public function getOrderById($orderId)
    {
        try {
            $bdd = DB::getPdo();
            $reponse = $bdd->query("SELECT * FROM sales.orders WHERE order_id='" . $orderId . "'");
            $resultBdd = $reponse->fetch();

            $order = new SalesOrders();

            $order->setOrderStatus($resultBdd['order_status']);
            $order->setOrderDate($resultBdd['order_date']);
            $order->setRequiredDate($resultBdd['required_date']);
            $order->setShippedDate($resultBdd['shipped_date']);

            $customer = $this->customerDao->getCustomerById($resultBdd['customer_id']);
            $order->setSalesCustomers($customer);

            $store = $this->storeDao->getStoreById($resultBdd['store_id']);
            $order->setSalesStores($store);

            $staff = $this->staffDao->getStaffById($resultBdd['staff_id']);
            $order->setSalesStaffs($staff);

            return $order;
        } catch (Exception $e) {
            error_log($e);
            Log::error($e);
            throw new DaoException();
        }
    }
}
