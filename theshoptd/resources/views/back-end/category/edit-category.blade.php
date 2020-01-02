@extends('back-end.admin')


@section('title')
Edit
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
    <li class="breadcrumb-item active">Edit</li>
</ol>
<div> <h2 style="text-align:center">{{ Session::get('message') }} </h2></div>
<div class="card mx-auto mt-5">
    <div class="card-header"> Edit Cateogry Form </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('updateCategory') }}" accept-charset="UTF-8">
            @csrf
            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right" for="category_name">Category Name : </label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <div class="row">
                        <input type="text" id="Category_Name" name="category_name" class="form-control"
                            placeholder="Category Name" value="{{ $category->category_name }}">
                        <input type="hidden" id="category_id" name="category_id" class="form-control" value="{{ $category->id }}">
                    </div>
                </div>
            </div>

            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right" for="category_description">Category Description : </label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <div class="row">
                        <textarea name="category_description" rows="8" id="textarea1" class="form-control">{{ $category->category_description }}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right" for="publication_status">Publication Status : </label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <div class="row publication_status">
                        <input type="radio" name="publication_status" {{ $category->publication_status == 1 ? 'checked' : '' }} value="1">Published
                        <input type="radio" name="publication_status" {{ $category->publication_status == 0 ? 'checked' : '' }} value="0">Unpublished
                    </div>
                </div>
            </div>
            <div class="form-group clearfix">
                <label class="col-sm-4 float-left text-right"></label>
                <div class="col-sm-6 float-left col-sm-offset-2">
                    <input type="submit" class="btn btn-primary btn-block float-right col-sm-8" value="Update Category">
                </div>
            </div>

        </form>
    </div>
    <canvas class="canvashideChart" id="myAreaChart" width="100%" height="30"></canvas>
</div>

@endsection