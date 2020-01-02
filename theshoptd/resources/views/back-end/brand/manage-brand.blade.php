@extends('back-end.admin')

@section('title')
Manage
@endsection

@section('bodyAdmin')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">manage</li>
</ol>
<div>
    <h2 class="text-success" style="text-align:center">{{ Session::get('message') }} </h2>
</div>
<canvas class="canvashideChart" id="myAreaChart" width="100%" height="30"></canvas>
<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Brand Manage Table</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Sl No</th>
                        <th>Brand Name</th>
                        <th>Brand Description</th>
                        <th>Last Updated</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot class="bg-primary text-white">
                    <tr>
                        <th>Sl No</th>
                        <th>Brand Name</th>
                        <th>Brand Description</th>
                        <th>Last Updated</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php($i=1)
                    @foreach($brads as $brad)

                    <tr>
                        <td style="text-align:center">{{ $i++ }}</td>
                        <td>{{ $brad->brand_name }}</td>

                        <td>{{ strip_tags($brad->brand_description ) }} </td>
                        <td style="text-align:center">{{ $brad->updated_at }}</td>
                        <td style="text-align:center">{{ $brad->publication_status }}</td>
                        <td style="width: 140px;text-align: center;">
                            @if($brad->publication_status == 1)
                            <a href="{{ route('unpublished-brand', ['id'=>$brad->id]) }}"
                                class="btn btn-info btn-xs">
                                <span class="fas fa-arrow-up"></span>
                            </a>
                            @else
                            <a href="{{ route('published-brand', ['id'=>$brad->id]) }}"
                                class="btn btn-warning btn-xs">
                                <span class="fas fa-arrow-down"></span>
                            </a>
                            @endif
                            <a href="{{ route('edit-brand', ['id'=> $brad->id]) }}" class="btn btn-info btn-xs">
                                <span class="fas fa-edit"></span>
                            </a>
                            <a href="{{ route('delete-brand', ['id'=>$brad->id]) }}" class="btn btn-danger btn-xs">
                                <span class="fas fa-trash"></span>
                            </a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
<script src="{{ asset('/') }}/back-end/assets/vendor/chart.js/Chart.min.js"></script>
<script src="{{ asset('/') }}/back-end/assets/js/demo/chart-area-demo.js"></script>
@endsection