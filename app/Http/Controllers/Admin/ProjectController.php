<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\StoreProject;
use App\Models\Service;
use Yajra\DataTables\Facades\DataTables;

class ProjectController extends Controller
{
    use PhotoTrait;
    public function index(Request $request)
    {
        if($request->ajax()) {
            $projects = Project::select('*');
            return DataTables::of( $projects)
                ->addColumn('action', function ( $projects) {
                    return '
                            <button type="button" data-id="' .  $projects->id . '" class="btn btn-pill btn-warning editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' .  $projects->id . '" data-title="' .  $projects->title_en . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->editColumn('image', function ($projects){
                    return '<img style="width:60px;border-radius:30px" onclick="window.open(this.src)" src="'.asset($projects->image).'"/>';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin.project.index');
        }
    }

    public function create()
    {
        $projects = Project::get();
        $services = Service::get();
        return view('Admin.project.create', compact('projects', 'services'));
    }

    public function store(StoreProject $request)
    {
        $inputs = $request->all();

        if ($request->has('image')) {
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/projects', 'photo');
        }


        if (Project::create($inputs)) {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function edit(Project $project)
    {
        return view('Admin.project.edit', compact('project'));
    }


    public function update(StoreProject $request)
    {
        $project = Project::findOrFail($request->id);

        $inputs = $request->all();

        if($request->has('image'))
        {
            $inputs['image'] = $this->saveImage($request->image, 'assets/uploads/projects', 'photo');
        }

        if($project->update($inputs))
        {
            return response()->json(['status' => 200]);
        } else {
            return response()->json(['status' => 405]);
        }
    }

    public function destroy(Request $request)
    {
        $project = Project::where('id', $request->id)->first();
        $project->delete();
        return response(['message' => 'تم الحذف بنجاح', 'status' => 200], 200);
    }
}
