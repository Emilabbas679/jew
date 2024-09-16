@extends('admin.layout')
@section('title', 'Create Blog')
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">


                @include('admin.flash')

                <form enctype="multipart/form-data" onsubmit="getAbouts()" id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="apps/ecommerce/catalog/categories.html" method="POST" action="{{route('blogs.store')}}">
                    @csrf
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Image</h2>
                                </div>
                            </div>

                            <div class="card-body text-center pt-0">
                                <style>.image-input-placeholder { background-image: url('/back/assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <div class="image-input-wrapper w-150px h-150px"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                </div>
                                <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                            </div>
                        </div>

                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Status</h2>
                                </div>
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <!--begin::Select2-->
                                <select name="status" class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                                    <option></option>
                                    <option value="1" @if(old('status') == 1 or old('status') == null) selected @endif>Published</option>
                                    <option value="2" @if(old('status') == 2) selected @endif>Unpublished</option>
                                </select>
                                <div class="text-muted fs-7">Set the category status.</div>
                                <div class="d-none mt-10">
                                    <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select publishing date and time</label>
                                    <input class="form-control" id="kt_ecommerce_add_category_status_datepicker" placeholder="Pick date & time" />
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>

                            <div class="card-body pt-0">



                                @foreach(config('app.langs') as $lang)
                                    <div class="mb-10 fv-row">
                                        <label class="required form-label">Blog Title {{$lang['Name']}}</label>
                                        <input type="text" name="title[{{$lang['code']}}]" class="form-control mb-2" placeholder="Blog Title" value="{{old('title.'.$lang['code'])}}" />
                                    </div>
                                    <div>
                                        <label class="form-label">Description {{$lang['Name']}}</label>
                                        <div id="kt_ecommerce_add_product_description_{{$lang['code']}}" name="description[{{$lang['code']}}]" class="min-h-200px mb-2 about_div">{{old('description'.$lang['code'])}}</div>
                                    </div>
                                    <input name="description[{{$lang['code']}}]" id="about_{{$lang['code']}}" type="hidden" value="{{old('about.'.$lang['code'])}}">
                                @endforeach
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{route('categories.index')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
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

@push('js')
    <script src="/back/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/back/assets/js/scripts.bundle.js"></script>
    <script src="/back/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="/back/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
    <script src="/back/assets/js/custom/apps/ecommerce/catalog/save-product.js?v={{time()}}"></script>
    <script>
        function getAbouts(){
            var aboutDivs = document.querySelectorAll('div.about_div');
            aboutDivs.forEach(function(div) {
                var nameAttr = div.getAttribute('name');
                var editorDiv = div.querySelector('div.ql-editor');
                if (editorDiv) {
                    var content = editorDiv.innerHTML;
                    $("input[name='"+nameAttr+"']").val(content);
                }
            });
        }
    </script>

@endpush
