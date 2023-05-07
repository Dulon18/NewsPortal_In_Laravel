@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12">
        <div class="bg-white tm-block">
            <div class="row">
                <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Post</h2>
                </div>
            </div>
            <div class="row mt-4 tm-edit-product-row">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <form action="{{ route('category.store') }}" method="POST" class="tm-edit-product-form">
                        @csrf
                        <div class="input-group mb-3">
                            <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Title
                                English Name
                            </label>
                            <input id="name" name="category_en" type="text"
                                class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 ">

                        </div>
                        <div class="input-group mb-3">
                            <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Title Bangla
                                Name
                            </label>
                            <input id="stock" name="category_bn" type="text"
                                class="form-control validate col-xl-12 col-lg-12 col-md-7 col-sm-7"><br>
                        </div>
                         <div class="input-group mb-3">
                            <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category
                            </label>
                            <select name="category_id"
                                class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7
                            @error('category') is-invalid @enderror"
                                id="category">
                                <option disabled selected>Select One</option>
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->category_en }} | {{ $c->category_bn }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label"> Sub Category
                            </label>
                            <select name="subcategory_id"
                                class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7
                            @error('category') is-invalid @enderror"
                                id="category">
                                <option disabled selected>Select One</option>
                                @foreach ($subcategories as $row)
                                    <option value="{{ $row->id }}">{{ $row->subcategory_en }} | {{ $row->subcategory_bn }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">District
                            </label>
                            <select name="district_id"
                                class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7
                            @error('district') is-invalid @enderror"
                                id="category">
                                <option disabled selected>Select One</option>
                                @foreach ($districts as $row)
                                    <option value="{{ $row->id }}">{{ $row->district_en }} | {{ $row->district_bn }}
                                    </option>
                                @endforeach
                            </select>
                            @error('district')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label"> Sub District
                            </label>
                            <select name="subdistrict_id"
                                class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7
                            @error('subdistrict') is-invalid @enderror"
                                id="category">
                                <option disabled selected>Select One</option>
                                @foreach ($subdistricts as $row)
                                    <option value="{{ $row->id }}">{{ $row->subdistrict_en }} | {{ $row->subdistrict_bn }}
                                    </option>
                                @endforeach
                            </select>
                            @error('district')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Tags
                                English Name
                            </label>
                            <input id="name" name="category_en" type="text"
                                class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 ">

                        </div>
                        <div class="input-group mb-3">
                            <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Tags Bangla
                                Name
                            </label>
                            <input id="stock" name="category_bn" type="text"
                                class="form-control validate col-xl-12 col-lg-12 col-md-7 col-sm-7"><br>
                        </div>

                        <div class="input-group mb-3">
                            <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                <button type="submit" class="btn btn-primary">Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
