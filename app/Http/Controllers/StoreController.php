<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke()
    {
        $products = Product::paginate(9);
        $categories = Category::all();
        return view('site.store', compact(['products', 'categories']));
    }
}
