<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $contacts = Contact::select('*');
            return DataTables::of($contacts)
                ->addColumn('action', function ($contacts) {
                    return '
                            <button type="button" data-id="' .  $contacts->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-eye"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' .  $contacts->id . '" data-title="' .  $contacts->name . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('services', function ($contacts){
                    return $contacts->service->title_en;
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin.contact.index');
        }
    }

    public function edit(Contact $contact)
    {
        return view('Admin.contact.edit', compact('contact'));
    }

    public function destroy(Request $request)
    {
        $contacts = Contact::where('id', $request->id)->first();
        $contacts->delete();
        return response(['message' => 'Deleted Successfully', 'status' => 200], 200);
    }
}
