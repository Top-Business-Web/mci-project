<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $categories = Category::select('*');
            return DataTables::of( $categories)
                ->addColumn('action', function ( $categories) {
                    return '
                            <button type="button" data-id="' .  $categories->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' .  $categories->id . '" data-title="' .  $categories->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.category.index');
        }
    }

    public function create()
    {
        return view('Admin.category.create');
    }

    public function store(StoreCategory $request)
    {
        $inputs = $request->all();

        if(Category::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Category $category)
    {
        return view('Admin.category.edit', compact('category'));
    }

    public function update(StoreCategory $request, Category $category)
    {
        if($category->update($request->all()))
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
        $categories = Category::where('id', $request->id)->first();
        $categories->delete();
            return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
