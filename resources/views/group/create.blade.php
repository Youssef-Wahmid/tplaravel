@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="bcard-header">Create Group</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('groups.store') }}">
                        @csrf


                        <div class="row mb-3">
                            <label for="formateur_id" class="col-md-4 col-form-label text-md-end">Roles</label>

                            <div class="col-md-6 ">
                                <select name="formateur_id" class="form-control" >
                                    @foreach ($formateurs as $f)
                                        <option value="{{$f->id}}">{{$f->name}}</option>
                                    @endforeach
                                </select>
                                @error('formateur_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="container">
                            <h2>Etudiants</h2>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Nom</th>
                                  <th>Email</th>
                                  <th>Selctionner Etudiant</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($etudiants as $e)
                                    <tr>
                                        <td>{{$e->id}} </td>
                                        <td>{{$e->name}} </td>
                                        <td>{{$e->email}} </td>
                                        <td class="text-center"> <input type="checkbox" name="etudiants[]" id="etudiant_group" value="{{$e->id}} "> </td>
                                    </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                    </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>




        </div>

    </div>
</div>
@endsection
