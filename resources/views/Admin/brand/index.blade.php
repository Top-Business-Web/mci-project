@extends('Admin.layouts.master')

@section('content')
    <!-- Datatable CDN -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Start Row -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card" style="padding: 13px">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Brands List</h5>
                    <div class="add-btn">

                        <button type="button" class="btn btn-primary addBtn">Add</button>
                    </div>
                </div>
                <div class="table">
                    <table class="table table-responsive data-table YAJRA" id="dataTable" style=" width: 100% !important;">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!--   create modal   -->
            <div class="modal fade" id="editOrCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Brands</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="modal-body">

                        </div>
                    </div>
                </div>
            </div>
            <!--   end create modal   -->

            <!--  delete Modal -->
            <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input id="delete_id" name="id" type="hidden">
                            <p>Do You Want to Delete <span id="title" class="text-danger"></span>؟</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-dismiss="modal"
                                id="dismiss_delete_modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary dismiss_delete_modal"
                                id="delete_btn">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Row -->
@endsection
@section('js')
    @include('Admin.layouts.myAjaxHelper')

    <script>
        var columns = [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'image',
                name: 'image'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
        showData('{{ route('brands.index') }}', columns);
        //    add Model
        showAddModal('{{ route('brands.create') }}');
        addScript();
        // deleteModel
        deleteScript('{{ route('delete_brands') }}');

        showEditModal('{{ route('brands.edit', ':id') }}');
        editScript();
    </script>
@stop
