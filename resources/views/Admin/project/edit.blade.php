<!-- Start Form -->
<form id="updateForm" class="updateForm" method="POST" action="{{ route('project.update', $project->id) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- This Input Hidden for send id to save cause i use ajax -->
    <input type="hidden" name="id" value="{{ $project->id }}">
    <!-- Satrt Row -->
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Title_Ar</label>
                <input type="text" name="title_ar" value="{{ $project->title_ar }}" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Service</label>
                <input type="text" name="service_id" value="{{ $project->service_id }}" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Client</label>
                <input type="text" name="client" value="{{ $project->client }}" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Title En</label>
                <input type="text" name="title_en" value="{{ $project->title_en }}" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Location</label>
                <input type="text" name="location" value="{{ $project->location }}" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Service</label>
                <select name="service_id" id="" class="form-control">
                    <option class="form-control" value="{{ $project->service->id }}" selected>{{ $project->service->title_en }}</option>
                    {{-- @foreach ($services as $service) --}}
                        <option class="form-control" value="{{ $project->service->id }}">{{ $project->service->title_en }}</option>
                    {{-- @endforeach --}}
                </select>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Description Ar</label>
                <textarea name="desc_ar" class="form-control" id="" cols="30" rows="10">{{ $project->desc_ar }}</textarea>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Description En</label>
                <textarea name="desc_en" class="form-control" id="" cols="30" rows="10">{{ $project->desc_ar }}</textarea>
            </div>
        </div>


        <div class="col-md-4">
            <div class="form-group">
                <label for="">Image :</label>
                <input type="file" name="image" class="dropify"
                    data-default-file="{{ asset($project->image) }}" />
                    <span class="form-text text-danger text-center"> Recomended : 2048 X 1365 Px <br> Extension : png, gif, jpeg,
                        jpg,webp</span>
            </div>
        </div>



    </div>
    <!-- End Row -->
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>

    </div>
</form>
<!-- End Form -->
<script>
    $('.dropify').dropify();
    // TAGS Input
    $('#tags_input').tagsInput({});
</script>
