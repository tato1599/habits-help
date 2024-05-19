<?php

namespace App\Http\Controllers;

use App\Models\Reminders;
use Illuminate\Http\Request;

class RemindersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'habit_id' => 'required|exists:habits,_id',
            'reminder_time' => 'required|date',
            // Otras validaciones si es necesario
        ]);

        Reminders::create($request->all());

        return redirect()->back()->with('success', 'Reminder created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Reminders $reminders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reminders $reminders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reminders $reminders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reminders $reminders)
    {
        //
    }
}
