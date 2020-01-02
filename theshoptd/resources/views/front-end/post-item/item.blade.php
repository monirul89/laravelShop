@extends('front-end.master')

@section('title')
Add Post
@endsection

@section('mainContent')
<script src="https://cdn.tiny.cloud/1/jyph3oy90vtm0w8wwjl8ylgma4dj9kem40fzuj0clx1hb5e9/tinymce/5/tinymce.min.js">
</script>
<script>
tinymce.init({
    selector: '#textarea1'
});
</script>
<div class="register register-item">
    <form>
        <div class="register-top-grid">
            <h3>YOUR ADD INFORMATION</h3>
            <hr class="hr">
            <div class="form-group">
                <div class="form-label-group add-post-item">
                    <label for="add-btn-radio">CONDITION</label>
                    <input type="radio" name="add-btn-radio">Used
                    <input type="radio" name="add-btn-radio">New
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label for="post-title">Category</label>
                    <select class="form-control" for="Items">
                        <option>Select Catetory</option>
                        <option>Select Catetory</option>
                        <option>Select Catetory</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label for="post-title">Brand</label>
                    <select class="form-control" for="Items">
                        <option>Select Brand</option>
                        <option>Select Brand</option>
                        <option id="otherBrand">Other Brand</option>
                    </select>
                </div>
            </div>

            <div class="form-group other-brand">
                <div class="form-label-group">
                    <input id="post-title" type="text" class="form-control" name="post-title" required
                        autocomplete="post-title" placeholder="For other Brand" autofocus>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <label for="post-title">Title</label>
                    <input id="post-title" type="text" class="form-control" name="post-title" required
                        autocomplete="post-title" autofocus placeholder="Title">
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <label for="post-description">Description</label>
                    <textarea id="textarea1" type="text" class="form-control" name="post-description">
                    </textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <div class="item-content">
                        <div class="post-upload">
                            <input type="hidden" name="fixture" value="">
                            <input id="image" name="image" type="file" class="ui-input" multiple="multiple"
                                accept=".jpg,.png,.jpeg">
                        </div>
                    </div>
                </div>
            </div>

            <div class="register-but">
                <input type="submit" value="submit">
                <div class="clearfix"> </div>
            </div>
        </div>
    </form>
    <div class="clearfix"> </div>

</div>
@endsection