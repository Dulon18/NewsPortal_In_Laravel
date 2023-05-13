@extends('backend.layouts.main')
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="section-header">
            <h1>District List</h1>
        </div>
        @if (session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        <div class="card">
            <div class="card-header">
                <a href="{{ route('district.create') }}" class="btn btn-small btn-primary">Add New District</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md v_center">
                        <tbody>
                            <th>#</th>
                            <th>District English Name</th>
                            <th>District Bangla Name</th>
                            <th>Action</th>
                            @foreach ($districts as $key => $district)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td class="tm-product-name">{{ $district->district_en }}</td>
                                    <td class="tm-product-name">{{ $district->district_bn }}</td>
                                    <td>
                                        <a href="{{ route('district.edit', $district->id) }}"><i
                                                class="fas fa-edit tm-trash-icon"></i></a>
                                        <a href="{{ route('district.delete', $district->id) }}"><i
                                                class="fas fa-trash-alt tm-trash-icon mx-4"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i
                                    class="fas fa-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
