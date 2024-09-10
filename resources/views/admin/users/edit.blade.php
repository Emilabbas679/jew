@extends('admin.layout')
@section('title', $user->name)
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                @include('admin.flash')
                <form enctype="multipart/form-data" id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="apps/ecommerce/catalog/categories.html" method="POST" action="{{route('users.update', $user->id)}}">
                    @csrf
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Name</label>
                                    <input type="text" name="name" class="form-control mb-2" placeholder="Name" value="{{old('name', $user->name)}}" />
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Surname</label>
                                    <input type="text" name="surname" class="form-control mb-2" placeholder="Surname" value="{{old('surname', $user->surname)}}" />
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" value="{{old('phone', $user->phone)}}" />
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Email</label>
                                    <input type="text" name="email" class="form-control mb-2" placeholder="Email" value="{{old('email', $user->email)}}" />
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Password</label>
                                    <input type="password" name="password" class="form-control mb-2" placeholder="Password" value="" />
                                </div>
                                <div class="mb-10 fv-row">
                                    <label class="required form-label">Roles</label>
                                    <select name="roles[]" class="form-select mb-2" multiple data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                                        <option></option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->name }}" {{ in_array($role->id, $userRoles) ? 'selected' : '' }}>{{ $role->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('users.index')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection