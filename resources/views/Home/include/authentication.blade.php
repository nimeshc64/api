
@extends('Home.layout')
@section('sidebar')
    @include('Home.include.sidebar')
@endsection
@section('content')
    <h2 id="welcome">Authentication Process</h2>

    <h3>Pass the API Key with Every Request</h3>

    <p>You'll be passing your API key, issued to you when you're approved to use the API, with every request,
    as the parameter api_key.</p>

    <p>In addition, if you'd like to do things at the recipesOven.tk user level, like see your favorites or post a review on
    behalf of a user, you'll need to pass authentication information for that recipesOven user. That's different than your
    api_key; it's an encoded version of the user account information that you'll need to put in the request header.</p>

    <p>The authentication process for this user-level part of the recipesOven API is based on the HTTP Basic Access
    Authentication method defined by RFC 1945 (Hypertext Transfer Protocol – HTTP/1.0).</p>

    <div class="row">
        <div class="col-sm-offset-4 col-md-4">
            <a href="../user/login"><button class="button radius" style="text-align:center;"><i class="fa fa-key" aria-hidden="true"></i> Get API</button></a>
        </div>
    </div>

    <hr>
@endsection