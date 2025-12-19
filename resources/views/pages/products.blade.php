<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>La liste des produits</h1>
    <h2>Veuillez commander</h2>

    <div class="container">
        <div class="row">
            @foreach ($produits as $produit)
            <div class="col-md-3">
                <div class="card card-body">
                    <img src="{{ $produit['image'] }}" alt="" class="w-100">
                    <h3>{{ $produit['nom'] }}</h3>
                    <span class="badge bg-primary">{{ $produit['categorie'] }}</span>
                    <h4>{{ $produit['prix'] }} DH</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>
