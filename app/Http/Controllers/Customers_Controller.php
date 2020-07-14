<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use DataTables;
class Customers_Controller extends Controller
{
    public function index()
    {

    	return view('customer.index');
    }
    public function getCustomers()
    {
        return \DataTables::of(Customers::query())->make(true);
    }
}
