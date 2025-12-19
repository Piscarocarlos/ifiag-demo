<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $name = "Toto";
    $jour = 6;
    $names = ["Titi", "Carlos", "Hakimi", "Tutuiug"];
    return view("pages.home", compact('name', 'jour', 'names'));
});

Route::get("/about-toto", function () {
    return view("pages.about");
})->name("about");


Route::get("/products", function () {

    $produits = [
        [
            'id' => 1,
            'nom' => 'Clé USB 32 Go',
            'categorie' => 'Informatique',
            'prix' => 120.00,
            'stock' => 50,
            'actif' => true,
            'image' => 'https://www.fournipro.ma/media/catalog/product/cache/a413661d9c1655056f3fcf1a8f852d13/s/d/sdcz74-128g-g46.jpg'
        ],
        [
            'id' => 2,
            'nom' => 'Souris sans fil',
            'categorie' => 'Informatique',
            'prix' => 85.00,
            'stock' => 120,
            'actif' => true,
            'image' => ''
        ],
        [
            'id' => 3,
            'nom' => 'Sac à dos',
            'categorie' => 'Accessoires',
            'prix' => 250.00,
            'stock' => 0,
            'actif' => false,
            'image' => ''
        ],
        [
            'id' => 4,
            'nom' => 'Casque audio',
            'categorie' => 'Audio',
            'prix' => 300.00,
            'stock' => 35,
            'actif' => true,
            'image' => ''
        ]
    ];


    return view("pages.products", compact('produits'));
})->name("products.list");

// another route
