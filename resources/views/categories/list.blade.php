@extends("layouts.app")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h1 class="h6">Liste des catégories</h1>
                        <a href="#" class="btn btn-dark">Créer une nouvelle catégorie</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nom de la catégorie</th>
                                <th>Slug de la categorie</th>
                                <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Foreach pour l'affichage des données venant du controller --}}
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                        {{-- Bouton pour supprimer, le data-bs-target doit avoir le même nom que id du modal --}}
                                        <button data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory{{ $category->id }}"
                                            class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </div>
                                    {{-- modal de suppression --}}
                                    <div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de
                                                        suppression</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('category.delete', $category->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
                                                        <p>
                                                            Voulez-vous vraiment supprimer cette catégorie : <b>{{
                                                                $category->name }}</b> ?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Fermer</button>
                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
