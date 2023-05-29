<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use App\Models\Category;
use App\Models\Product;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    use PhotoTrait;
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::select('*');
            return DataTables::of($products)
                ->addColumn('action', function ($products) {
                    return '
                            <button type="button" data-id="' . $products->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $products->id . '" data-title="' . $products->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('images', function ($products){
                    return '<img style="width:60px;border-radius:30px" onclick="window.open(this.src)" src="'.asset($products->images[0]).'"/>';
                })
                ->editColumn('stock', function ($products){
                    if ($products->stock == '1')

                        return  '<button class="btn btn-success changeStock" data-id="'.$products->id.'">In Stock</button>';
                    else
                        return  '<button class="btn btn-outline-danger changeStock" data-id="'.$products->id.'">Out Stock</button>';

                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin.product.index');
        }
    }

    public function create()
    {
        $products = Product::get();
        $ids = ($products->count() > 0) ? Product::latest()->first()->id + 1 : 1;
        $sku = "00" . $ids;
        $categoreis = Category::get();
        return view('Admin.product.create', compact('categoreis', 'products', 'sku'));
    }

    public function store(StoreProduct $request)
    {
        $inputs = $request->all();

        if($request->has('files')){
            foreach($request->file('files') as $file)
            {
                $inputs['images'][] = $this->saveImage($file,'assets/uploads/products','photo');
            }
        }
        if($request->has('pdf'))
        {
            $inputs['pdf'] = $this->saveImage($request->pdf, 'assets/uploads/pdf', 'pdf');
        }

        if ($request->has('tags') && $request->tags != null) {
            $tags_array = explode(' ',$inputs['tags']);

            $inputs['tags'] = $tags_array;
        }

//        dd($request->items);
        if ($request->has('items')) {
            $inputs['details'] = $request->items;
        }

        if (Product::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Product $product)
    {
//        dd($product);
        $categoreis = Category::get();
        return view('Admin.product.edit', compact('product', 'categoreis'));
    }

    public function update(StoreProduct $request)
    {
        $product = Product::findOrFail($request->id);

        $inputs = $request->all();

        if($request->has('files')){
            foreach($request->file('files') as $file)
            {
                $inputs['images'][] = $this->saveImage($file,'assets/uploads/products','photo');
            }
        }
        if($request->has('pdf'))
        {
            $inputs['pdf'] = $this->saveImage($request->pdf, 'assets/uploads/pdf', 'pdf');
        }

//        dd($request->items);
        if ($request->has('items')) {
            $inputs['details'] = $request->items;
        }

        if ($request->has('tags') && $request->tags != null) {
            $tags_array = explode(' ',$inputs['tags']);

            $inputs['tags'] = $tags_array;
        }

        if ($product->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }

    public function destroy(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $product->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    } // end delete

    public function changeStock(Request $request)
    {
        $product = Product::find($request->id);
        ($product->stock == '0') ? $product->stock = '1' : $product->stock = '0';
        $product->save();
        return response()->json(['status' => 200]);
    }

}
