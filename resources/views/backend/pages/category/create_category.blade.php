@extends('backend.layouts.main')
@section('content')
    <div class="section-header">
        <h1> Add Category</h1>
    </div>
    <div class="card">
        <form action="{{ route('category.store') }}" method="POST" class="tm-edit-product-form">
            @csrf
            <div class="card-header">
                <h4>Category Info</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Category English Name</label>
                    <input name="category_en" type="text" class="form-control  @error('category_en') is-invalid @enderror">
                    @error('category_en')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category Bangla Name</label>
                    <input name="category_bn" type="text"
                        class="form-control @error('category_bn') is-invalid @enderror">
                    @error('category_bn')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{ route('category.list') }}" class="btn btn-warning">Back</a>
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
