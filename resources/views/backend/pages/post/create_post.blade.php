@extends('backend.layouts.main')
@section('links')
    <style>
        .custom-file-input {
            width: 50%;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Post</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="POST" class="tm-edit-product-form">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title English Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="title_en" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Bangla Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="title_bn" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">HeadLine</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="headline" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags English Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="tags_en" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags Bangla Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="tags_bn" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-3">Image</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" name="image" class="form-control" id="customFile">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="cat_id" class="form-control selectric">
                                    <option disabled selected>Select One</option>
                                    @foreach ($categories as $c)
                                        <option value="{{ $c->id }}">{{ $c->category_en }} | {{ $c->category_bn }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Sub Category</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="subcat_id" class="form-control selectric">
                                    <option disabled selected>Select One</option>
                                    @foreach ($subcategories as $row)
                                        <option value="{{ $row->id }}">{{ $row->subcategory_en }} |
                                            {{ $row->subcategory_bn }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">District</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="dist_id" class="form-control selectric">
                                    <option disabled selected>Select One</option>
                                    @foreach ($districts as $row)
                                        <option value="{{ $row->id }}">{{ $row->district_en }} |
                                            {{ $row->district_bn }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> Sub District</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="subdist_id" class="form-control selectric">
                                    <option disabled selected>Select One</option>
                                    @foreach ($subdistricts as $row)
                                        <option value="{{ $row->id }}">{{ $row->subdistrict_en }} |
                                            {{ $row->subdistrict_bn }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image" id="image-upload">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">English Details</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="details_en" class="summernote"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bangla Details</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="details_bn" class="summernote"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Create Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
