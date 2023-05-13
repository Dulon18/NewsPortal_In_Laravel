@extends('backend.layouts.main')
@section('content')
    <div class="section-header">
        <h1> Add District</h1>
    </div>
    <div class="card">
        <form action="{{ route('district.store') }}" method="POST" class="tm-edit-product-form">
            @csrf
            <div class="card-header">
                <h4>District Info</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>District English Name</label>
                    <input name="district_en" type="text" class="form-control  @error('district_en') is-invalid @enderror">
                    @error('district_en')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>District Bangla Name</label>
                    <input name="district_bn" type="text"
                        class="form-control @error('district_bn') is-invalid @enderror">
                    @error('district_bn')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{ route('district.list') }}" class="btn btn-warning">Back</a>
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
