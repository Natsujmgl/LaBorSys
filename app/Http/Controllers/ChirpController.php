<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;

class ChirpController extends Controller
{

    public function index()
    {
        return Inertia::render('Chirps/index', [
            //
        ]);    }


    public function create()
    {
        //
    }


    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $request->user()->chirps()->create($validated);

        return redirect(route('chirps.index'));
    }

    public function show(Chirp $chirp)
    {
        //
    }

    public function edit(Chirp $chirp)
    {
        //
    }

    public function update(Request $request, Chirp $chirp)
    {
        //
    }

    public function destroy(Chirp $chirp)
    {
        //
    }
}
