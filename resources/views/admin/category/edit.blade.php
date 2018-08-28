@extends('admin.app')
@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
         <!-- general form elements -->
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('category.update',$category->id) }}" method="post" name="category-admin" onsubmit="return validateFormcategory()">
            @csrf
              {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                <div id="validation-1"></div>
                  <label for="name">Category Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Category Title" value={{ $category->name }}>
                </div>
                <div class="form-group">
                <div id="validation-2"></div>
                  <label for="slug">Category Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Category Slug" value={{ $category->slug }}>
                
                </div>
                <div class="form-group">
                <button  type="submit" class="btn btn-primary">Submit</button>
                <a href='{{ route('category.index') }}' class="btn btn-warning">Back</a>
                </div>
                </div>
              </div>
              
            </form>
          </div>
          <!-- /.box -->
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection