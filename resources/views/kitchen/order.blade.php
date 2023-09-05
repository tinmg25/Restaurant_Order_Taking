@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kitchen Panel</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12   ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Order Lists</h3>
                            </div>

                            <div class="card-body">
                                @if (session('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <table id="dishes" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Dish Name</th>
                                            <th>Table Number</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->dish->name }}</td>
                                                <td>{{ $order->table }}</td>
                                                <td>{{ $status[$order->status] }}</td>
                                                <td>
                                                    <a style="height: 40px; margin-right:10px"
                                                        href="/order/{{ $order->id }}/approve"
                                                        class="btn btn-warning">Approve</a>
                                                    <a style="height: 40px; margin-right:10px"
                                                        href="/order/{{ $order->id }}/cancel"
                                                        class="btn btn-danger">Cancel</a>
                                                    <a style="height: 40px; margin-right:10px"
                                                        href="/order/{{ $order->id }}/ready"
                                                        class="btn btn-success">Ready</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function() {
        $('#dishes').DataTable({
            "paging": true,
            "lengthChange": false,
            "pageLength": 10,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
