@extends('Admin.layouts.master')

@section('content')
    <!-- DataTable CDN -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Start Form -->
    <form method="POST" id="updateForm" class="updateForm" action="{{ route('settings.update', $settings->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $settings->id }}">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card" style="padding: 13px">
                    <!-- Start Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Logo :</label>
                                <input type="file" name="logo" class="dropify"
                                    data-default-file="{{ asset($settings->logo) }}" />
                                    <span class="form-text text-danger text-center"> Recomended : 1720 X 1150 Px <br> Extension : png</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Banners Home :</label>
                                <input type="file" name="files[]" multiple class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Title Ar :</label>
                                <input type="text" name="title_ar" value="{{ $settings->title_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Start Row -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Title En :</label>
                                <input class="form-control" name="title_en" value="{{ $settings->title_en }}"
                                    type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Description ar :</label>
                                <input class="form-control" name="desc_ar" value="{{ $settings->desc_ar }}"
                                       type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Description En :</label>
                                <input class="form-control" name="desc_en" value="{{ $settings->desc_en }}"
                                       type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Year Of Experince :</label>
                                <input class="form-control" name="year_of_experince"
                                    value="{{ $settings->year_of_experince }}" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Phone :</label>
                                <input class="form-control" name="phone" value="{{ $settings->phone }}" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email :</label>
                                <input type="text" name="email" value="{{ $settings->email }}" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address Ar :</label>
                                <input type="text" name="address_ar" value="{{ $settings->address_ar }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Address En :</label>
                                <input type="text" name="address_en" value="{{ $settings->address_en }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">location</label>
                                <textarea type="text" name="location" rows="4"
                                       class="form-control">{{ $settings->location }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">facebook :</label>
                                <input type="url" name="facebook" value="{{ $settings->facebook }}"
                                    class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">linked in :</label>
                                <input type="url" name="linked_in" value="{{ $settings->linked_in }}"
                                       class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">whatsapp :</label>
                                <input type="text" name="whatsapp" value="{{ $settings->whatsapp }}"
                                       class="form-control" placeholder="201XXXXXXXXX"/>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Terms Conditions :</label>
                                <input type="text" name="terms_conditions" value="{{ $settings->terms_conditions }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Shipping Policy :</label>
                                <input type="text" name="shipping_policy" value="{{ $settings->shipping_policy }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Returns :</label>
                                <input type="text" name="returns" value="{{ $settings->returns }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Work Date :</label>
                                <input type="text" name="work_date" value="{{ $settings->work_date }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                    <div>
                        <button type="submit" class="btn bg-gradient-primary" id="updateButton">update</button>
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

        editScript();
    </script>
@stop
