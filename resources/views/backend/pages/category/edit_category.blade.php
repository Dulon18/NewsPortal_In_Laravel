@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12">
        <div class="bg-white tm-block">
            <div class="row">
                <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Edit Category</h2>
                </div>
            </div>
            <div class="row mt-4 tm-edit-product-row">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <form action="{{ route('category.update', $category->id) }}" method="POST" class="tm-edit-product-form">
                        @method('put')
                        @csrf
                        <div class="input-group mb-3">
                            <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category
                                English Name
                            </label>
                            <input id="name" name="category_en" type="text" value="{{ $category->category_en }}"
                                class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7
                                 @error('category_en') is-invalid @enderror">
                            @error('category_en')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category Bangla
                                Name
                            </label>
                            <input id="stock" name="category_bn" type="text" value="{{ $category->category_bn }}"
                                class="form-control validate col-xl-12 col-lg-12 col-md-7 col-sm-7
                                @error('category_bn') is-invalid @enderror"><br>
                            @error('category_bn')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
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
