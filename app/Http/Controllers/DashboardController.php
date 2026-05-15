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
        $products = Product::latest()->get();
        return view('dashboard.product.create', compact('products'));
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
            session()->flash('message', "product added sussesfully");
            session()->flash('type', "sussess");
            return redirect()->route('products.create');
        }
    }

    public function product_edit($id)
    {
        $product = Product::findOrFail($id);
        return view('dashboard.product.edit', compact('product'));
    }

    
   public function product_update(Request $request, $id)
    {
    $request->validate([
        'name' => ['required'],
        'price' => ['required'],
    ]);

    $product = Product::findOrFail($id);

    $product->update([
        'name' => $request->name,
        'slug' => $request->slug,
        'price' => $request->price,
    ]);
  
    if ($product) {
            # code...
            session()->flash('message', "product update sussesfully");
            session()->flash('type', "sussess");
            return redirect()->route('products.create');
        }

    // return redirect()->route('products.create')
    //     ->with('message', 'Product updated successfully!');
    }

    public function product_delete($id)
    {
        $product=Product::findOrFail($id)->delete();
    //     return redirect()->with([
    //     'message' => 'Product deleted successfully',
    //     'type' => 'success'
    // ]);
     session()->flash('message', "product delete sussesfully");
            session()->flash('type', "warn");
            return redirect()->route('products.create');

    }
}
