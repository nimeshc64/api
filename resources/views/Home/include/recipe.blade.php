
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

    <h3 id="view_type">Recipes</h3>

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
            <td>Recipe</td>
            <td>yes</td>
            <td>yes</td>
            <td>yes</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>Creating a Recipe (HTTP POST)</h4>
    <div class="callout code"><p>POST http://recipesoven.tk/api/recipe/create/{apiKey}</p></div>
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
            <td>title</td>
            <td>Title Of the Recipe</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>country</td>
            <td>Contry of Recip Own</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>Updating a Recipe (HTTP PUT)</h4>
    <div class="callout code"><p>PUT http://recipesoven.tk/api/recipe/update/{id}/{apiKey}</p></div>
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
            <td>Recipe Id Number</td>
            <td>yes</td>
        </tr>
        <tr>
            <td>title</td>
            <td>Title Of the Recipe</td>
            <td>no</td>
        </tr>
        <tr>
            <td>country</td>
            <td>Contry of Recip Own</td>
            <td>no</td>
        </tr>
        </tbody>
    </table>

    <h4>Deleting a Recipe (HTTP DELETE)</h4>
    <div class="callout code"><p>DELETE http://recipesoven.tk/api/recipe/delete/{id}/{apiKey}</p></div>
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
            <td>Recipe Id Number</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>GET a Recipe By ID (HTTP GET)</h4>
    <div class="callout code"><p>GET http://recipesoven.tk/api/recipe/{id}/{apiKey}</p></div>
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
            <td>Recipe Id Number</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>GET a Recipe By TITLE (HTTP GET)</h4>
    <div class="callout code"><p>GET http://recipesoven.tk/api/recipe/{title}</p></div>
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
            <td>Title</td>
            <td>Recipe Title</td>
            <td>yes</td>
        </tr>
        </tbody>
    </table>

    <h4>Example</h4>
        <p>Here's a sample call to /recipe/1. JSON format is shown. Be sure to set "Accept" and
        "Content-Type" headers in your request to "application/json",
        otherwise you'll get back XML.</p>

        here's a simple recipe search:
        <pre class="prettyprint">&lt;script&gt;
      	function getRecipeJson() {
        var title = "lasagna";
        var url = "http://recipesoven.tk/api/recipe/"
                  + title;
        $.ajax({
            type: "GET",
            dataType: 'json',
            cache: false,
            url: url,
            success: function (data) {
                alert('success');
                //console.log(data);
            }
        });
    }
&lt;/script&gt;</pre>

    <hr>
@endsection