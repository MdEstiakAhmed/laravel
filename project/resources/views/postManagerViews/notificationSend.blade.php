@extends('postManagerViews.home')
@section('content')
    <h1 class="text-center">Send Notification</h1>

    <div class="container mr-5">
        <form method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="user_id" class="col-sm-2 col-form-label" style="font-size: 25px">user id:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" name="user_id" id="user_id" value={{$user_id}}  placeholder="user_id">
                </div>
            </div>

            @php $sender_id = session('user_id') @endphp
            <div class="form-group">
                <label for="sender_id" class="col-sm-2 col-form-label" style="font-size: 25px">sender id:</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" name="sender_id" id="sender_id" value={{session("user_id")}} placeholder="sender_id">
                </div>
            </div>

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