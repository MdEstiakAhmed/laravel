@extends('postManagerViews.home')
@section('content')
    <h1 class="text-center">Create New Post</h1>

    <div class="container mr-5">
        <form method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="post_text" class="col-sm-2 col-form-label" style="font-size: 25px">Post Text:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="10" placeholder="Write Something..." name="post_text" id="post_text" ></textarea>
                </div>
            </div>
            <input type="submit" name="submit" value="Publish" class="btn btn-primary ml-3">
        </form>
    </div>
@endsection