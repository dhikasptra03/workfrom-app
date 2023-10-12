<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TowerStoreRequest;
use App\Models\City;
use App\Models\Tower;
use App\Models\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $towers = Tower::all();
        return view('admin.towers.index', compact('towers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $utilities = Utility::all();
        return view('admin.towers.create', compact('cities', 'utilities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TowerStoreRequest $request)
    {
        $image = $request->file('image')->store('public/towers');

        $tower = Tower::create([
            'name' => $request->name,
            'guest_number' => $request->guest_number,
            'status' => $request->status,
            'location' => $request->location,
            'image' => $image,
            'price' => $request->price,
            'description' => $request->description
        ]);

        if($request->has('utilities')){
            $tower->utilities()->attach($request->utilities);
        }

        if($request->has('cities')){
            $tower->cities()->attach($request->cities);
        }

        return to_route('admin.towers.index')->with('success', 'Tower created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tower $tower)
    {
        $cities = City::all();
        $utilities = Utility::all();
        return view('admin.towers.edit', compact('tower', 'cities', 'utilities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tower $tower)
    {
        $request->validate([
            'name' => 'required',
            'guest_number' => 'required',
            'status' => 'required',
            'location' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        $image = $tower->image;
        if ($request->hasFile('image')) {
            Storage::delete($tower->image);
            $image = $request->file('image')->store('public/towers');
        }

        $tower->update([
            'name' => $request->name,
            'guest_number' => $request->guest_number,
            'image' => $image,
            'status' => $request->status,
            'location' => $request->location,
            'price' => $request->price,
            'description' => $request->description
        ]);

        if($request->has('utilities')){
            $tower->utilities()->sync($request->utilities);
        }

        if($request->has('cities')){
            $tower->cities()->sync($request->cities);
        }

        return to_route('admin.towers.index')->with('success', 'Tower updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tower $tower)
    {
        Storage::delete($tower->image);
        $tower->utilities()->detach();
        $tower->delete();
        $tower->reservations()->delete();
        return to_route('admin.towers.index')->with('danger', 'Tower deleted successfully');
    }
}
