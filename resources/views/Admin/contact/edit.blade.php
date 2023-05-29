<!-- Start Form -->
<form>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label">Message : </label>
                <textarea class="form-control" name="message" disabled rows="3">{{ $contact->message }}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        </div>
</form>
<!-- End Form -->
