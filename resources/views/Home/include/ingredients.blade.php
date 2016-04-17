
@extends('Home.layout')
@section('sidebar')
    @include('Home.include.sidebar')
@endsection
@section('content')
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <style>
        .table tfoot td, table tfoot th, table thead td, table thead th{
            font-weight: 100;
        }
        .code{
            font-family: Menlo,Monaco,Consolas,"Courier New",monospace;
            font-size: 14px;
        }
        td{
            font-size: 14px;
        }
    </style>

    <h3 id="view_type">Ingredients</h3>

    <p>
        The ingredients List object refers to the collection of ingredients list items for a RecipesOven user.
        The following methods are supported for the ingredients list object.
    </p>

    <table class="hover">
        <thead>
        <tr>
            <th></th>
            <th>CREATE</th>
            <th>READ</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>ingredients</td>
            <td>yes</td>
            <td>yes</td>
            <td>yes</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>Creating a Ingredients (HTTP POST)</h4>
    <div class="callout code"><p>POST http://recipesoven.tk/api/ingredients/create/{apiKey}</p></div>
    <table class="hover">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required?</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>recipe_id</td>
            <td>ID of the Recipe</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>name</td>
            <td>Name of the Ingredient</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>unit</td>
            <td>Unit of the Ingredient (cup, TBS)</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>qty</td>
            <td>Quantity of the Ingredient</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>Updating a Ingredients (HTTP PUT)</h4>
    <div class="callout code"><p>PUT http://recipesoven.tk/api/ingredients/update/{id}/{apiKey}</p></div>
    <table class="hover">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required?</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>id</td>
            <td>ingredients ID Number</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>recipe_id</td>
            <td>ID of the Recipe</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>name</td>
            <td>Name of the Ingredient</td>
            <td>no</td>
        </tr>
        <tr>
            <td>unit</td>
            <td>Unit of the Ingredient (cup, TBS)</td>
            <td>no</td>
        </tr>
        <tr>
            <td>qty</td>
            <td>Quantity of the Ingredient</td>
            <td>no</td>
        </tr>
        </tbody>
    </table>

    <h4>Deleting a Ingredients (HTTP DELETE)</h4>
    <div class="callout code"><p>DELETE http://recipesoven.tk/api/ingredients/delete/{id}/{apiKey}</p></div>
    <table class="hover">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required?</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>id</td>
            <td>ingredients ID Number</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>GET a Ingredients By ID (HTTP GET)</h4>
    <div class="callout code"><p>GET http://recipesoven.tk/api/ingredients/{id}/{apiKey}</p></div>
    <table class="hover">
        <thead>
        <tr>
            <th>Parameter</th>
            <th>Description</th>
            <th>Required?</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>id</td>
            <td>ingredients ID Number</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>



    <h4>Example</h4>
    <p>Here's a sample call to /ingredients/id=1. JSON format is shown. Be sure to set "Accept" and
        "Content-Type" headers in your request to "application/json"</p>

    here's a simple ingredients search:
    <pre class="prettyprint">&lt;script&gt;
    $(document).ready(function () {
        var url="http://recipesoven.tk/api/";
        var api_key="xxxxxxxxxx";
        var ID=1;
          $.ajax({
              url: url+"ingredients/"+ID+"/"+api_key,
              type: "GET",
              success: function (e) {
                  $.each(e, function (e, t) {
                      alert('success');
                  })
              },
              error: function (e) {
                   alert('Error!');
              }
          })
      })
&lt;/script&gt;</pre>

    <hr>
@endsection