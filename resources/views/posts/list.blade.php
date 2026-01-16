@extends("layouts.app")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h1 class="h6">Liste des articles</h1>
                        <a href="{{ route('post.create') }}" class="btn btn-dark">Créer un nouveau article</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Titre de l'article</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>Categorie</th>
                                <th>Nombre de vues</th>
                                <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td><img src="{{ asset($post->cover) }}" alt="" width="30"></td>
                                <td>{{ Str::limit($post->content, 20, '...') }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->view }}</td>
                                <td>{{ $post->created_at->diffForHumans() }}</td>
                                <td></td>
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
