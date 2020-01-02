@extends('back-end.admin')


@section('title')
Category
@endsection

@section('bodyAdmin')
<script src="https://cdn.tiny.cloud/1/jyph3oy90vtm0w8wwjl8ylgma4dj9kem40fzuj0clx1hb5e9/tinymce/5/tinymce.min.js">
</script>
<script>
tinymce.init({
    selector: '#textarea1'
});
</script>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('home') }}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Add Cateogry</li>
</ol>
<div> <h2 style="text-align:center">{{ Session::get('message') }} </h2></div>
<div class="card mx-auto mt-5">
    <div class="card-header"> Add Cateogry Form </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('saveCategory') }}" accept-charset="UTF-8">
            @csrf
            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right" for="category_name">Category Name : </label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <div class="row">
                        <input type="text" id="Category_Name" name="category_name" class="form-control"
                            placeholder="Category Name">
                    </div>
                </div>
            </div>

            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right" for="category_description">Category Description : </label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <div class="row">
                        <textarea name="category_description" rows="8" id="textarea1" class="form-control"> </textarea>
                    </div>
                </div>
            </div>

            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right" for="publication_status">Publication Status : </label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <div class="row publication_status">
                        <input type="radio" name="publication_status" value="1">Published
                        <input type="radio" name="publication_status" checked value="0">Unpublished
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right"></label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <input type="submit" class="btn btn-primary btn-block float-right col-sm-8" value="Save Category">
                </div>
            </div>

        </form>
    </div>
    <canvas class="canvashideChart" id="myAreaChart" width="100%" height="30"></canvas>
</div>

@endsection