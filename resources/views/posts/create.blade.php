@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <h1 class="h6">Création d'un article</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Titre de l'article <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" placeholder="Entrer le titre de votre article">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="category_id">Catégorie de l'article </label>
                            <select class="form-select" name="category_id">
                                <option >Selectionner une catégorie</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="cover">Image de couverture de l'article </label>
                            <input type="file" class="form-control" name="cover" >

                        </div>
                        <div class="form-group mb-3">
                            <label for="content">Contenu de l'article <span class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" rows="5" name="content" placeholder="Entrer le contenu de votre article"></textarea>
                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
