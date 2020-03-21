@extends('admin') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Testimonials</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Testimonials</li>
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
                        <h3 class="card-title">Testimonials list</h3>
                        <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#create-testimonial">
                           Create testimonial
                        </button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Client Name</th>
                                    <th>Client Title</th>
                                    <th>Client Company</th>
                                    <th width="20%">Client Message</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1  }}</td>
                                        <td>
                                            <img src="{{ url('storage/testimonial', $item->client_image) }}" alt="">
                                        </td>
                                        <td>{{ $item->client_name  }}</td>
                                        <td>{{ $item->client_title  }}</td>
                                        <td>{{ $item->client_company  }}</td>
                                        <td>{{ $item->client_message  }}</td>

                                        <td>{{ ($item->status == true) ? "Published" : "Unpublished"}}</td>
                                       
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-{{ $item->id }}">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-{{ $item->id }}">Delete</a>
                                        </td>

                                        <div class="modal fade" id="edit-{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit testimonial</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('testimonial.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="">Client Name</label>
                                                            <input type="text" class="form-control" value="{{ old('client_name', $item->client_name) }}" name="client_name" placeholder="Enter client name">
                                                            @error('client_name')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                        
                                                        <div class="form-group">
                                                            <label for="">Client Title</label>
                                                            <input type="text" class="form-control" value="{{ old('client_title', $item->client_title) }}" name="client_title" placeholder="Enter client title">
                                                            @error('client_title')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                        
                                                        <div class="form-group">
                                                            <label for="">Client Message</label>
                                                            <textarea class="form-control" name="client_message" placeholder="Enter client message">{{ old('client_message', $item->client_message) }}</textarea>
                                                            @error('client_message')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                        
                                        
                                                        <div class="form-group">
                                                            <label for="">Client Image</label> <br>
                                                            <img class="img img-thumbnail" src="{{ url('storage/testimonial', $item->client_image ) }}" alt="{{ $item->title }}"> <br><br>
                                                            <input type="file" class="form-control" name="client_image">
                                                            @error('client_image')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                        
                                        
                                                        <div class="form-group">
                                                            <label for="">Client Company</label>
                                                            <input type="text" class="form-control" value="{{ old('client_company', $item->client_company) }}" name="client_company" placeholder="Enter client company">
                                                            @error('client_company')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                        
                                                        <div class="form-group">
                                                            <label for="">Client URL (Optional)</label>
                                                            <input type="text" class="form-control" value="{{ old('client_url', $item->client_url) }}" name="client_url" placeholder="Enter client url">
                                                            @error('client_url')
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
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete testimonial !</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="{{ route('testimonial.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="modal-body">
                                                        <h3>Are you sure to delete this testimonial?</h3>
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


<div class="modal fade" id="create-testimonial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create testimonial</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Client Name</label>
                    <input type="text" class="form-control" name="client_name" placeholder="Enter client name">
                    @error('client_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Client Title</label>
                    <input type="text" class="form-control" name="client_title" placeholder="Enter client title">
                    @error('client_title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Client Message</label>
                    <textarea class="form-control" name="client_message" placeholder="Enter client message"></textarea>
                    @error('client_message')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Client Image</label>
                    <input type="file" class="form-control" name="client_image">
                    @error('client_image')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="">Client Company</label>
                    <input type="text" class="form-control" name="client_company" placeholder="Enter client company">
                    @error('client_company')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Client URL (Optional)</label>
                    <input type="text" class="form-control" name="client_url" placeholder="Enter client url">
                    @error('client_url')
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
                <button type="submit" class="btn btn-primary">Save testimonial</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.content -->
@endsection