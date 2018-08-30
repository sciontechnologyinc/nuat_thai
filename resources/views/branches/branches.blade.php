@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Branches</a>
                    </li>
                    <li class="nav-item">
                        <a href="addbranch" class="nav-link">Add Branch</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Branches</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Branch No.
                          </th>
                          <th>
                            Branch Name
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            Contact No.
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>
                           1
                          </td>
                          <td>
                            Libis Nuat Thai
                          </td>
                          <td>
                            Libis
                          </td>
                          <td>
                            0912346789
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection
