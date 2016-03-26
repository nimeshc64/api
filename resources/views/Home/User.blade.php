<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Manage</title>
    {!! HTML::style('css/bootstrap.min.css')!!}
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
                <li class="active"><a href="../user">Current Data<span class="sr-only">(current)</span></a></li>
                <li><a href="../user/addrecipe">Add More Recipes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <a href="../user/logout" class="btn btn-danger" role="button">LogOut</a>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<br><br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-success" role="alert" style="text-align: center;">Api Key : <div style="color: black;">{{$us->token}}</div> </div>
    </div>
</div>
<br><br>

<div class="row">
    <div class="panel panel-info">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-1">
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
                    @for($i=0;$i<count($re);$i++)
                        <tr>
                            <td>{{$re[$i]->id}}</td>
                            <td>{{$re[$i]->title}}</td>
                            <td>{{$re[$i]->country}}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">
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
                    @for($a=0;$a<count($in);$a++)
                    <tr>
                            <td>{{$in[$a]->id}}</td>
                            <td>{{$in[$a]->recipe_id}}</td>
                            <td>{{$in[$a]->name}}</td>
                            <td>{{$in[$a]->unit}}</td>
                            <td>{{$in[$a]->qty}}</td>
                    </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-info">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-1">
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
                    @for($b=0;$b<count($di);$b++)
                    <tr>
                            <td>{{$di[$b]->id}}</td>
                            <td>{{$di[$b]->recipe_id}}</td>
                            <td>{{$di[$b]->steps}}</td>
                    </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
            <div class="col-md-5">
                <h3>Nutritional Data</h3>
                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Recipe_id</th>
                        <th>Nutrient</th>
                        <th>Amount</th>
                        <th>Dri/Dv(%)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($c=0;$c<count($nu);$c++)
                    <tr>
                            <td>{{$nu[$c]->id}}</td>
                            <td>{{$nu[$c]->recipe_id}}</td>
                            <td>{{$nu[$c]->nutrient}}</td>
                            <td>{{$nu[$c]->amount}}</td>
                            <td>{{$nu[$c]->dri_dv}}</td>
                    </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{!! HTML::script('js/vendor/jquery.min.js')!!}
{!! HTML::script('js/bootstrap.min.js')!!}

</body>
</html></oc>