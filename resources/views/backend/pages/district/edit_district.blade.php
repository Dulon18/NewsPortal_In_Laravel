@extends('backend.layouts.main')
@section('content')
    <div class="section-header">
        <h1> Edit District</h1>
    </div>
    <div class="card">
        <form action="{{ route('district.update', $district->id) }}" method="POST" class="tm-edit-product-form">
            @method('put')
            @csrf
            <div class="card-header">
                <h4>District Info</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>District English Name</label>
                    <input name="district_en" type="text" value="{{ $district->district_en }}"
                        class="form-control  @error('district_en') is-invalid @enderror">
                    @error('district_en')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>District Bangla Name</label>
                    <input name="district_bn" type="text" value="{{ $district->district_bn }}"
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
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
