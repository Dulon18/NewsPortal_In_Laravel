@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-lg-10 col-md-12 col-sm-12">
        <div class="bg-white tm-block">
            <div class="row">
                <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Edit Sub District</h2>
                </div>
            </div>
            <div class="row mt-4 tm-edit-product-row">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <form action="{{ route('subdistrict.update',$subdistrict->id) }}" method="POST" class="tm-edit-product-form">
                         @method('put')
                        @csrf
                        <div class="input-group mb-3">
                            <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Sub District
                                English Name
                            </label>
                            <input id="name" name="subdistrict_en" type="text"  value="{{ $subdistrict->subdistrict_en }}"
                                class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7 @error('subdistrict_en') is-invalid @enderror">
                            @error('subdistrict_en')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Sub District
                                Bangla
                                Name
                            </label>
                            <input id="stock" name="subdistrict_bn" type="text" value="{{ $subdistrict->subdistrict_bn }}"
                                class="form-control validate col-xl-12 col-lg-12 col-md-7 col-sm-7 @error('subdistrict_bn') is-invalid @enderror"><br>
                            @error('subdistrict_bn')
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
                                @foreach ($districts as $c)
                                    <option value="{{ $c->id }}"
                                    <?php if($c->id == $subdistrict->district_id) echo"selected"?>>{{ $c->district_en }} | {{ $c->district_bn }}
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
                            <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                <button type="submit" class="btn btn-primary">Add
                                </button>
                                <a href="{{ route('subdistrict.list') }}" type="button" class="btn btn-dark">Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
