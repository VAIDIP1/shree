@extends('layouts.app')

@section('content')

<!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12 d-flex justify-content-end">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">item-active</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary btn-sm float-right" href="#"><em class="fa fa-plus"></em> Add</a>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->


@endsection