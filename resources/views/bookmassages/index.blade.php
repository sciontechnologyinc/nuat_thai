@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Reservations</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Reservations</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Full Name
                          </th>
                          <th>
                            Contact No.
                          </th>
                          <th>
                            No Of. Reservation
                          </th>
                          <th>
                            Date/Time
                          </th>
                          <th>
                            Package
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($bookmassages as $bookmassage)    
                       <tr>
                          <td>{{ $bookmassage->fullname }}</td>
                          <td>{{ $bookmassage->contactno }}</td>
                          <td>{{ $bookmassage->noofreservation }}</td>
                          <td>{{ $bookmassage->datetime }}</td>
                          <td>{{ $bookmassage->package }}</td>
                       </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection
