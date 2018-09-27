@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Accounts</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Accounts</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Full Name
                          </th>
                          <th>
                            Contact No.
                          </th>
                          <th>
                            Email Address
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <td>
                           1
                          </td>
                          <td>
                            Juan Dela Cruz
                          </td>
                          <td>
                            09123468988
                          </td>
                          <td>
                            juandelacruz@gmail.com
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