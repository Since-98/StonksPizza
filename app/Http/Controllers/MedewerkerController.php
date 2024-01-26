<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medewerker;

class MedewerkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $medewerkers = medewerker::all();
        return view('Manager.index', ['medewerkers' => $medewerkers]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        return view('Manager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //
        $data = $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'inkomen' => 'required|numeric',
            'functie' => 'required'

        ]);

        $newmedewerker = medewerker::create($data);
        return redirect(route('manager'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $medwerker = medewerker::find($id);
        return view('Show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medewerker = medewerker::find($id);

            return view('Manager.Edit');

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'voornaam' => 'required',
            'achternaam' => 'required',
            'inkomen' => 'required|numeric',
            'functie' => 'required'

        ]);
       // dd($song);
        $medwerker = medewerker::find($request->id);
        $medewerker->update(['voornaam' => $request->voornaam, 'achternaam' => $request->achternaam, 'inkomen' => $request->inkomen, 'functie' => $request->functie ]);
        return redirect(route('Manager.Index'))->with('geslaagd', 'verandering toegepast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //dd($song);
    $medewerker = medewerker::find($id);
    $medewerker->delete();
  return redirect(route('Manager.Index'))->with('geslaagd', 'verwijdering toegepast'); }
}
