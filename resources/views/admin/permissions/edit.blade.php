@extends('admin.layout')
@section('title', 'Edit permission')
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <h2 class="fw-bold">Edit Permission</h2>
                <form id="kt_modal_add_role_form" class="form" action="{{route('permissions.update', $permission->id)}}" method="post">
                    @csrf
                    @include('admin.flash')
                    <div class="d-flex flex-column me-n7 pe-7" >
                        <div class="fv-row mb-10">
                            <label class="fs-5 fw-bold form-label mb-2">
                                <span class="required">Permission name</span>
                            </label>
                            <input class="form-control form-control-solid" placeholder="Enter a permission name" name="name" value="{{old('name') ?? $permission->name}}" />
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
