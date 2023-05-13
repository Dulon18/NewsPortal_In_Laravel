@extends('backend.layouts.main')
@section('content')
    <div class="section-header">
        <h1> Add Sub District</h1>
    </div>
    <div class="card">
        <form action="{{ route('subdistrict.store') }}" method="POST" class="tm-edit-product-form">
            @csrf
            <div class="card-header">
                <h4>Sub District Info</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label> Sub District English Name</label>
                    <input name="subdistrict_en" type="text"
                        class="form-control  @error('subdistrict_en') is-invalid @enderror">
                    @error('subdistrict_en')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Sub District Bangla Name</label>
                    <input name="subdistrict_bn" type="text"
                        class="form-control @error('subdistrict_bn') is-invalid @enderror">
                    @error('subdistrict_bn')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>District</label>
                    <select name="district_id" class="form-control select2 @error('category') is-invalid @enderror"
                        tabindex="-1">
                        <option disabled selected>Select One</option>
                        @foreach ($districts as $row)
                            <option value="{{ $row->id }}">{{ $row->district_en }} | {{ $row->district_bn }}
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
                <a href="{{ route('subdistrict.list') }}" type="button" class="btn btn-dark">Back</a>
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
