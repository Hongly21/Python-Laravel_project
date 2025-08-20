<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->get();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]));

        return redirect()->route('customers.index')->with('success', 'Customer created.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer) // ✅ fixed
    {
        $customer->update($request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]));

        return redirect()->route('customers.index')->with('success', 'Customer updated.');
    }

    public function destroy(Customer $customer) // ✅ fixed
    {
        $customer->delete();
        return back()->with('success', 'Customer deleted.');
    }
}
