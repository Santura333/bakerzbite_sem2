@extends('admin.admin_master')

@section('dashboard_content')
{{-- @include('admin.dashboard_layout.breadcrumb', [
'name' => 'User',
'url' => "categories.index",
'section_name' => 'All User'
]) --}}
<section class="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            {{-- <h1 class="h3 mb-0 text-gray-800">{{$orders['user_id']}}</h1> --}}
            {{-- <a href="/register" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Create New Order</a> --}}
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>User ID </th>
                                <th>Amount</th>
                                <th>Payment Type </th>
                                <th>Order Number </th>
                                <th>Order Date</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>User ID </th>
                                <th>Amount</th>
                                <th>Payment Type </th>
                                <th>Order Number </th>
                                <th>Order Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($orders as $item)
                            <tr role="row" class="odd">
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->user_id }}</td>
                                <td class="sorting_1">{{ $item->amount }}</td>
                                <td>{{ $item->payment_type }}</td>
                                <td>{{ $item->order_number}}</td>
                                <td>{{ $item->order_date}}</td>
                                <td>
                                    <div class="input-group">
                                        <form action="{{ route('order.destroy', $item) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="" class="btn btn-danger" title="Delete Data" id="delete" onclick="event.preventDefault();
                                                                this.closest('form').submit();"><i
                                                    class="fa fa-trash"></i>Delete User</a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</section>
@endsection