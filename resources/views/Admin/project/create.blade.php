<style>
    .taggs {
        width: 240px !important;
        min-height: 60px !important;
        height: 60px !important;
    }
</style>
<!-- Start Form -->
<form id="addForm" class="addForm" method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">
    @csrf
    @foreach ($projects as $project)
        <!-- This Input Hidden for send id to save cause i use ajax -->
        <input type="hidden" name="id" value="{{ $project->id ?? '' }}">
    @endforeach
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Title_Ar</label>
                <input type="text" name="title_ar" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Service</label>
                <input type="text" name="service_id" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Client</label>
                <input type="text" name="client" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Title En</label>
                <input type="text" name="title_en" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Location</label>
                <input type="text" name="location" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Service</label>
                <select name="service_id" id="" class="form-control">
                    <option class="form-control" value="" selected>Select Service</option>
                    @foreach ($services as $service)
                        <option class="form-control" value="{{ $service->id }}">{{ $service->title_en }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Description Ar</label>
                <textarea name="desc_ar" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label class="control-label">Description En</label>
                <textarea name="desc_en" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="">Image :</label>
                <input type="file" name="image" class="dropify"
                    data-default-file="" />
                    <span class="form-text text-danger text-center"> Recomended : 2048 X 1365 Px <br> Extension : png, gif, jpeg,
                        jpg,webp</span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="addButton">create</button>
    </div>
</form>
<script>
    $('.dropify').dropify();
</script>
<!-- End Form -->
