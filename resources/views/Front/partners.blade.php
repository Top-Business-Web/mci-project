@extends('Front.layouts.master')

<style>
    .project-title h4 {
        color: #EF4423;
        text-transform: uppercase;
    }
</style>

@section('content')

    <div class="partners pt-5 pb-5">
        <div class="container">
            <div class="row">
                @foreach($partners as $partner)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div>
                            <div class="project-panel mb-3" data-hover=""
                                 style="box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.07);">
                                <div class="project-panel-holder">
                                    <div class="project-img">
                                        <img src="{{ asset($partner->image) }}"
                                             style="height: 200px;">
                                    </div>
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4 class="text-center">{{ $partner->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
