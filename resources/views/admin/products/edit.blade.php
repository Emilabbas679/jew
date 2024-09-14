@extends('admin.layout')
@section('title', $product->title)
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                @include('admin.flash')
                <form id="kt_ecommerce_add_product_form"  onsubmit=" getAbouts()" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row" method="post" action="{{route('products.update', $product->id)}}">
                    @csrf
                    <div id="hidden_files">
                        @foreach($files as $file)
                            <input type='hidden' class='upload_files' name='files[]' data-id='{{$file['filename']}}' value='{{$file['file_url']}}'>
                        @endforeach
                    </div>
                    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Thumbnail</h2>
                                </div>
                            </div>
                            <div class="card-body text-center pt-0">
                                <style>.image-input-placeholder { background-image: url('/storage/{{$product->cover}}'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('/back/assets/media/svg/files/blank-image-dark.svg'); }</style>
                                <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                    <div class="image-input-wrapper w-150px h-150px"></div>

                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <input type="file" name="cover" accept=".png, .jpg, .jpeg" />
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
                                <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                            </div>
                        </div>

                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Status</h2>
                                </div>
                                <div class="card-toolbar">
                                    <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <select class="form-select mb-2" name="status" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                    <option></option>
                                    <option value="1" @if($product->status == 1) selected @endif>Published</option>
                                    <option value="2" @if($product->status == 2) selected @endif>Inactive</option>
                                    <option value="3" @if($product->status == 3) selected @endif>Draft</option>
                                </select>
                                <div class="text-muted fs-7">Set the product status.</div>
                                <div class="d-none mt-10">
                                    <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
                                    <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
                                </div>
                            </div>
                        </div>
                        <div class="card card-flush py-4">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Product Details</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <label class="form-label">Category</label>
                                <select class="form-select mb-2" name="category_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($categories as $item)
                                        <option value="{{$item->id}}" @if($product->category_id == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="card-body pt-0">
                                <label class="form-label">Material</label>
                                <select class="form-select mb-2" name="material_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($materials as $item)
                                        <option value="{{$item->id}}" @if($product->material_id == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body pt-0">
                                <label class="form-label">Color</label>
                                <select class="form-select mb-2" name="color_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($colors as $item)
                                        <option value="{{$item->id}}" @if($product->color_id == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-body pt-0">
                                <label class="form-label">Occasion</label>
                                <select class="form-select mb-2" name="occasion_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($occasions as $item)
                                        <option value="{{$item->id}}" @if($product->occasion_id == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="card-body pt-0">
                                <label class="form-label">Designer</label>
                                <select class="form-select mb-2" name="designer_id" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" >
                                    <option></option>
                                    @foreach($designers as $item)
                                        <option value="{{$item->id}}" @if($product->designer_id == $item->id) selected @endif>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="card-body pt-0">
                                <label class="form-label">Size</label>
                                <input type="number" step="0.001" name="size" class="form-control mb-2" placeholder="Product size" value="{{old('size',$product->size)}}" />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>General</h2>
                                            </div>
                                        </div>
                                        @foreach(config('app.langs') as $lang)
                                            <div class="card-body pt-0">
                                                <div class="mb-10 fv-row">
                                                    <label class="required form-label">Product Name {{$lang['Name']}}</label>
                                                    <input type="text" name="title[{{$lang['code']}}]" class="form-control mb-2" placeholder="Product name {{$lang['code']}}" value="{{old('title'.$lang['code'], $product->getTranslation('title', $lang['code']))}}" />
                                                </div>
                                                <div>
                                                    <label class="form-label">Description {{$lang['Name']}}</label>
                                                    <div id="kt_ecommerce_add_product_description_{{$lang['code']}}" name="about[{{$lang['code']}}]" class="min-h-200px mb-2 about_div">{!! old('about'.$lang['code'], $product->getTranslation('about', $lang['code'])) !!}</div>
                                                </div>
                                            </div>
                                            <input name="about[{{$lang['code']}}]" id="about_{{$lang['code']}}" type="hidden" value="{{old('about'.$lang['code'], $product->getTranslation('about', $lang['code']))}}">
                                        @endforeach
                                    </div>
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Media</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="fv-row mb-2">
                                                <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                    <div class="dz-message needsclick">
                                                        <i class="ki-duotone ki-file-up text-primary fs-3x">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        <div class="ms-4">
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                            <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-muted fs-7">Set the product media gallery.</div>
                                        </div>
                                    </div>
                                    <div class="card card-flush py-4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2>Pricing</h2>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Market Price</label>
                                                <input type="number" step="0.01" name="market_price" class="form-control mb-2" placeholder="Market price" value="{{old('market_price', $product->market_price)}}" />
                                                <div class="text-muted fs-7">Set the product market price.</div>
                                            </div>
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Daily Price</label>
                                                <input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Daily price" value="{{old('price',  $product->price)}}" />
                                                <div class="text-muted fs-7">Set the product daily price.</div>
                                            </div>
                                            <div class="mb-10 fv-row">
                                                <label class="required form-label">Sale Price</label>
                                                <input type="number" step="0.01" name="sale_price" class="form-control mb-2" placeholder="Sale price" value="{{old('sale_price',  $product->sale_price)}}" />
                                                <div class="text-muted fs-7">Set the product sale price.</div>
                                            </div>

                                            <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                                <label class="form-label">Set Discount Percentage</label>
                                                <div class="d-flex flex-column text-center mb-5">
                                                    <div class="d-flex align-items-start justify-content-center mb-7">
                                                        <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                                        <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                    </div>
                                                    <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                                </div>
                                                <div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
                                            </div>
                                            <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                                <label class="form-label">Fixed Discounted Price</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{route('products.index')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
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

    <script>
        var existingFiles = @json($files);

    </script>
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

    <script>


    </script>

@endpush