@extends('postManagerViews.home')
@section('content')
    <div class="container mr-5">
        <form method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="searchBar" class="col-sm-2 col-form-label" style="font-size: 25px">search:</label>
                <div class="col-sm-10" onload="searchWithKey()">
                    <input type="text" onkeyup="searchWithKey()" class="form-control" placeholder="search by name or post text..." name="searchBar" id="searchBar" class="searchBar" >
                </div>
            </div>

            <div class="search-post"></div>
        </form>
    </div>
@endsection