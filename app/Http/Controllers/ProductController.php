<?php


namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Home() {
        $produits =Produit::paginate(3);
        return view('Home', ['products' => $produits]); 
    }

    public function productbyCat(Request $request){
        $cat=$request->route('cat');
        $produits=Produit::where('categorie', '=' ,$cat)->get();
       
        return view('Produits', [
            'products' => $produits,
            'categorie' => $cat
            ]);
     
     }

    }
    

