<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DataTables;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('Customer.index',compact('customers'));
    }
    public function datatable()
    {
        $customers = Customer::all();
        return view('Customer.datatable', compact('customers'));
    }
    public function ajax(Request $request)
    {
        if ($request->ajax()) {

            $customers = Customer::all();
            return DataTables::of($customers)

                    ->addIndexColumn()

                    ->addColumn('first_name', function($row) {
                        $html = $row->first_name;
                        return $html;
                    })

                    ->addColumn('last_name', function($row) {
                        $html =  $row->last_name;
                        
                        return $html;
                    })

                    ->addColumn('email', function($row) {
                        $html = $row->email;
                        
                        return $html;
                    })

                    
                    

                    /* ->addColumn('action', function($row) use ($x){  // USE => USED TO ACCESS VARIABLES FROM OUTSIDE OF VARIABLE    
                        $btn = '<a href="'.route("invoice.details", $row->invoice_number + $x).'" class="edit btn btn-primary btn-sm">Details</a>';
                        return $btn;
                    }) */

                    ->rawColumns(['first_name', 'last_name', 'email'])

                    ->make(true);
        }   
        return view('Customer.ajax');
    }




    public function create()
    {
        return view('Customer.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstName' => 'required',
            'lastName' => 'required',
            'email'=>'required',
        ]);
        
        $customer = new Customer();
        $customer->first_name = $request->firstName;
        $customer->last_name = $request->lastName;
        $customer->email = $request->email;

        $customer->save();

        return redirect()->route('customer.index');
    }
}
