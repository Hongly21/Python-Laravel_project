<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }


    public function store(Request $request)
    {
        Service::create($request->validate([
            'name' => 'required',
            'duration' => 'required|integer',
            'price' => 'required|numeric',
        ]));
        return redirect()->route('services.index')->with('success', 'Service
created.');
    }

    public function show(string $id)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $service)
    {

        $service->update($request->validate([
            'name' => 'required'|'string',
            'duration' => 'required|integer',
            'price' => 'required|numeric',
        ]));
        return redirect()->route('services.index')
            ->with('success', 'Service updated.');
    }

    public function destroy($service)
    {
        $service->delete();
        return back()->with('success', 'Service deleted.');
    }
}
