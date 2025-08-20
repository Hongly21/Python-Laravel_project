<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Customer;
use App\Models\Service;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with(['customer', 'service'])->latest()->get();
        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $customers = Customer::all();
        $services = Service::all();
        return view('appointments.create', compact('customers', 'services'));
    }

    public function store(Request $request)
    {
        Appointment::create($request->validate([
            'customer_id' => 'required|exists:customers,id',
            'service_id' => 'required|exists:services,id',
            'appointment_time' => 'required|date',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]));

        return redirect()->route('appointments.index')->with('success', 'Appointment created.');
    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {
        $appointment = Appointment::findOrFail($id); //
        $customers = Customer::all();
        $services = Service::all();
        return view('appointments.edit', compact('appointment', 'customers', 'services'));
    }

    public function update(Request $request, Appointment $appointment) //
    {
        $appointment->update($request->validate([
            'customer_id' => 'required|exists:customers,id',
            'service_id' => 'required|exists:services,id',
            'appointment_time' => 'required|date',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]));

        return redirect()->route('appointments.index')->with('success', 'Appointment updated.');
    }

    public function destroy(Appointment $appointment) //
    {
        $appointment->delete();
        return back()->with('success', 'Appointment deleted.');
    }
}
