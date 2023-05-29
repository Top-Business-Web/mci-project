<!-- Start Row -->
<form id="addForm" class="addForm" method="POST" action="{{ route('question.store') }}">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">question AR</label>
                <input type="text" name="title_ar" value="" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">question EN</label>
                <input type="text" name="title_en" value="" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Answer AR</label>
                <textarea class="form-control " name="desc_ar" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Answer EN</label>
                <textarea class="form-control " name="desc_en" id="exampleFormControlTextarea1" rows="3"></textarea>
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
    // Package Textarea
    CKEDITOR.replace('desc_ar');
    CKEDITOR.replace('desc_en');
</script>
