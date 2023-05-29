<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quote;
use App\Models\Product;
use App\Models\Category;
use Yajra\DataTables\Facades\DataTables;

class QuoteController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()) {
            $quotes = Quote::select('*');
            return DataTables::of($quotes)
                ->addColumn('action', function ( $quotes) {
                    return '
                            <button type="button" data-id="' .  $quotes->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' .  $quotes->id . '" data-title="' .  $quotes->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.quote.index');
        }
    }

    public function edit(Quote $quote)
    {
        return view('Admin.quote.show', compact('quote'));
    }


    public function destroy(Request $request)
    {
        $quote = Quote::where('id', $request->id)->first();
        $quote->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }

    public function getOneProduct($id)
    {
        $product = Product::find($id);
        $categoreis = Category::get();
        return view('Admin.quote.quote_product', compact('product', 'categoreis'));
    }

}
