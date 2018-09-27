@extends('admin.master.template')

@section('headerButton')
          <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Massage Types</a>
                    </li>
                    <li class="nav-item">
                        <a href="addmassagetype" class="nav-link">Add Massage Type</a>
                    </li>
            </ul>
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Massage Types</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Massage Type Name
                          </th>
                          <th>
                            Massage Type Description
                          </th>
                          <th>
                            Price
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($massagetypes as $massagetype)
                      <tr>
                          <td>
                          {{ $massagetype->massagetypename }}
                          </td>
                          <td>
                          {{ $massagetype->massagetypedescription }}
                          </td>
                          <td>
                          {{ $massagetype->price }}
                          </td>
                          <td>
                          <center>
                          <div class="form-group" style="display:inline-flex">
                          <a rel="tooltip" title="Edit" class="btn btn-success btn-sm mr-1" href="massagetypes/{!! $massagetype->id !!}/edit"><i class="fa fa-edit"></i></a>
                          {!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'url' => '/massagetypes/' . $massagetype->id]) !!}
                          {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'rel' => 'tooltip', 'title' => 'Delete'] )  }}
                          {!! Form::close() !!}
                          </div>
                          </center>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
@endsection
