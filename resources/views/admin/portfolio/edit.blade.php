@extends('admin') @section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Portfolio</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Portfolio</li>
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
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Portfolio</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" role="form">
                       @csrf
                       @method('PUT')
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-8">
                                  <div class="form-group">
                                    <label for="project_name">Project Name</label>
                                    <input type="text" class="form-control" name="project_name" value="{{ old('project_name', $portfolio->project_name) }}" id="project_name" placeholder="Enter project name">
                                  </div>
                                  <div class="form-group">
                                    <label for="project_intro">Project Intro</label>
                                    <textarea class="form-control" name="project_intro"id="project_intro" placeholder="Enter project intro">{{ old('project_intro', $portfolio->project_intro) }}</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="short_description">Project short description</label>
                                    <textarea class="form-control" name="short_description" id="short-desc" placeholder="Enter project short description">{!! old('short_description',$portfolio->short_description) !!}</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="brief_description">Project brief description</label>
                                    <textarea class="form-control" rows="10" name="brief_description" id="brief-desc" placeholder="Enter project brief description">{!! old('brief_description',$portfolio->brief_description) !!}</textarea>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label for="client_name">Client Name</label>
                                    <input type="text" class="form-control" name="client_name" value="{{ old('client_name', $portfolio->client_name) }}" id="client_name" placeholder="Enter client name">
                                </div>
                                <div class="form-group">
                                    <label for="project_size">Project size</label>
                                    <input type="number" class="form-control" name="project_size" value="{{ old('project_size', $portfolio->project_size) }}" id="project_size" placeholder="Enter project size">
                                </div>
                                <div class="form-group">
                                    <label for="project_url">Project URL</label>
                                    <input type="text" class="form-control" name="project_url" value="{{ old('project_url', $portfolio->project_url) }}" id="project_url" placeholder="Enter project URL">
                                </div>
                                <div class="form-group">
                                    <label for="project_image">Project Image</label> <br>
                                    <img width="30%" src="{{ url('storage/portfolio', $portfolio->project_image) }}" class="img img-thumbnail" alt="{{ $portfolio->project_name }}"> <br><br>
                                    <input type="file" class="form-control" name="project_image" id="project_image">
                                </div>
                                <div class="form-group">
                                    <label>Project Tesimonila</label>
                                    <select name="testimonial_id" class="custom-select">
                                      <option selected disabled>Select a testimonial</option>
                                      @foreach ($testimonials as $item)
                                        <option 
                                        
                                        {{ ($item->id == $portfolio->testimonial_id) ? "selected" : "" }}
                                        
                                        value="{{ $item->id }}">{{ $item->client_name. ' - '.$item->client_company  }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" {{ ($portfolio->is_featured == true) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_featured">Keep this as featured portfolio</label>
                                </div> <br>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="custom-select">
                                      <option
                                      {{ ($portfolio->status == true) ? "selected" : "" }}
                                      value="1">Published</option>
                                      <option 
                                      {{ ($portfolio->status == false) ? "selected" : "" }}
                                      value="0">Unpublished</option>
                                    </select>
                                </div>
                              </div>
                          </div>
                  
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                      </div>
                    </form>
                  </div>
              
            </div> {{-- col-md-12 --}}
        </div>  {{-- Row --}}

    </div>
    <!-- /.container-fluid -->
</div>

@endsection

@push('js')
    <script>
        tinymce.init({
            selector: '#short-desc',  // change this value according to your HTML
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                ' bold italic | link | forecolor backcolor | alignleft aligncenter ' +
                ' alignright alignjustify | bullist numlist outdent indent |' +
                ' removeformat | help',
            menubar: false,
            default_link_target: "_blank"
        });
        tinymce.init({
            selector: '#brief-desc',  // change this value according to your HTML
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                ' bold italic | link | forecolor backcolor | alignleft aligncenter ' +
                ' alignright alignjustify | bullist numlist outdent indent |' +
                ' removeformat | help',
            menubar: false,
            default_link_target: "_blank"
        });
    </script>
@endpush