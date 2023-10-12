<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TowerStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Category;
use App\Models\Reservation;
use App\Models\Tower;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $towers = Tower::where('status', TowerStatus::Available)->get();
        return view('admin.reservations.create', compact('towers', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $request)
    {
        $tower = Tower::findOrFail($request->tower_id);
        if ($request->guest_number > $tower->guest_number) {
            return back()->with('warning', 'Please choose the table base on guests.');
        }
        $request_date = Carbon::parse($request->res_date);

        foreach ($tower->reservations as $res) {
            // Mengonversi string tanggal menjadi objek DateTime
            $resDate = new DateTime($res->res_date);
            $requestDate = new DateTime($request_date);
            if ($resDate->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This tower is reserved for this date.');
            }
        }

        Reservation::create($request->validated());

        return to_route('admin.reservations.index')->with('success', 'Reservation created successfully');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return to_route('admin.reservations.index')->with('danger', 'Reservation deleted successfully.');
    }
}
