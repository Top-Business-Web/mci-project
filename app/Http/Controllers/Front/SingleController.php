<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;

class SingleController extends Controller
{
    public function getProduct($id)
    {
        $product = Product::findOrFail($id);
        $settings = Setting::first();
        $products = Product::where('category_id',$product->category_id)
            ->latest()->take(4)->get();
        return view('Front.single', compact('product','products', 'settings'));
    }

    public function getStock($id)
    {
        $product = Product::findOrFail($id);
        $settings = Setting::first();
        $products = Product::where('stock','1')
            ->where('category_id',$product->category_id)
            ->latest()->take(4)->get();
        return view('Front.stock', compact('product','products', 'settings'));
    }
}
