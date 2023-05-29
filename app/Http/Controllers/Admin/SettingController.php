<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSetting;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    use PhotoTrait;
    public function index(Request $request)
    {
        $settings = Setting::find(1);
        return view('Admin.setting.index', compact('settings'));
    }

    public function update(StoreSetting $request, Setting $settings)
    {
        $settings = Setting::findOrFail($request->id);

        $inputs = $request->all();

        if ($request->has('logo'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$settings->logo)) {
                unlink(('assets/uploads/admins/images/') .$settings->logo);
            }
            $inputs['logo'] =  $request->logo != null ? $this->saveImage($request->logo, 'assets/uploads/admins/images' , 'photo') : $inputs['logo'];
        }
        if($request->has('files')){
            foreach($request->file('files') as $file)
            {
                $inputs['sliders'][] = $this->saveImage($file,'assets/uploads/admins/sliders','photo');
            }
        }

        if ($settings->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
