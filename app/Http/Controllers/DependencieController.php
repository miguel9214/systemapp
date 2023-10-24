<?php

namespace App\Http\Controllers;

use App\Models\Dependencie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DependencieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {

        return 'Hola mundo';
        return Inertia::render('Dependencies/Index',['dependencies'=>Dependencie::all()]);
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
    public function store(Request $request):RedirectResponse
    {
        $validated= $request->validate([
            'name'=>'required|string|max:255'
        ]);

        $request->user()->dependencies()->create($validated);




    }

    /**
     * Display the specified resource.
     */
    public function show(Dependencie $dependencie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dependencie $dependencie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dependencie $dependencie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dependencie $dependencie)
    {
        //
    }
}
