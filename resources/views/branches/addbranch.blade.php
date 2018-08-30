@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="branches" class="nav-link">Branches</a>
                    </li>
                    <li class="nav-item  active">
                        <a href="#" class="nav-link">Add Branch</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
<div class="content-wrapper">
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Branch</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="branchno">Branch No</label>
                      <input type="text" class="form-control" id="branchno" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="branchname">Branch Name</label>
                      <input type="text" class="form-control" id="branchname" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="contactno">Contact No</label>
                      <input type="text" class="form-control" id="contactno" placeholder="">
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