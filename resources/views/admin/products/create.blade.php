@extends('admin.layout')
@section('title', 'Products')
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Form-->
                <form id="kt_ecommerce_add_product_form" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row" method="post" action="{{route('products.store')}}">
                    <!--begin::Aside column-->
                    @csrf

                    <div id="hidden_files">

                    </div>
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <!--begin::Thumbnail settings-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Thumbnail</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body text-center pt-0">
                                <!--begin::Image input-->
                                <!--begin::Image input placeholder-->
                                <style>.image-input-placeholder { background-image: url('/back/assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('/back/assets/media/svg/files/blank-image-dark.svg'); }</style>
                                <!--end::Image input placeholder-->
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <div class="image-input-wrapper w-150px h-150px"></div>

                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="cover" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
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

                                <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                            </div>
                        </div>

                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Status</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                                </div>
                                <!--begin::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Select2-->
                                <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                    <option></option>

                                    <option value="1" @if(old('status') == 1 or old('status') == null) selected @endif>Published</option>
                                    <option value="2" @if(old('status') == 2) selected @endif>Inactive</option>
                                    <option value="3" @if(old('status') == 3) selected @endif>Draft</option>

                                </select>
                                <!--end::Select2-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product status.</div>
                                <!--end::Description-->
                                <!--begin::Datepicker-->
                                <div class="d-none mt-10">
                                    <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
                                    <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
                                </div>
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Status-->
                        <!--begin::Category & tags-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Product Details</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <label class="form-label">Category</label>
                                <select class="form-select mb-2" name="category_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($categories as $item)
                                    <option value="{{$item->id}}" @if(old('category_id') == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="card-body pt-0">
                                <label class="form-label">Material</label>
                                <select class="form-select mb-2" name="material_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($materials as $item)
                                        <option value="{{$item->id}}" @if(old('material_id') == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body pt-0">
                                <label class="form-label">Color</label>
                                <select class="form-select mb-2" name="color_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($colors as $item)
                                        <option value="{{$item->id}}" @if(old('color_id') == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body pt-0">
                                <label class="form-label">Occasion</label>
                                <select class="form-select mb-2" name="occasion_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($occasions as $item)
                                        <option value="{{$item->id}}" @if(old('occasion_id') == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="card-body pt-0">
                                <label class="form-label">Designer</label>
                                <select class="form-select mb-2" name="designer_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($designers as $item)
                                        <option value="{{$item->id}}" @if(old('designer_id') == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="card-body pt-0">
                                <label class="form-label">Size</label>
                                <input type="number" step="0.001" name="size" class="form-control mb-2" placeholder="Product size" value="{{old('size')}}" />

                            </div>

                            <!--end::Card body-->
                        </div>
                        <!--end::Category & tags-->

                    </div>
                    <!--end::Aside column-->
                    <!--begin::Main column-->
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <!--begin:::Tabs-->

                        <!--end:::Tabs-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <!--begin::General options-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>General</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Product Name</label>
                                                <input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="" />
                                            </div>
                                            <div>
                                                <label class="form-label">Description</label>
                                                <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"></div>
                                            </div>
                                        </div>


                                    </div>
                                    <!--end::General options-->
                                    <!--begin::Media-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Media</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-2">
                                                <!--begin::Dropzone-->
                                                <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                    <!--begin::Message-->
                                                    <div class="dz-message needsclick">
                                                        <!--begin::Icon-->
                                                        <i class="ki-duotone ki-file-up text-primary fs-3x">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <!--end::Icon-->
                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                            <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <!--end::Dropzone-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set the product media gallery.</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Media-->
                                    <!--begin::Pricing-->
                                    <div class="card card-flush py-4">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Pricing</h2>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0">
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Market Price</label>
                                                <input type="number" step="0.01" name="market_price" class="form-control mb-2" placeholder="Market price" value="{{old('market_price')}}" />
                                                <div class="text-muted fs-7">Set the product market price.</div>
                                            </div>
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Daily Price</label>
                                                <input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Daily price" value="{{old('price')}}" />
                                                <div class="text-muted fs-7">Set the product daily price.</div>
                                            </div>
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Sale Price</label>
                                                <input type="number" step="0.01" name="sale_price" class="form-control mb-2" placeholder="Sale price" value="{{old('sale_price')}}" />
                                                <div class="text-muted fs-7">Set the product sale price.</div>
                                            </div>



                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                                <!--begin::Label-->
                                                <label class="form-label">Set Discount Percentage</label>
                                                <!--end::Label-->
                                                <!--begin::Slider-->
                                                <div class="d-flex flex-column text-center mb-5">
                                                    <div class="d-flex align-items-start justify-content-center mb-7">
                                                        <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                                        <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                    </div>
                                                    <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                                </div>
                                                <!--end::Slider-->
                                                <!--begin::Description-->
                                                <div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                                <!--begin::Label-->
                                                <label class="form-label">Fixed Discounted Price</label>
                                                <!--end::Label-->


                                            </div>
                                            <!--end::Input group-->

                                        </div>
                                        <!--end::Card header-->
                                    </div>
                                    <!--end::Pricing-->
                                </div>
                            </div>

                        </div>
                        <!--end::Tab content-->
                        <div class="d-flex justify-content-end">
                            <a href="{{route('products.index')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                            </button>
                        </div>
                    </div>
                    <!--end::Main column-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>

@endsection

@push('js')
    <script src="/back/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/back/assets/js/scripts.bundle.js"></script>

    <script src="/back/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="/back/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
    <script src="/back/assets/js/custom/apps/ecommerce/catalog/save-product.js?v={{time()}}"></script>

@endpush