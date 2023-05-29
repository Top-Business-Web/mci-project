<form id="addForm" class="addForm" method="POST" action="{{ route('category.store') }}" >
    @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Title_Ar</label>
                    <input type="text"  name="title_ar" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label">Title_En</label>
                    <input type="text"  name="title_en" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary" id="addButton">create</button>
        </div>
    </form>

