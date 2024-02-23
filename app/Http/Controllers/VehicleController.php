<?php

namespace App\Http\Controllers;

use App\Models\vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicle = vehicle::all();
        return view('vehicle.index', compact('vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'color',
            'tire_wheel',
            'machine',
            'price' => 'required',
        ]);

        if (
            vehicle::create([
                'name' => $request->name,
                'color' => $request->color ?? 'black',
                'tire_wheel' => $request->tire_wheel ?? 2,
                'machine' => $request->machine,
                'price' => $request->price
            ])
        ) {
            return redirect()->route('vehicle.index')->with(['success' => 'data berhasil di simpan']);
        } else {
            return redirect()->route('vehicle.create')->with(['error' => 'data gagal di simpan']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $vehicle = vehicle::findOrFail($id);

        return view('vehicle.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $vehicle = vehicle::findOrFail($id);

        return view('vehicle.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'color',
            'tire_wheel',
            'machine',
            'price' => 'required',
        ]);

        $vehicle = vehicle::findOrFail($id);

        //Update data
        $vehicle->update([
            'name' => $request->name,
            'color' => $request->color,
            'tire_wheel' => $request->tire_wheel,
            'machine' => $request->machine,
            'price' => $request->price

        ]);

        return redirect()->route('vehicle.index')->with(['success' => 'Vehicle berhasil di update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $vehicle = vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicle.index')->with(['success' => 'Data berhasil di hapus']);
    }
}
