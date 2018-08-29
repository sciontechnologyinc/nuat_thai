@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="staffs" class="nav-link">Staffs</a>
                    </li>
                    <li class="nav-item  active">
                        <a href="#" class="nav-link">Add Staff</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
<div class="content-wrapper">
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Staff</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="staffid">Staff ID</label>
                      <input type="text" class="form-control" id="staffid" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="staffname">Staff Name</label>
                      <input type="text" class="form-control" id="staffname" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="contactno">Contact No.</label>
                      <input type="text" class="form-control" id="contactno" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="type">Type</label>
                      <input type="text" class="form-control" id="type" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>
@endsection