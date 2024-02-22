<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use Inertia\Inertia;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::orderByDesc('created_at')->paginate(10);
        return Inertia::render('customer/index',['customers' => $customers,'pagination' => $customers->links()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('customer/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:150|min:2',
            'email' => 'required|max:150|min:2|email|unique:customers',
            'phone_number' => 'required|numeric|unique:customers',
            'address' => 'required',
        ]);
        if($validator->fails()){
            return redirect('customer/create')->withErrors($validator)->withInput();     
        }
        $customer                      = new Customer();
        $customer->name                = $request->name;
        $customer->email               = $request->email;
        $customer->phone_number        = $request->phone_number;
        $customer->address             = $request->address;
        $customer->save();
        return redirect('/')->with('success', 'Customer Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer =  Customer::find($id);
        return Inertia::render('customer/show',['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer =  Customer::find($id);
        return Inertia::render('customer/edit',['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:150|min:2',
            'email' => 'required|max:150|min:2|email|unique:customers,email,'.$id,
            'phone_number' => 'required|numeric|unique:customers,phone_number,'.$id,
            'address' => 'required',
        ]);
        if($validator->fails()){
            return redirect('customer/'.$id.'/edit')->withErrors($validator)->withInput();     
        }
        $customer                      = Customer::find($id);
        $customer->name                = $request->name;
        $customer->email               = $request->email;
        $customer->phone_number        = $request->phone_number;
        $customer->address             = $request->address;
        $customer->save();
        return redirect('/')->with('success', 'Customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::find($id)->delete();
        return redirect('/')->with('success', 'Customer Deleted Successfully');
    }
}
