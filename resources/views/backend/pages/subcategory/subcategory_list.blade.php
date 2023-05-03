@extends('backend.layouts.app')
@section('content')
    <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
        <div class="bg-white tm-block h-100">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h2 class="tm-block-title d-inline-block">Category</h2>
                </div>
                <div class="col-md-4 col-sm-12 text-right">
                    <a href="{{ route('subcategory.create') }}" class="btn btn-small btn-primary">Add New SubCategory</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped tm-table-striped-even mt-3">
                    <thead>
                        <tr class="tm-bg-gray">
                            <th scope="col">&nbsp;</th>
                            <th scope="col">SubCategory English Name</th>
                            <th scope="col">SubCategory Bangla Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $category)
                            <th scope="row">
                                <input type="checkbox" aria-label="Checkbox">
                            </th>
                            <td class="tm-product-name">{{ $category->subcategory_en }}</td>
                            <td class="tm-product-name">{{ $category->subcategory_bn }}</td>
                            <td class="tm-product-name">{{ $category->category_en }} | {{ $category->category_bn }}</td>
                            <td>
                                <a href="{{ route('subcategory.edit', $category->id) }}"><i
                                        class="fas fa-edit tm-trash-icon"></i></a>
                                <a href="{{ route('subcategory.delete', $category->id) }}"><i
                                        class="fas fa-trash-alt tm-trash-icon mx-4"></i></a>
                            </td>
                            </tr>
                        @endforeach
                        <tr>
                    </tbody>
                </table>
            </div>

            <div class="tm-table-mt tm-table-actions-row">
                <div class="tm-table-actions-col-left">
                    <button class="btn btn-danger">Delete Selected Items</button>
                </div>
                <div class="tm-table-actions-col-right">
                    <span class="tm-pagination-label">Page</span>
                    <nav aria-label="Page navigation" class="d-inline-block">
                        <ul class="pagination tm-pagination">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <span class="tm-dots d-block">...</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">13</a></li>
                            <li class="page-item"><a class="page-link" href="#">14</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
