@extends('admin.master.template')

@section('content')
<div class="main-panel">
<div class="content-wrapper">
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Company Information</h4>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="companyname">Company Name</label>
                      <input type="text" class="form-control" id="companyname" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="mission">Mission</label>
                      <input type="text" class="form-control" id="mission" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="vision">Vision</label>
                      <input type="text" class="form-control" id="vision" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="contactno">Contact No</label>
                      <input type="text" class="form-control" id="contactno" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="footerinfo">Footer Information</label>
                      <input type="text" class="form-control" id="footerinfo" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Save Changes</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
</div>
</div>
@endsection