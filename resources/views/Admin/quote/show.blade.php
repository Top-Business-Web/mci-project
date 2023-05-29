<!-- Start Form -->
<form id="updateForm" class="updateForm" method="POST">
    @csrf
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card" style="padding: 13px">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Name :</label>
                            <h5>{{ $quote->first_name }}</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NickName :</label>
                            <h5>{{ $quote->last_name }}</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Phone :</label>
                            <h5>{{ $quote->phone }}</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email :</label>
                            <a href="mailto:{{ $quote->email }}">
                                <h5 class="text-warning">{{ $quote->email }}</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Address :</label>
                            <h5>{{ $quote->address }}<h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Product :</label>
                            <a href="{{ route('getOneProduct', $quote->product->id) }}">
                                <h5 class="btn btn-sm btn-success">{{ $quote->product->title_en }}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</form>
<!-- End Form -->
