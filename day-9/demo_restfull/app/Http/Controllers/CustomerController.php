<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        $customer = $this->customer->get();
        return response()->json($customer, 200);
    }

    public function detail($id)
    {
        $customer = $this->customer->find($id);
        $status = 200;
        if (!$customer) {
            $status = 404; //404 là sai đường dẫn
        }
        return response()->json($customer, $status);
    }

    public function add(Request $request)
    {
        $customer = $this->customer->create($request->all());
        $status = 201;
        if (!$customer) {
            $status = 500; // loi do serve
        }
        return response()->json($customer, $status);
    }

    public function update(Request $request, $id)
    {
        $this->customer->find($id)->update(
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
            ]
        );
        $customer = $this->customer->find($id);
        $status = 200;
        if (!$customer) {
            $status = 500;
        }
        return response()->json($customer, $status);
    }

    public function destroy($id){
        $this->customer->destroy($id);
        return response()->json([], 200);
    }

}
