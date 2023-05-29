@extends('Admin.layouts.master')

@section('content')
    <!-- Datatable CDN -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Start Form -->
    <form method="POST" id="updateForm" class="updateForm" action="{{ route('sliderUpdate') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $sliders->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image About Us :</label>
                                <input type="file" name="image_about" class="dropify"
                                    data-default-file="{{ asset($slider->image_about) }}" />
                                    <span class="form-text text-danger text-center"> Recomended : 2048 X 1200 to up Px <br> Extension : png, gif, jpeg,
                                        jpg,webp</span>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Service :</label>
                                <input type="file" name="image_services" class="dropify"
                                    data-default-file="{{ asset($slider->image_services) }}" />
                                    <span class="form-text text-danger text-center"> Recomended : 2048 X 1200 to up Px <br> Extension : png, gif, jpeg,
                                        jpg,webp</span>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Project :</label>
                                <input type="file" name="image_project" class="dropify"
                                    data-default-file="{{ asset($slider->image_project) }}" />
                                    <span class="form-text text-danger text-center"> Recomended : 2048 X 1200 to up Px <br> Extension : png, gif, jpeg,
                                        jpg,webp</span>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Image Product :</label>
                                <input type="file" name="image_product" class="dropify"
                                    data-default-file="{{ asset($slider->image_product) }}" />
                                    <span class="form-text text-danger text-center"> Recomended : 2048 X 1200 to up Px <br> Extension : png, gif, jpeg,
                                        jpg,webp</span>
                            </div>

                        </div>
{{--                        <div class="col-md-4">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="">Image Faqs :</label>--}}
{{--                                <input type="file" name="image_faqs" class="dropify"--}}
{{--                                    data-default-file="{{ asset($slider->image_faqs) }}" />--}}
{{--                                    <span class="form-text text-danger text-center"> Recomended : 2048 X 1200 to up Px <br> Extension : png, gif, jpeg,--}}
{{--                                        jpg,webp</span>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                    </div>
                    <div>
                        <button type="button" class="btn bg-gradient-primary" id="updateButton">update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Form -->
@endsection
@section('js')
    @include('Admin.layouts.myAjaxHelper')

    <script>
        // Package Textarea
        $('.dropify').dropify();

        function editScript() {
            $(updateButton).on('click', function(e) {
                e.preventDefault();
                var formData = new FormData(document.getElementById("updateForm"));
                var url = $('#updateForm').attr('action');
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    beforeSend: function() {
                        $('#updateButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                            ' ></span> <span style="margin-left: 4px;">انتظر ..</span>').attr(
                            'disabled', true);
                    },
                    success: function(data) {
                        $('#updateButton').html(`تعديل`).attr('disabled', false);
                        if (data.status == 200) {
                            $('#dataTable').DataTable().ajax.reload();
                            toastr.success('Updatde Successfully');
                        } else
                            toastr.error('Something Went Wrong ..');

                        $('#editOrCreate').modal('hide')
                    },
                    error: function(data) {
                        if (data.status === 500) {
                            toastr.error('Something Went Wrong ..');
                        } else if (data.status === 422) {
                            var errors = $.parseJSON(data.responseText);
                            $.each(errors, function(key, value) {
                                // alert(value);
                                if ($.isPlainObject(value)) {
                                    $.each(value, function(key, value) {
                                        toastr.error('' + value);
                                        // alert(value);
                                    });
                                }
                            });
                        } else
                            toastr.error('Something Went Wrong ..');
                        $('#updateButton').html(`تعديل`).attr('disabled', false);
                    }, //end error method

                    cache: false,
                    contentType: false,
                    processData: false
                });
            });
        }
        editScript()
    </script>
@stop
