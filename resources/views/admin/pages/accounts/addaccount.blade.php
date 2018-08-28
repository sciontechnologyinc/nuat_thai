@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item">
                        <a href="accounts" class="nav-link">Accounts</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Add Account</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
<div class="content-wrapper">
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Account</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="firstname">First Name</label>
                      <input type="text" class="form-control" id="firstname" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="middlename">Middle Name</label>
                      <input type="text" class="form-control" id="middlename" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="lastname">Last Name</label>
                      <input type="text" class="form-control" id="lastname" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="contactno">Contact No.</label>
                      <input type="text" class="form-control" id="contactno" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="">
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