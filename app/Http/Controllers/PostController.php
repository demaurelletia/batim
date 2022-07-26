<?php

 namespace App\Http\Controllers;

 class PostController extends Controller
 {
    public function accueil()
    {
         return view('accueil');
    }

    public function categorie()
    {
         return view('categorie');
    }

    public function contact()
    {
         return view('contact');
    }

    public function connexion()
    {
         return view('connexion');
    }

    public function produitdetail()
    {
         return view('produitdetail');
    }
    public function panier()
    {
         return view('panier');
    }
 }

