@extends('Admin.layouts.master')

@section('content')
    <!-- Datatble CDN -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Start Row -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card" style="padding: 13px">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Product</h5>
                </div>
                <div class="table">
                    <table class="table table-responsive data-table YAJRA" id="dataTable" style=" width: 100% !important;">
                        <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <th>{{ $product->id }}</th>
                            <th>
                                <img src="{{ asset($product->images[0]) }}"
                                     style="width: 100px;
                                    border-radius: 30px;">
                            </th>
                            <th>{{ $product->title_en }}</th>
                            <th>{{ $product->Category->title_en }}</th>
                            <th>
                                <button type="button" class="btn btn-pill btn btn-warning mb-3" data-bs-toggle="modal"
                                        data-bs-target="#modal-default"><i class="fa fa-eye"></i></button>
                                </button>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Modal Show -->

            <div class="row">
                <div class="col-md-4">
                    <div class="modal fade bd-example-modal-lg" id="modal-default" tabindex="-1" role="dialog"
                         aria-labelledby="modal-default" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal- modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="modal-title-default">Show : {{ $product->title_en }}</h6>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Title_Ar</label>
                                                <input type="text" name="title_ar" value="{{ $product->title_ar }}" disabled
                                                       class="form-control" id="exampleFormControlInput1">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Sub Ar</label>
                                                <input type="text" name="sub_title_ar" value="{{ $product->title_ar }}" disabled
                                                       class="form-control" id="exampleFormControlInput1">
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Sku</label>
                                                <input type="text" name="sku" readonly value="{{ $product->sku }}" disabled
                                                       class="form-control" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Title En</label>
                                                <input type="text" name="title_en" value="{{ $product->title_ar }}" disabled
                                                       class="form-control" id="exampleFormControlInput1">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Sub En</label>
                                                <input type="text" name="sub_title_en" disabled
                                                       value="{{ $product->sub_title_en }}" class="form-control"
                                                       id="exampleFormControlInput1">
                                            </div>
                                        </div>



                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Category</label>
                                                <select name="category_id" class="form-control" disabled>
                                                    <option value="" disabled>Select Category</option>
                                                    @foreach ($categoreis as $category)
                                                        <option value="{{ $category->id }}" disabled
                                                                {{ $category->title_en == $product->category->title_en ? 'selected' : '' }}>
                                                            {{ $category->title_en }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Tag</label>
                                                <input type="text" name="tags" disabled
                                                       value="{{ implode(' ', $product->tags) }}" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Main Image</label>
                                                <img width="100" height="100" onclick="window.open(this.src)" src="{{ asset($product->images[0]) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Description Ar</label>
                                                <textarea name="desc_ar" disabled class="form-control" id="" cols="30" rows="10">{{ $product->desc_ar }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Description En</label>
                                                <textarea name="desc_en" disabled class="form-control" id="" cols="30" rows="10">{{ $product->desc_en }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-gradient-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->
@endsection
@section('js')
    @include('Admin.layouts.myAjaxHelper')
@stop
