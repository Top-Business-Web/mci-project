<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAbout;
use App\Traits\PhotoTrait;
use App\Models\AboutUs;


class AboutUsController extends Controller
{

    use PhotoTrait;

    public function index()
    {
        $about_us = AboutUs::first();
        return view('Admin.about_us.index', compact('about_us'));
    }


    public function update(StoreAbout $request, AboutUs $about_us)
    {

        $about_us = AboutUs::find($request->id);
        $inputs = $request->except('id');



        if ($request->has('image')) {
            if (file_exists($about_us->image)) {
                unlink($about_us->image);
            }
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/about_us', 'photo');
        }

        if ($about_us->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
