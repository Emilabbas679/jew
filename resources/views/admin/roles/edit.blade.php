@extends('admin.layout')
@section('title', 'Edit role')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <h2 class="fw-bold">Add a Role</h2>
            <form id="kt_modal_add_role_form" class="form" action="{{route('roles.update', $role->id)}}" method="post">
                @csrf
                @include('admin.flash')
                <div class="d-flex flex-column me-n7 pe-7" >
                    <div class="fv-row mb-10">
                        <label class="fs-5 fw-bold form-label mb-2">
                            <span class="required">Role name</span>
                        </label>
                        <input class="form-control form-control-solid" placeholder="Enter a role name" name="name" value="{{old('name') ?? $role->name}}" />
                    </div>
                    <div class="fv-row">
                        <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                        <div class="row">
                            @foreach($permissions as $item)
                                <div class="col-md-3 col-sm-6 col-lg-3" style="margin: 5px">
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input @if(in_array($item->id, $selected_permissions)) checked @endif class="form-check-input" type="checkbox" value="{{$item->name}}" name="permissions[{{$item->id}}]" />
                                        <span class="form-check-label">{{$item->name}}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="text-center pt-15">
                    <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                        <span class="indicator-label">Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
