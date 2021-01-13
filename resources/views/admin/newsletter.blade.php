 @extends('admin.adminmain')
 @section('title',"Contact")
 @section('stylesheets')

 	  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

 @endsection

 @section('content')

      <div id="content">

        <!-- Topbar -->

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Contact List</h1>
          <p class="mb-4"> 
          	<!-- <a target="_blank" href="https://datatables.net">official DataTables documentation</a>. -->
          </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">People subscribed You</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Subscription Date</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Email</th>
                      <th>Subscription Date</th>
                      <!-- <th>Salary</th> -->
                    </tr>
                  </tfoot>
                  <tbody>
                  	@foreach($nls as $nl)
                  	 <tr>
                      <td>{{$nl->email}}</td>
                      <td>{{$nl->created_at}}</td>
                    </tr>
                  	@endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>


 @endsection

 @section('scripts')

   <!-- Page level plugins -->
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <!-- Page level custom scripts -->
  <script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>

 @endsection
 