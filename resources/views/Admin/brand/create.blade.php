<!-- Start Form -->
<form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{ route('brands.store') }}">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror "
                    id="exampleFormControlInput1" placeholder="name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">image</label>
                <input type="file" name="image" class="dropify" data-default-file="" />
                   <span class="form-text text-danger text-center">  Recomended : 2048 x 2048 <br> Extension : png, gif, jpeg,
                    jpg,webp</span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="addButton">create</button>
    </div>
</form>
<!-- End Form -->
<script>
    // Package TextArea
    $('.dropify').dropify();
</script>
