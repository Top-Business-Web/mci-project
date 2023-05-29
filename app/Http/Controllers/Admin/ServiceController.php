<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreService;
use App\Models\Service;
use Illuminate\Http\Request;
use Str;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $services = Service::select('*');
            return DataTables::of( $services)
                ->addColumn('action', function ( $services) {
                    return '
                            <button type="button" data-id="' .  $services->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' .  $services->id . '" data-title="' .  $services->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('desc_en', function ($services){
                    return Str::limit($services->desc_en,20);
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.service.index');
        }
    }

    public function create()
    {
        return view('Admin.service.create');
    }

    public function store(StoreService $request)
    {
        $inputs = $request->all();

        if(Service::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Service $service)
    {
        return view('Admin.service.edit', compact('service'));
    }

    public function update(StoreService $request, Service $service)
    {
        if($service->update($request->all()))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }

    public function destroy(Request $request)
    {
        $services = Service::where('id', $request->id)->first();
        $services->delete();
        return response(['message' => 'Deleted Successfully', 'status' => 200], 200);
    }
}
