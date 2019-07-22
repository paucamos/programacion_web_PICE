<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\App;
use App\Models\Post;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function cataleg() {
        $products = Product::get();
        return view('cataleg.index', compact('products'));
    }
    public function contacte() {
        return view('contact');
    }
    public function privacitat() {
        return view('privacy');
    }
    public function detallCataleg($id) {
        $product = Product::find($id);
        return view('productDetails', compact('product'));
    }
    public function canviIdioma($locale) {
        App::setLocale($locale);

        return redirect('llistaProds');
    }
}