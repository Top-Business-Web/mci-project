<!-- Start Form -->
<form id="updateForm" class="updateForm" method="POST" action="{{ route('service.update', $service->id) }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $service->id }}">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Title Ar</label>
                <input type="text" name="title_ar" value="{{ $service->title_ar }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Title En</label>
                <input type="text" name="title_en" value="{{ $service->title_en }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Desciption Ar</label>
                <textarea class="form-control" id="mytextarea1" name="desc_ar" id="exampleFormControlTextarea1" rows="3">{{ $service->desc_ar }}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Desciption EN</label>
                <textarea class="form-control" id="mytextarea1" name="desc_en" id="exampleFormControlTextarea1" rows="3">{{ $service->desc_en }}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>
    </div>
</form>
<script>
    CKEDITOR.replace('desc_ar');
    CKEDITOR.replace('desc_en');
</script>
<!-- End Form -->
