@extends('backend.layouts.main')
@section('links')
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .table {
            color: rgb(25, 22, 22) !important;
        }

        table#datatable-ajax-crud {
            width: 98% !important;

        }

        table#datatable-ajax-crud th {
            color: rgb(252, 252, 245);
            background: #5c3d70;
        }
    </style>
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        <div class="section-header">
            <h1>Post List</h1>
        </div>
        @if (session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif
        <div class="card p-3">
            <div class="card-header">
                <a href="{{ route('post.create') }}" class="btn btn-small btn-primary">Add New Post</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle" id="datatable-ajax-crud">
                        <tbody>
                            <tr>
                                <thead>
                                    <th>Title English Name</th>
                                    <th>Title Bangla Name</th>
                                    <th>Category</th>
                                    <th>Thumnail</th>
                                    <th>Action</th>
                                </thead>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#datatable-ajax-crud').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('post.list') }}",
                columns: [
                    {
                        data: 'title_en'
                    },
                    {
                        data: 'title_bn'
                    },
                    {
                        data: 'cat_id'
                    },
                    {
                        data: 'image'
                    },
                    {
                        data: 'action',
                        orderable: false,
                        searchable: true
                    },
                ],
                order: [
                    [0, 'desc']
                ]
            });
        });
    </script>
@endsection
