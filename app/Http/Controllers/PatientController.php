<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::orderBy('created_at','DESC')->paginate(5);
        // $patients->paginate(8);

            return view('patient')->with([
                'patients' => $patients
            ]);
    }



    public function search(Request $request){
        $search = $request->search;
        $patients = Patient::where(function($query) use ($search){

            $query->where('cin', 'like', "%$search%")
            ->orWhere('name', 'title', "%$search%");
        })
        ->orWhereHas('patient', function($query) use ($search){
            $query->where('name', 'like', "%$search%");
        })
        ->orWhereHas('user', function($query) use ($search){
            $query->where('phone', 'like', "%$search%");
        })
        ->get();

        return view('patient.search', compact('patients', 'search'));
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
        $this->validate($request, [
            'cin' => 'required',
            'name' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);



        $pat = new Patient;
        $pat->cin = $request->input('cin');
        $pat->name = $request->input('name');
        $pat->age = $request->input('age');
        $pat->phone = $request->input('phone');
        $pat->address = $request->input('address');
        $pat->TA = $request->input('TA');
        $pat->glycemie = $request->input('glycemie');
        $pat->poids = $request->input('poids');
        $pat->albuminurie = $request->input('albuminurie');
        $pat->observation = $request->input('observation');
        $pat->typeDiabete_id = $request->input('typeDiabete_id');
        $pat->traitement_id = $request->input('traitement_id');


        $pat->save();

        return Redirect::back()->with('success', 'Ajouter un patient avec succès');

    }


    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        // return view('patient.show',compact('patient'));

    }


    /**
     * Show the form for editing the specified resource.
     */


    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('edit')->with('patient',$patient);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {


        $request->validate([
            'cin' => 'required',
            'name' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $patient = Patient::find($id);

        $patient->update($request->all());


        return redirect()->route('patient.index')->with('success','modifier un patient avec succès');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $patients = Patient::find($id);
        $patients->delete();
        // return redirect()->route('patient.index')->with('status', 'Data deleted successfully');
        return Redirect::back()->with('success', 'supprimer un patient avec succès');
    }
}