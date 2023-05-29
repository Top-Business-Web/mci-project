<!-- Start Form -->
<form id="addForm" class="addForm" method="POST" action="{{ route('service.store') }}">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Title_Ar</label>
                <input type="text" name="title_ar" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Title_En</label>
                <input type="text" name="title_en" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Description Ar</label>
                <textarea class="form-control" id="mytextarea" name="desc_ar" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Description En</label>
                <textarea class="form-control" id="mytextarea1" name="desc_en" id="exampleFormControlTextarea1" rows="3"></textarea>
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
     CKEDITOR.replace('desc_ar');
     CKEDITOR.replace('desc_en');
</script>
<!-- End Form -->
