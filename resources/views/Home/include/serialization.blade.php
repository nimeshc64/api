
@extends('Home.layout')
@section('sidebar')
    @include('Home.include.sidebar')
@endsection
@section('content')
    <h2>Serialization Formats</h2>

    <p>The recipesOven Recipe API currently supports JSON
    (JavaScript Object Notation).</p>

    <h3>Requesting a Serialization Format</h3>
    <p>The API uses the HTTP "Accept" header of the request in order to determine the serialization format of the
    returned data.</p>

    <table class="hover">
        <thead>
        <tr>
            <th>Serialization Format</th>
            <th>HTTP Accept Header</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>JSON</td>
            <td>application/json</td>
        </tr>
        </tbody>
    </table>
    <hr>
@endsection