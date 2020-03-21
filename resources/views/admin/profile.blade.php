@extends('admin')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">My profile</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <form action="{{ route('admin.profile') }}" method="POST" enctype="multipart/form-data" role="form">

                        @csrf
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <img width="150px" class="img img-thumbnail" src="{{ url('storage/profile_image', $profile->my_profile_image) }}" alt="">
                                                </div>
                                                <label for="my_profile_image">Profile Image</label>
                                                <input type="file" class="form-control" name="my_profile_image" id="my_profile_image">
                                                @error('my_profile_image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <img width="150px" class="img img-thumbnail" src="{{ url('storage/about_image', $profile->my_about_image) }}" alt="">
                                                </div>
                                                <label for="my_about_image">About Image</label>
                                                <input type="file" class="form-control" name="my_about_image" id="my_about_image">
                                                @error('my_about_image')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    


                                    <div class="form-group">
                                        <label for="my_name">Name</label>
                                        <input type="text" class="form-control" name="my_name" id="my_name" value="{{ old('my_name', $profile->my_name) }}" placeholder="Enter your name">
                                        @error('my_name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
        
                                    <div class="form-group">
                                        <label for="my_title">Title</label>
                                        <input type="text" class="form-control" name="my_title" id="my_title" value="{{ old('my_title', $profile->my_title) }}" placeholder="Enter your title">
                                        @error('my_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <h4 class="mb-3">Contact Info</h4>

                             
                                    <div class="form-group">
                                        <label for="my_primary_phone">Primary Phone number</label>
                                        <input type="text" class="form-control" name="my_primary_phone" id="my_primary_phone" value="{{ old('my_primary_phone', $profile->my_primary_phone) }}" placeholder="Enter primary phone number">
                                        @error('my_primary_phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="my_secondery_phone">Secondery Phone number</label>
                                        <input type="text" class="form-control" name="my_secondery_phone" id="my_secondery_phone" value="{{ old('my_secondery_phone', $profile->my_secondery_phone) }} "placeholder="Enter secondery phone number">
                                        @error('my_secondery_phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="my_primary_email">Primary Email</label>
                                        <input type="email" class="form-control" name="my_primary_email" id="my_primary_email" value="{{ old('my_primary_email', $profile->my_primary_email) }}" placeholder="Enter primary email address">
                                        @error('my_primary_email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="my_secondery_email">Secondery Email</label>
                                        <input type="email" class="form-control" name="my_secondery_email" id="my_secondery_email" value="{{ old('my_secondery_email', $profile->my_secondery_email) }}" placeholder="Enter secondery email address">
                                        @error('my_secondery_email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="my_web_address">Website URL</label>
                                        <input type="text" class="form-control" name="my_web_address" id="my_web_address" value="{{ old('my_web_address', $profile->my_web_address) }}" placeholder="Enter website url">
                                        @error('my_web_address')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="my_street_address">Street Address</label>
                                        <input type="text" class="form-control" name="my_street_address" id="my_street_address" value="{{ old('my_street_address', $profile->my_street_address) }}" placeholder="Enter street address">
                                        @error('my_street_address')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="my_city">City</label>
                                                <input type="text" class="form-control" name="my_city" id="my_city" value="{{ old('my_city', $profile->my_city) }}" placeholder="Enter city name">
                                                @error('my_city')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="my_zip">Zip/Postal code</label>
                                                <input type="text" class="form-control" name="my_zip" id="my_zip" value="{{ old('my_zip', $profile->my_zip) }}" placeholder="Enter zip code">
                                                @error('my_zip')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="my_latitude">Latitude</label>
                                                <input type="text" class="form-control" name="my_latitude" id="my_latitude" value="{{ old('my_latitude', $profile->my_latitude) }}" placeholder="Enter latitude">
                                                @error('my_latitude')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="my_longitude">Longitude</label>
                                                <input type="text" class="form-control" name="my_longitude" value="{{ old('my_longitude', $profile->my_longitude) }}" id="my_longitude" placeholder="Enter longitude">
                                                @error('my_longitude')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="my_working_title">Working Title</label>
                                        <input type="text" class="form-control" name="my_working_title" id="my_working_title" value="{{ old('my_working_title', $profile->my_working_title) }}" placeholder="Enter working title">
                                        @error('my_working_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="my_working_description">Working Description</label>
                                        <textarea id="" class="form-control" cols="30" rows="2" name="my_working_description" id="my_working_description"  placeholder="Enter working description">{{ old('my_working_description', $profile->my_working_description) }}</textarea>
                                        @error('my_working_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="my_short_description">Short Description</label>
                                        <textarea id="" class="form-control" cols="30" rows="4" name="my_short_description" id="my_short_description"  placeholder="Enter a short description">{{ old('my_short_description', $profile->my_short_description) }}</textarea>
                                        @error('my_short_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="my_brief_description">Brief Description</label>
                                        <textarea id="" class="form-control" cols="30" rows="7" name="my_brief_description" id="my_brief_description"  placeholder="Enter a brief description">{{ old('my_brief_description', $profile->my_brief_description) }}</textarea>
                                        @error('my_brief_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
              
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection