<!-- Start Form -->
<form id="updateForm" class="updateForm" method="POST" action="{{ route('question.update', $question->id) }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $question->id }}">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">question AR</label>
                <input type="text" name="title_ar" value="{{ $question->title_ar }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">question EN</label>
                <input type="text" name="title_en" value="{{ $question->title_en }}" class="form-control"
                    id="exampleFormControlInput1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Answer AR</label>
                <textarea class="form-control mytextarea" name="desc_ar" rows="3">{{ $question->desc_ar }}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Answer EN</label>
                <textarea class="form-control mytextarea" name="desc_en" rows="3">{{ $question->desc_en }}</textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>
    </div>
</form>
<!--End Form  -->
<script>
    // Package Textarea
    CKEDITOR.replace('desc_ar');
    CKEDITOR.replace('desc_en');
</script>
