@extends('admin') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">My Works</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">My Works</li>
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
                        <h3 class="card-title">My Work list</h3>
                        <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#create-work">
                           Create Work
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th width="40%">Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($works as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1  }}</td>
                                        <td>
                                            <img src="{{ url('storage/work', $item->image) }}" alt="">
                                        </td>
                                        <td>{{ $item->title  }}</td>
                                        <td>{{ $item->description  }}</td>
                                        <td>{{ ($item->status == true) ? "Published" : "Unpublished"}}</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-{{ $item->id }}">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $item->id }}">Delete</a>
                                        </td>

                                        <div class="modal fade" id="edit-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit work</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('works.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="">Work Title</label>
                                                            <input type="text" class="form-control" name="title" value="{{ old('title', $item->title) }}" placeholder="Enter work title">
                                                            @error('title')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Work Description</label>
                                                            <textarea class="form-control" name="description" placeholder="Enter work description">{{ old('title', $item->description) }}</textarea>
                                                            @error('description')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            
                                                            <label for="">Upload Image</label> <br>

                                                            <img class="img img-thumbnail" src="{{ url('storage/work', $item->image) }}" alt="{{ $item->title }}"> <br><br>

                                                            <input type="file" class="form-control" name="image">
                                                            @error('description')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                        
                                                        <div class="form-group">
                                                            <label for="">Status</label>
                                                            <select class="form-control" name="status" id="">
                                                                <option
                                                                {{ ($item->status == true) ? "selected" : "" }}
                                                                value="1">Publish</option>
                                                                <option 
                                                                {{ ($item->status == false) ? "selected" : "" }}
                                                                value="0">Unpublish</option>
                                                            </select>
                                                            @error('status')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="delete-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete work !</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="{{ route('works.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
                                                        <h3>Are you sure to delete this work?</h3>
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


<div class="modal fade" id="create-work" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create work</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ route('works.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Work Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter work title">
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Work Description</label>
                    <textarea class="form-control" name="description" placeholder="Enter work description"></textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Upload Image</label>
                    <input type="file" class="form-control" name="image">
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <select class="form-control" name="status" id="">
                        <option value="1">Publish</option>
                        <option value="0">Unpublich</option>
                    </select>
                    @error('status')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Work</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection