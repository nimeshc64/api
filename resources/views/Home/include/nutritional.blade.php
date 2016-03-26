
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

    <h3 id="view_type">Nutritional</h3>

    <p> As they say: You cannot improve what you cannot measure; but the paradox is you
        cannot measure everything – happiness, hatred, anger… but you can measure customer
        satisfaction. Yes, you can measure customer satisfaction by analyzing likes and
        dislikes of your customers. You can gauge popularity of your website or products.
        You can also:</p>

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
            <td>nutritional</td>
            <td>yes</td>
            <td>yes</td>
            <td>yes</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>Creating a Nutritional (HTTP POST)</h4>
    <div class="callout code"><p>POST http://recipesoven.tk/api/nutritional/create/{apiKey}</p></div>
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
            <td>nutrient</td>
            <td>Name of the Nutrient</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>amount</td>
            <td>Amount of the nutrient (mcg,g,mg)</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>dri/dv</td>
            <td>dri/dv of the nutrient (%)</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>Updating a Nutritional (HTTP PUT)</h4>
    <div class="callout code"><p>PUT http://recipesoven.tk/api/nutritional/update/{id}/{apiKey}</p></div>
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
            <td>ID of the nutrient</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>recipe_id</td>
            <td>ID of the Recipe</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>nutrient</td>
            <td>Name of the Nutrient</td>
            <td>no</td>
        </tr>
        <tr>
            <td>amount</td>
            <td>Amount of the nutrient (mcg,g,mg)</td>
            <td>no</td>
        </tr>
        <tr>
            <td>dri/dv</td>
            <td>dri/dv of the nutrient (%)</td>
            <td>no</td>
        </tr>
        </tbody>
    </table>

    <h4>Deleting a Nutritional (HTTP DELETE)</h4>
    <div class="callout code"><p>DELETE http://recipesoven.tk/api/nutritional/delete/{id}/{apiKey}</p></div>
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
            <td>nutrient ID Number</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>GET a Nutritional By ID (HTTP GET)</h4>
    <div class="callout code"><p>GET http://recipesoven.tk/api/nutritional/{id}/{apiKey}</p></div>
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
            <td>nutrient ID Number</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>


    <h4>Example</h4>
    <p>Here's a sample call to /recipe?rid=530115. JSON format is shown. Be sure to set "Accept" and
        "Content-Type" headers in your request to "application/json",
        otherwise you'll get back XML.</p>

    here's a simple recipe search:
    <pre class="prettyprint">&lt;script&gt;
       $(document).ready(function () {
        var url="http://recipesoven.tk/api/";
        var api_key="xxxxxxxxxx";
        var ID=1;
          $.ajax({
              url: url+"nutritional/"+ID+"/"+api_key,
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