@extends('Admin.layouts.master')

    @section('content')
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-7 position-relative z-index-2">
                    <div class="card card-plain mb-4">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <h2 class="font-weight-bolder mb-0">General Statistics</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-sm-6">
                            <div class="card  mb-4">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Products Count</p>
                                                <h5 class="font-weight-bolder mb-0">
                                                    {{ \App\Models\Product::count() }}
                                                    <span class="text-success text-sm font-weight-bolder">product</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="fa-solid fa-solar-panel"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Messages Count</p>
                                                <h5 class="font-weight-bolder mb-0">
                                                    {{ \App\Models\Contact::count() }}
                                                    <span class="text-success text-sm font-weight-bolder">Message</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 mt-sm-0 mt-4">
                            <div class="card  mb-4">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Projects Count</p>
                                                <h5 class="font-weight-bolder mb-0">
                                                    {{ \App\Models\Project::count() }}
                                                    <span class="text-success text-sm font-weight-bolder">Project</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="fa-solid fa-table-columns"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Quotes Count</p>
                                                <h5 class="font-weight-bolder mb-0">
                                                    {{ \App\Models\Quote::count() }}
                                                    <span class="text-success text-sm font-weight-bolder">Quote</span>
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @stop
