@extends('admin.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('main-content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Manage Posts
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
      @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="box-header with-border">
          <h3 class="box-title">Posts</h3>
          <a class="col-lg-offset-5 btn btn-success" href="{{ route('post.create') }}">Add New</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Slug</th>
                  <th>Creatd At</th>
                  <th>Post Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                 <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->subtitle  }}</td>
                  <td>{{ $post->slug  }}</td>
                  <td>{{ $post->created_at }}</td>
                  <td> 
                    @if($post->status == 1)
                     Public
                    @else
                    No Public
                    @endif</td>
                  <td><a href="{{ route('post.edit',$post->id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                    <a class="btn btn-danger" href="#" onclick="
                    if(confirm('Are you sure, You Want to delete this?'))
                    {
                      event.preventDefault(); 
                      document.getElementById('delete-form-{{ $post->id }}').submit();
                    }else{
                      event.preventDefault();
                    }">
                    Delete
                  </a>
                      <form action="{{ route('post.destroy',$post->id) }}" method="POST" id="delete-form-{{ $post->id }}" style="display: none;">
                          @csrf
                          {{ method_field('DELETE') }}
                       </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Sub Title</th>
                  <th>Slug</th>
                  <th>Creatd At</th>
                  <th>Post Status</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

@endsection

@section('footerSection')
<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable();
  });
</script>


                     
                   

@endsection


