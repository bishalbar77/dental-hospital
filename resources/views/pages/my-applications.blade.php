@extends('layouts.app')

@section('content')

    
    <section id="contact" class="contact">
      <div class="container">
          <div class="mb-3">
          @if(session()->has('message'))
              <div class="alert alert-success">
                  {{ session()->get('message') }}
              </div>
          @elseif(session()->has('error'))
              <div class="alert alert-danger">
                  {{ session()->get('message') }}
              </div>
          @endif
          </div>
      </div>
    </section>
    <section id="contact" class="contact">
      <div class="container">
          <h2 class="main-title" style="font-weight: 500;">&nbsp;</h2>

        <div class="section-title" data-aos="fade-up">
        </div>

        <div class="row">
          <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="#" method="POST" enctype="multipart/form-data" class="php-email-form" style="border-radius: 10px; !important">
              
                      <!-- Repeater Heading -->
                <div class="row">
                  <div class="repeater-heading">
                      <h5 class="pull-left pt-3 pb-3">All Appointments</h5>
                  </div>
              </div>
              <table class="table table-bordered" width="100%" id="example">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($application as $app)
                    <tr>
                      <td>{{ $app->user->name }}</td>
                      <td>{{ $app->date }}</td>
                      <td>{{ $app->time }}</td>
                      <td><span class="badge-active">{{ (($app->category == 'skin') ? 'Skin Care' : 'Dental Care')  }}</td>
                      <td><span class="badge-{{ (($app->status == '0') ? 'active' : 'pending')  }}">{{ (($app->status == '0') ? 'Active' : 'Cancelled')  }}</span></td>
                      <td>
                        @if($app->status == '0')
                          <a type="button" class="btn btn-danger" href="/update-ppointment/{{ $app->id }}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>
                        @else
                        
                        @endif
                      </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            </form>
          </div>
        </div>
      </div>
  </section>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
    <script>
       $(document).ready(function() {
          $('#example').DataTable();
      } );
      
    </script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
@endsection