<?php

namespace App\Http\Controllers;

use App\Models\Habits;
use Illuminate\Http\Request;

class HabitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('habits', [
            'habits' => Habits::where('user_id', '=', auth()->id())
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_habit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /**
         * 'user_id',
    'name',
    'description',
    'frequency',
    'start_date',
    'end_date',
    'created_at',
    'updated_at',
         */
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Habits::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category, // Add this line
            'frequency' => $request->frequency,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect('/habits');
    }

    /**
     * Display the specified resource.
     */
    public function show(Habits $habits)
    {
        return view('browse_habits', [
            'habits' => Habits::where('complete', '=', false)
                ->take(10)
                ->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Encuentra el hábito a editar
        $habit = Habits::findOrFail($id);

        return view('edit_habit', [
            'habit' => $habit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Encuentra el hábito a actualizar
        $habit = Habits::findOrFail($id);

        // Actualiza los campos del hábito con los datos del formulario
        $habit->name = $request->input('name');
        $habit->description = $request->input('description');
        $habit->start_date = $request->input('start_date');
        $habit->end_date = $request->input('end_date');
        $habit->category = $request->input('category');
        $habit->frequency = $request->input('frequency');

        // Guarda los cambios en la base de datos
        $habit->save();

        // Redirige de vuelta a la página de detalles del hábito o a donde desees
        return redirect()->route('habits.index', $habit->id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habits $habits)
    {
        $habits->delete();

        return redirect('/habits');
    }
}
