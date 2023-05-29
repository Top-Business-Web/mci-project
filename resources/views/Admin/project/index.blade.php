@extends('Admin.layouts.master')

@section('content')
    <!-- Dtatable CDN -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Start Row -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card" style="padding: 13px">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Project List</h5>
                    <div class="add-btn">

                        <button type="button" class="btn btn-primary addBtn">Add</button>
                    </div>
                </div>
                <div class="table">
                    <table class="table table-responsive data-table YAJRA" id="dataTable" style=" width: 100% !important;">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Client</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- End header -->
            <!--   edit and create modal   -->
            <div class="modal fade bd-example-modal-lg" id="editOrCreate" tabindex="-1" role="dialog"
                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="modal-body">

                        </div>
                    </div>
                </div>
            </div>
            <!--   edit and create modal   -->
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
    <!-- End Row -->
@endsection
@section('js')
    @include('Admin.layouts.myAjaxHelper')

    <script>

        var columns = [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'image',
                name: 'image'
            },
            {
                data: 'title_en',
                name: 'title_en'
            },
            {
                data: 'client',
                name: 'client'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
        showData('{{ route('project.index') }}', columns);
         //     add Model
        showAddModal('{{ route('project.create') }}');
        addScript();
        // // deleteModel
        destroyScript('{{ route('project.destroy', ':id') }}');
        // Edit Modal
        showEditModal('{{ route('project.edit', ':id') }}');
        editScript();
    </script>
@stop
