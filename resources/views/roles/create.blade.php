@extends('layouts.app')

@section('content')


<!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12 d-flex justify-content-end">
                    <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Roles & Permissions</a></li>
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
                    <a class="btn btn-primary btn-sm float-right" href="{{ route('roles.index') }}">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="POST" class="js-validation-material">
                      @csrf
                      <div class="row">
                          <div class="col-xs-12 col-sm-8 col-md-8">
                              <div class="form-group">
                                  <strong>Name <span class="required_sign">*</span></strong>
                                  <input type="text" name="name" placeholder="Name" class="form-control">
                              </div>
                          </div>
                          <div class="col-xs-12 col-sm-4 col-md-4">
                              <div class="form-group">
                                  <strong>Color Code <span class="required_sign">*</span></strong>
                                  <input type="text" name="color_code" placeholder="Color Code" class="form-control color-picker">
                                  <small>add color code without # tag</small>
                              </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Permission </strong>
                                  <div class="col-xs-12 col-sm-12 col-md-12">
                                  @foreach($permission as $value)
                                    <label for="checkbox">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }} {{ $value->name }}</label>
                                  @endforeach
                                  </div>
                              </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

<script>
$(function() {
   //form validation start
   customFormValidation({
        'name': {required:true,maxlength: 255 },
    },{
        'name': {required:'Please enter a name'},
    });
    //form validation end
});
</script>
@endsection
