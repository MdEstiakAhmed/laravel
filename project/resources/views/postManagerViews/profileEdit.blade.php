@extends('postManagerViews.home')
@section('content')
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="first_name" class="col-sm-2 col-form-label">first name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="first_name" id="first_name" value={{$userInfo->first_name}}  placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="last_name" class="col-sm-2 col-form-label">last name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="last_name" id="last_name" value={{$userInfo->last_name}}  placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" value={{$userInfo->email}} placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" id="phone" value={{$userInfo->phone}}  placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="bio" class="col-sm-2 col-form-label">Bio:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bio" id="bio" value={{$userInfo->bio}}  placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="website" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="website" id="website" value={{$userInfo->website}}  placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="image" class="col-sm-4 col-form-label">Profile picture</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="image" id="image" value={{$userInfo->image}}>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="re_password" class="col-sm-4 col-form-label">Re-Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Password">
                </div>
            </div>
            <input type="submit" name="submit" value="edit info" class="btn btn-primary ml-3">
        </form>
    </div>
@endsection