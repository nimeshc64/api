<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Manage</title>
    @include('Home.include.header')
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Recipes Oven</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a href="#" class="btn btn-danger" role="button">LogOut</a>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<br><br><br>

<div class="row">
    <div class="col-sm-12 col-sm-offset-4">

        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Recipe Data</h3>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Country</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    </tbody>
                </table>

                <h3>Ingredients Data</h3>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Recipe_id</th>
                        <th>Name</th>
                        <th>Unit</th>
                        <th>Qty</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                    </tr>

                    </tbody>
                </table>

                <h3>Directions Data</h3>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Recipe Id</th>
                        <th>Steps</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>

                    </tbody>
                </table>

                <h3>Nutritional Data</h3>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Recipe_id</th>
                        <th>Nutrient</th>
                        <th>Amount</th>
                        <th>Dri/Dv</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                        <td>john@example.com</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{$i[0]->id}}
{{--<div class="row">--}}
    {{--<div class="col-md-12 col-md-offset-3">--}}
        {{--<h2>Add Details</h2>--}}
        {{--<form method="POST" action="api/recipe/create/dgdfsd">--}}
            {{--<div class="form-group">--}}
                {{--<label >Title</label>--}}
                {{--<input type="text" class="form-control" name="title" placeholder="Title">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<label >Country</label>--}}
                {{--<input type="text" class="form-control" name="country" placeholder="Password">--}}
            {{--</div>--}}

            {{--<button type="submit" class="btn btn-default">Submit</button>--}}
        {{--</form>--}}
    {{--</div>--}}
{{--</div>--}}
@include('Home.include.script')
</body>
</html></oc>