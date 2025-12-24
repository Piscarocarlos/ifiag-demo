<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
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

        return view('pages.products', compact('produits'));
    }
}

https://openclassrooms.com/fr/courses/7168871-apprenez-les-bases-du-langage-python
