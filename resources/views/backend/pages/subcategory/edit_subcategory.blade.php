@extends('backend.layouts.main')
@section('content')
    <div class="section-header">
        <h1> Edit SubCategory</h1>
    </div>
    <div class="card">
        <form action="{{ route('subcategory.update', $subcategory->id) }}" method="POST" class="tm-edit-product-form">
            @method('put')
            @csrf
            <div class="card-header">
                <h4>Sub Category Info</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label> Sub Category English Name</label>
                    <input name="subcategory_en" type="text" value="{{ $subcategory->subcategory_en }}"
                        class="form-control  @error('subcategory_en') is-invalid @enderror">
                    @error('subcategory_en')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Sub Category Bangla Name</label>
                    <input name="subcategory_bn" type="text"value="{{ $subcategory->subcategory_bn }}"
                        class="form-control @error('subcategory_bn') is-invalid @enderror">
                    @error('subcategory_bn')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" class="form-control select2 @error('category') is-invalid @enderror"
                        tabindex="-1">
                        <option disabled selected>Select One</option>
                        @foreach ($categories as $c)
                            <option value="{{ $c->id }}" <?php if ($c->id == $subcategory->category_id) {
                                echo 'selected';
                            } ?>>{{ $c->category_en }} |
                                {{ $c->category_bn }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{ route('subcategory.list') }}" type="button" class="btn btn-dark">Back</a>
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
