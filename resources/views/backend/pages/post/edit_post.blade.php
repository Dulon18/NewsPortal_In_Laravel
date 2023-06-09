@extends('backend.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Post</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('post.update', $post->id) }}" method="POST" class="tm-edit-product-form"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title English Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="title_en" class="form-control" value="{{ $post->title_en }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Bangla Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="title_bn" class="form-control" value="{{ $post->title_bn }}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags English Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="tags_en" value="{{ $post->tags_en }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags Bangla Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" name="tags_bn" value="{{ $post->tags_bn }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-4 col-lg-3">Image</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" name="image" class="form-control" id="customFile">
                                <img style="border-radius: 4px;" width="100px;"
                                    src="{{url('public/postImages/'.$post->image)}}" alt="Not Found..">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                            <div class="col-sm-12 col-md-7">
                                <select name="cat_id" class="form-control selectric">
                                    <option disabled selected>Select One</option>
                                    @foreach ($categories as $row)
                                        <option value="{{ $row->id }}" <?php if ($row->id == $post->cat_id) {
                                            echo 'selected';
                                        } ?>>{{ $row->category_en }} |
                                            {{ $row->category_bn }}
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
                                        <option value="{{ $row->id }}" <?php if ($row->id == $post->subcat_id) {
                                            echo 'selected';
                                        } ?>>{{ $row->subcategory_en }}
                                            |
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
                                        <option value="{{ $row->id }}"<?php if ($row->id == $post->dist_id) {
                                            echo 'selected';
                                        } ?>>{{ $row->district_en }} |
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
                                        <option value="{{ $row->id }}"<?php if ($row->id == $post->subdist_id) {
                                            echo 'selected';
                                        } ?>>{{ $row->subdistrict_en }}
                                            |
                                            {{ $row->subdistrict_bn }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">English Details</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="details_en" class="summernote">{{ $post->details_en }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Bangla Details</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea name="details_bn" class="summernote">{{ $post->details_bn }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Extra option</label>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" name="headline" type="checkbox" id="inlineCheckbox1"
                                    value="1" <?php if ($post->headline == 1) {
                                        echo 'checked';
                                    } ?>>
                                <label class="form-check-label" for="inlineCheckbox1">Headline</label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" name="bigthumnail" type="checkbox" id="inlineCheckbox1"
                                    value="2" <?php if ($post->bigthumnail == 2) {
                                        echo 'checked';
                                    } ?>>
                                <label class="form-check-label" for="inlineCheckbox1">General Big Thumbnail</label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" name="first_section_bigthumnail" type="checkbox"
                                    id="inlineCheckbox1" value="3" <?php if ($post->first_section_bigthumnail == 3) {
                                        echo 'checked';
                                    } ?>>
                                <label class="form-check-label" for="inlineCheckbox1">First Section Big Thumbnail</label>
                            </div>
                            <div class="form-check form-check-inline ">
                                <input class="form-check-input" name="first_section" type="checkbox"
                                    id="inlineCheckbox1" value="4" <?php if ($post->first_section == 4) {
                                        echo 'checked';
                                    } ?>>
                                <label class="form-check-label" for="inlineCheckbox1">First Section</label>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7 text-center mt-5">
                                <button type="submit" class="btn btn-primary">Edit Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
