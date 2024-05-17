@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="bcard-header"> Remplire les note de ETUDIANT</div>

            <div class="card-body">
                <form method="POST" action="{{ route('etudiants.update',1) }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="note1" class="col-md-4 col-form-label text-md-end">1 eme note</label>

                        <div class="col-md-6">
                            <input id="note1" type="number" class="form-control @error('note1') is-invalid @enderror" name="note1" value="{{ old('note1') }}" required autocomplete="note1" autofocus>

                            @error('note1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="note2" class="col-md-4 col-form-label text-md-end">2 eme note</label>
                        <div class="col-md-6">
                            <input id="note2" type="number" class="form-control @error('note2') is-invalid @enderror" name="note2" value="{{ old('note2') }}" required autocomplete="note2" autofocus>

                            @error('note2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
