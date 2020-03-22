@extends('admin') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">portfolios</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">portfolios</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Portfolio list</h3>
                        <a href="{{ route('portfolio.create') }}" class="btn btn-success btn-sm float-right">
                           Create portfolio
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Project Name</th>
                                    <th>Project URL</th>
                                    <th>Client name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1  }}</td>
                                        <td>
                                            <img width="70px" src="{{ url('storage/portfolio', $item->project_image) }}" alt="">
                                        </td>
                                        <td>{{ $item->project_name  }}</td>
                                        <td>{{ $item->project_url  }}</td>
                                        <td>{{ $item->client_name  }}</td>
                                        <td>{{ ($item->status == true) ? "Published" : "Unpublished"}}</td>
                                       
                                        <td>
                                            <a href="{{ route('portfolio.edit', $item->id) }}" class="btn btn-info btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $item->id }}">Delete</a>
                                        </td>

                    
                                        <div class="modal fade" id="delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete portfolio !</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="{{ route('portfolio.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
                                                        <h3>Are you sure to delete this portfolio?</h3>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-danger">Delete now</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>




                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>{{-- card-body --}}
                </div><!-- /.card -->
            </div> {{-- col-md-12 --}}
        </div>  {{-- Row --}}

    </div>
    <!-- /.container-fluid -->
</div>

@endsection