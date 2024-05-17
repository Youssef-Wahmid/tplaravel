<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Http\Requests\StoreFormateurRequest;
use App\Http\Requests\UpdateFormateurRequest;
use App\Models\User;

class FormateurController extends Controller
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
        return view("formateur.create") ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormateurRequest $request)
    {
        // dd($request) ;

        User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> ($request->password),
            "role"=> ($request->role),
        ]);
        return "Bien ajouter Formateur" ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Formateur $formateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formateur $formateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormateurRequest $request, Formateur $formateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formateur $formateur)
    {
        //
    }
}
