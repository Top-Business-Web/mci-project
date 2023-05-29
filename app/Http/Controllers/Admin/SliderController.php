<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSlider;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    use PhotoTrait;
    public function index()
    {
        $sliders = Slider::find(1);
        $slider = Slider::first();
        return view('Admin.slider.index', compact('sliders', 'slider'));
    }

    public function sliderUpdate(StoreSlider $request)
    {


        // $inputs = $request->all(); aadads

            $sliders = Slider::find($request->id);
            $inputs = $request->except('id');

                if ($request->has('image_about')) {
                    if (file_exists($sliders->image_about)) {
                        unlink($sliders->image_about);
                    }
                    $inputs['image_about'] = $this->saveImage($request->image_about, 'assets/uploads/sliders', 'photo');
                }

                if ($request->has('image_services')) {
                    if (file_exists($sliders->image_services)) {
                        unlink($sliders->image_services);
                    }
                    $inputs['image_services'] = $this->saveImage($request->image_services, 'assets/uploads/sliders', 'photo');
                }

                if ($request->has('image_product')) {
                    if (file_exists($sliders->image_product)) {
                        unlink($sliders->image_product);
                    }
                    $inputs['image_product'] = $this->saveImage($request->image_product, 'assets/uploads/sliders', 'photo');
                }

                if ($request->has('image_faqs')) {
                    if (file_exists($sliders->image_faqs)) {
                        unlink($sliders->image_faqs);
                    }
                    $inputs['image_faqs'] = $this->saveImage($request->image_faqs, 'assets/uploads/sliders', 'photo');
                }

                if ($request->has('image_project')) {
                    if (file_exists($sliders->image_project)) {
                        unlink($sliders->image_project);
                    }
                    $inputs['image_project'] = $this->saveImage($request->image_project, 'assets/uploads/sliders', 'photo');
                }


                if ($sliders->update($inputs))
                return response()->json(['status' => 200]);
            else
                return response()->json(['status' => 405]);
    }
}
