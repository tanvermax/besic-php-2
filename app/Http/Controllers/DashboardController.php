<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //+

    public function index()
    {
        return view('dashboard.dashboard');
    }
    public function home()
    {
        return view('dashboard.home');
    }

    public function users()
    {
        return view('dashboard.users');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

    public function createProduct()
    {
        $products=Product::latest()->get();
        return view('dashboard.product.create',compact('products'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => ["required", "unique:products,name"],
            'price' => ["required"],
        ]);
        $product = Product::create(([
            'name' => $request->name,
            'slug' => $request->slug,
            'price' => $request->price,
        ]));
        if ($product) {
            # code...
            session()->flash('message',"product added sussesfully");
            session()->flash('type',"sussess");
            return redirect()->route('products.create');
        }
    }
}
