@extends('postManagerViews.home')
@section('content')
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="first_name" class="col-sm-2 col-form-label" style="font-size: 25px">First Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="first_name" id="first_name" value={{$userInfo->first_name}}  placeholder="Password">
                </div>
                @error('first_name')
                    <span class="ml-3 text-danger" style="font-size: 15px">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="last_name" class="col-sm-2 col-form-label" style="font-size: 25px">Last Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="last_name" id="last_name" value={{$userInfo->last_name}}  placeholder="Password">
                </div>
                @error('last_name')
                    <span class="ml-3 text-danger" style="font-size: 15px">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 col-form-label" style="font-size: 25px">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" id="email" value={{$userInfo->email}} placeholder="Password">
                </div>
                @error('email')
                    <span class="ml-3 text-danger" style="font-size: 15px">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone" class="col-sm-2 col-form-label" style="font-size: 25px">Phone:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" id="phone" value={{$userInfo->phone}}  placeholder="Password">
                </div>
                @error('phone')
                    <span class="ml-3 text-danger" style="font-size: 15px">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="bio" class="col-sm-2 col-form-label" style="font-size: 25px">Bio:</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" rows="5" placeholder="bio" name="bio" id="bio" >{{$userInfo->bio}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="website" class="col-sm-2 col-form-label" style="font-size: 25px">Website</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Password" name="website" id="website" value={{$userInfo->website}}>
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="col-sm-2 col-form-label" style="font-size: 25px">Address:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="5" placeholder="address" name="address" id="address">{{$userInfo->address}}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="image" class="col-sm-4 col-form-label" style="font-size: 25px">Profile picture</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control-file" name="image" id="image" value='' style="font-size: 15px">
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-2 col-form-label" style="font-size: 25px">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                @error('password')
                    <span class="ml-3 text-danger" style="font-size: 15px">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="re_password" class="col-sm-4 col-form-label" style="font-size: 25px">Re-Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Password">
                </div>
                @error('re_password')
                    <span class="ml-3 text-danger" style="font-size: 15px">{{$message}}</span>
                @enderror
            </div>

            <input type="submit" name="submit" value="edit info" class="btn btn-primary ml-3">
        </form>
    </div>
@endsection