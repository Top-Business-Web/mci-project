<form  id="updateForm" class="updateForm" method="POST" action="{{ route('category.update',$category->id) }}" >
    @csrf
   @method('PUT')
        <input type="hidden" name="id" value="{{ $category->id }}">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Title_Ar</label>
                    <input type="text" name="title_ar" value="{{ $category->title_ar }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Title_En</label>
                    <input type="text"  name="title_en" value="{{ $category->title_en }}" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary" id="updateButton" >update</button>
        </div>
    </form>

