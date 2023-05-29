<!-- Start Form -->
<form id="updateForm" class="updateForm" method="POST" enctype="multipart/form-data"
    action="{{ route('brands.update', $brand->id) }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $brand->id }}">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Name</label>
                <input type="text" name="name" value="{{ $brand->name }}" class="form-control"
                    id="exampleFormControlInput1" placeholder="name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">image</label>
                <input type="file" name="image" class="dropify" data-default-file="{{ asset($brand->image) }}" />
                <span class="form-text text-danger text-center">  Recomended : 2048 x 2048 <br> Extension : png, gif, jpeg,
                    jpg,webp</span>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>
    </div>
</form>
<!-- End Form -->
<script>
    // Package TextArea
    $('.dropify').dropify();
</script>
