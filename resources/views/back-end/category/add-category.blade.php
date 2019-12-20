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
<div class="card mx-auto mt-5">
    <div class="card-header">Add Cateogry Form</div>
    <div class="card-body">
        <form method="POST" action="" >

            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right" for="Category_Name">Category Name : </label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <div class="row">
                        <input type="text" id="Category_Name" name="Category_Name" class="form-control" placeholder="Category Name">
                    </div>
                </div>
            </div>

            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right" for="Category_description">Category Description : </label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <div class="row">
                        <textarea name="Category_description" rows="15" id="textarea1" class="form-control"> </textarea>
                    </div>
                </div>
            </div>

            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right" for="Category_Name">Publication Status : </label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <div class="row publication_status">
                        <input type="radio" name="publication_status">Published
                        <input type="radio" name="publication_status" checked>Unpublished
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right"></label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <button type="submit" class="btn btn-primary btn-block float-right col-sm-3">Submit</button>
                </div>
            </div>

        </form>
    </div>

</div>

<canvas class="categoryChart" id="myAreaChart" width="100%" height="30"></canvas>

@endsection