<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;

class PartnerController extends Controller
{
    public function index()
    {

        $partners = Partner::get();

        return view('Front.partners',compact('partners'));
    } // end of index
}
