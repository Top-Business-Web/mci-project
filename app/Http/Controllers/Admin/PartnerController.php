<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use App\Models\Brand;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreBrand;

class PartnerController extends Controller
{
    use PhotoTrait;
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $brands = Partner::select('*');
            return DataTables::of($brands)
                ->addColumn('action', function ($brands) {
                    return '
                            <button type="button" data-id="' . $brands->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $brands->id . '" data-title="' . $brands->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('image', function ($brands) {
                    return '<img style="width:60px;border-radius:30px" onclick="window.open(this.src)" src="' . asset($brands->image) . '"/>';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin.partner.index');
        }
    } // end index

    public function create()
    {
        return view('Admin.partner.create');
    } // end create

    public function store(PartnerRequest $request)
    {
        $inputs = $request->all();

        if ($request->has('image')) {
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/partners','photo');
        }

        if (Partner::create($inputs)) {

            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    } // end store

    public function edit(Partner $partner)
    {
        return view('Admin.partner.edit', compact('partner'));
    } // end edit

    public function update(PartnerRequest $request, Partner $partner)
    {
        $inputs = $request->except('id');

        if ($request->has('image')) {
            if (file_exists($partner->image)) {
                unlink($partner->image);
            }
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/partners','photo');
        }
        if ($partner->update($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    } // end update

    public function delete(Request $request)
    {
        $brands = Partner::where('id', $request->id)->first();
        $brands->delete();
        return response(['message' => 'deleted Successfully', 'status' => 200], 200);
    } // end delete
}
