<?php

namespace App\Http\Controllers;
use App\Models\CellPhoneAreaCode;
use App\Models\PhoneAreaCode;
use App\Models\Person;
use Illuminate\Http\Request;
class RegisterOrtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::with('phoneAreaCode', 'cellPhoneAreaCode', 'federalState', 'municipality', 'parish')->get();
        return view('register.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cellPhoneAreaCodes = CellPhoneAreaCode::all();
        $phoneAreaCodes = PhoneAreaCode::all();
        $person = PhoneAreaCode::all();
        return view('layouts.app', compact('cellPhoneAreaCodes','phoneAreaCodes','person'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'birth_date' => 'required|date_format:Y-m-d',
        'name_1' => 'required|string|max:255',
        'name_2' => 'nullable|string|max:255',
        'surname_1' => 'required|string|max:255',
        'surname_2' => 'nullable|string|max:255',
        'sex' => 'required|in:male,female',

        'nationality' => 'required|string|max:255',

        'id_number' => 'required|string|max:13',

        'federal_state_id' => 'required|integer',

        'municipality_id' => 'required|integer',

        'parish_id' => 'required|integer',

        'address' => 'required|string|max:255',

        'phone_area_code_id' => 'required|integer',

        'phone' => 'required|string|max:15',

        'cell_phone_area_code_id' => 'required|integer',

        'cell_phone' => 'required|string|max:15',

        'email' => 'required|email|max:255',

        'profession' => 'required|string|max:255',

        'institution' => 'required|string|max:255',

        'years_experience' => 'required|integer',
        ]);
        $person = new Person();
        $person->name_1 = $request->input('name_1');
        $person->name_2 = $request->input('name_2');
        $person->surname_1 = $request->input('surname_1');
        $person->surname_2 = $request->input('surname_2');
        $person->birth_date = $validatedData['birth_date'];
        $person->sex = $request->input('sex');
        $person->nationality = $request->input('nationality');
        $person->id_number = $request->input('id_number');
        $person->federal_state_id = $request->input('federal_state_id');
        $person->municipality_id = $request->input('municipality_id');
        $person->parish_id = $request->input('parish_id');
        $person->address = $request->input('address');
        $person->phone_area_code_id = $request->input('phone_area_code_id');
        $person->phone = $request->input('phone');
        $person->cell_phone_area_code_id = $request->input('cell_phone_area_code_id');
        $person->cell_phone = $request->input('cell_phone');
        $person->email = $request->input('email');
        $person->profession = $request->input('profession');
        $person->institution = $request->input('institution');
        $person->years_experience = $request->input('years_experience');
        $person->save();
        return redirect()->route('register_ort.index');
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
        $request->all();
        $person = new Person();
        $person->name_1 = $request->input('name_1');
        $person->name_2 = $request->input('name_2');
        $person->surname_1 = $request->input('surname_1');
        $person->surname_2 = $request->input('surname_2');
        $person->birth_date = $request->input('birth_date');
        $person->sex = $request->input('sex');
        $person->nationality = $request->input('nationality');
        $person->id_number = $request->input('id_number');
        $person->federal_state_id = $request->input('federal_state_id');
        $person->municipality_id = $request->input('municipality_id');
        $person->parish_id = $request->input('parish_id');
        $person->address = $request->input('address');
        $person->phone_area_code_id = $request->input('phone_area_code_id');
        $person->phone = $request->input('phone');
        $person->cell_phone_area_code_id = $request->input('cell_phone_area_code_id');
        $person->cell_phone = $request->input('cell_phone');
        $person->email = $request->input('email');
        $person->profession = $request->input('profession');
        $person->institution = $request->input('institution');
        $person->years_experience = $request->input('years_experience');
        $person->save();
        return redirect()->route('register_ort.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pozo = Person::find($id);
        $pozo->delete();
        return redirect()->back();
    }
}
