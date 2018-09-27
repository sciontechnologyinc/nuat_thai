@extends('admin.master.template')
@section('headerButton')
<ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="{{ url('companyinformation')}}" class="nav-link">Company Information</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('editcompanyinformation')}}" class="nav-link">Edit Company Information</a>
                    </li>
            </ul>
@endsection
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Company Information</h4>
                    <div class="form-group">
                    <label for="companyname">Company Name</label>
                    <input type="text" class="form-control" placeholder="" readonly></input>
                    </div>
                    <div class="form-group">
                    <label for="mission">Mission</label>
                    <input type="text" class="form-control" placeholder="" readonly></input>
                    </div>
                    <div class="form-group">
                    <label for="vision">Vision</label>
                    <input type="text" class="form-control" placeholder="" readonly></input>
                    </div>
                    <div class="form-group">
                    <label for="contactno">Contact No.</label>
                    <input type="text" class="form-control" placeholder="" readonly></input>
                    </div>
                    <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" placeholder="" readonly></input>
                    </div>
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" placeholder="" readonly></input>
                    </div>
                    <div class="form-group">
                    <label for="footerinformation">Footer Information</label>
                    <input type="text" class="form-control" placeholder="" readonly></input>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection