<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Partner;
use App\Models\Question;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {

        $products = Product::paginate(8);
        $settings = Setting::first();
        $about = AboutUs::first();
        $services = Service::take(3)->get();
        $partners = Partner::take(8)->get();
        $questions = Question::latest()->take(3)->get();
//        dd($questions);
        return view('Front.index', compact('products', 'settings','about','questions','partners','services'));
    }
}
