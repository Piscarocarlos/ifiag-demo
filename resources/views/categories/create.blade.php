@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1 class="fs-6">Création d'une catégorie</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Nom de la catégorie: <span class="text-danger">*</span></label>
                                <input type="text" name="name_category_input" id="name" class="form-control @error('name_category_input') is-invalid @enderror">
                                @error('name_category_input')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button class="btn btn-dark w-100">Sauvegarder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
