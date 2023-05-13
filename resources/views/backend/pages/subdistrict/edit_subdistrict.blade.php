@extends('backend.layouts.main')
@section('content')
    <div class="section-header">
        <h1> Edit Sub District</h1>
    </div>
    <div class="card">
        <form action="{{ route('subdistrict.update', $subdistrict->id) }}" method="POST" class="tm-edit-product-form">
            @method('put')
            @csrf
            <div class="card-header">
                <h4>Edit Sub District Info</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label> Sub District English Name</label>
                    <input name="subdistrict_en" type="text" value="{{ $subdistrict->subdistrict_en }}"
                        class="form-control  @error('subdistrict_en') is-invalid @enderror">
                    @error('subdistrict_en')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Sub District Bangla Name</label>
                    <input name="subdistrict_bn" type="text"value="{{ $subdistrict->subdistrict_bn }}"
                        class="form-control @error('subdistrict_bn') is-invalid @enderror">
                    @error('subdistrict_bn')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>District</label>
                    <select name="district_id"class="form-control select2 @error('category') is-invalid @enderror"
                        tabindex="-1">
                        @foreach ($districts as $row)
                            <option value="{{ $row->id }}" <?php if ($row->id == $subdistrict->district_id) {
                                echo 'selected';
                            } ?>>{{ $row->district_en }} |
                                {{ $row->district_bn }}
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
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
