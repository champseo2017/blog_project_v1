@extends('admin.app')
@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}">
@endsection
@section('main-content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
            </div>
            <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" name="postfrom-admin" onsubmit="return validateForm()">
              @csrf
              <div class="box-body">
                <div class="col-lg-6">
                <div class="form-group">
                  <div id="validation-1"></div>
                  <label for="title">Post Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="title">
                </div>

                <div class="form-group">
                <div id="validation-2"></div>
                  <label for="subtitle">Post Sub Title</label>
                  <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="subtitle" >
                </div>

                <div class="form-group">
                  <div id="validation-3"></div>
                  <label for="slug">Post Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                </div>
                </div>

              
                <div class="col-lg-6">
                <div class="form-group">
                <div id="validation-4"></div>
                  <label for="image">Image Url</label>
                  <input  name="image" id="image"  class="bootstrap-wysihtml5-insert-image-url form-control" data-wysihtml5-dialog-field="src">
                  
                </div>
                <p>ฝากไฟล์รูปได้ที่เว็บไซต์: <a href="https://www.picz.in.th/" target="_blank">picz.in.th</a></p>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status"> Publish
                  </label>
                </div>
                <div class="form-group" id="custome-color-select-tags">
                <label>Select Tags</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;" name="tags[]">
                  @foreach ($tags as $tag)
                  <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group" id="custome-color-select-categories">
                <label>Select Categories</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;" name="categories[]">
                  @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
                </div>
              </div>
              <!-- /.box-body -->

                 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

     <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write Post Body Here
                <small>Simple and fast</small>
             
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea id="editor1" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="body"></textarea>
              </form>
            </div>
            
          </div>
          <div  style="text-align: right;padding-right: 1%;" class="form-group">
                <button  type="submit" class="btn btn-primary">Add Post</button>
                <a href='{{ route('post.index') }}' class="btn btn-warning">Back</a>
          </div>
        </div>
        <!-- /.col-->
      
      </div>
      <!-- ./row -->

             
            </form>
          </div>
          <!-- /.box -->
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footerSection')
<!-- CK Editor -->
<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
  $( document ).ready(function() {
    $(".select2").select2();
});
$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  });
</script>
@endsection