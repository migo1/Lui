@extends('layouts.master')

@section('content')


<div class="row">
<div class="col-md-4">
    <div class="card card-user">
      <div class="image">
        <img src="../assets/img/damir-bosnjak.jpg" alt="...">
      </div>
      <div class="card-body">
        <div class="author">
          {{-- <a href="#"> --}}
            <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
          <h5 class="title">{{ $client->name }}</h5>
          {{-- </a> --}}
          <p class="text-center">
            Join Date : {{ $client->start_date }}
          </p>
        </div>
        <p class="text-center">
          D.O.B : <span class="description text-center"></span>{{ $client->dob }}
        </p>

    

        <p class="text-center">
         Gender: <span class="description text-center"></span>{{ $gender }}
        </p>
      </div>
      {{-- <div class="card-footer">
        <hr>
        <div class="button-container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-6 ml-auto">
              <h5>12<br><small>Files</small></h5>
            </div>
            <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
              <h5>2GB<br><small>Used</small></h5>
            </div>
            <div class="col-lg-3 mr-auto">
              <h5>24,6$<br><small>Spent</small></h5>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    {{-- <div class="card">
      <div class="card-header">
        <h4 class="card-title">Team Members</h4>
      </div>
      <div class="card-body">
        <ul class="list-unstyled team-members">
          <li>
            <div class="row">
              <div class="col-md-2 col-2">
                <div class="avatar">
                  <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
              </div>
              <div class="col-md-7 col-7">
                DJ Khaled
                <br>
                <span class="text-muted"><small>Offline</small></span>
              </div>
              <div class="col-md-3 col-3 text-right">
                <button class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></button>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-md-2 col-2">
                <div class="avatar">
                  <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
              </div>
              <div class="col-md-7 col-7">
                Creative Tim
                <br>
                <span class="text-success"><small>Available</small></span>
              </div>
              <div class="col-md-3 col-3 text-right">
                <button class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></button>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-md-2 col-2">
                <div class="avatar">
                  <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
              </div>
              <div class="col-ms-7 col-7">
                Flume
                <br>
                <span class="text-danger"><small>Busy</small></span>
              </div>
              <div class="col-md-3 col-3 text-right">
                <button class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></button>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div> --}}
  </div>















  <div class="col-md-8">
    <div class="card card-user">
      <div class="card-header">
        <h5 class="card-title">Edit Profile 
        <a href="{{ route('assessment.index', $client->id)}}" class="btn btn-sm btn-outline-warning float-right">{{ $client->name }}Assessment form</a></h5>
      </div>
      <div class="card-body">
          <div class="row">
            <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>First Name</label>
              <input type="text" class="form-control" value="{{ $client->name }}" disabled>
              </div>
            </div>
            <div class="col-md-4 px-1">
              <div class="form-group">
                <label>Middle Name</label>
              <input type="text" class="form-control" value="{{ $client->middle_name }}" disabled>
              </div>
            </div>
            <div class="col-md-4 pl-1">
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
              <input type="text" class="form-control" value="{{ $client->last_name }}" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-1">
              <div class="form-group">
                <label>Email Address</label>
              <input type="text" class="form-control"  value="{{ $client->email }}" disabled>
              </div>
            </div>
            <div class="col-md-6 pl-1">
              <div class="form-group">
                <label>Phone Number</label>
              <input type="text" class="form-control" value="{{ $client->phone }}" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
              <input type="text" class="form-control"  value="{{ $client->address }}" disabled>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>City</label>
              <input type="text" class="form-control" value="{{ $client->city }}" disabled>
              </div>
            </div>
            <div class="col-md-4 px-1">
              <div class="form-group">
                <label>Country</label>
              <input type="text" class="form-control" value="{{ $client->country }}" disabled>
              </div>
            </div>
            <div class="col-md-4 pl-1">
              <div class="form-group">
                <label>Postal Code</label>
              <input type="number" class="form-control" value="{{ $client->zip }}" disabled>
              </div>
            </div>
          </div>
          {{-- <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>About Me</label>
                <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
              </div>
            </div>
          </div> --}}
          {{-- <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
            </div>
          </div> --}}
      </div>
    </div>
  </div>
</div>


@endsection