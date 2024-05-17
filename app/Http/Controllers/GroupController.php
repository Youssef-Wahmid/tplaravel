<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\User;

class GroupController extends Controller
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
        $etudiants = User:: where("role","etud")->where("etudiant_group",null)->get() ;
        $formateurs =User:: where("role","format")->get() ;
        return view("group.create",compact("formateurs","etudiants")) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
       $group= Group::create($request->except(["_toker","etudiants"])) ;
        foreach ($request->etudiants as $key => $e) {
            $etudiant = User::find($e) ;
            $etudiant->etudiant_group = $group->id ;
            $etudiant->save() ;
        }
        return "Le groupe crée avec succsé" ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
