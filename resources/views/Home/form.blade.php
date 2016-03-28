<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Manage</title>
    {!! HTML::style('css/bootstrap.min.css')!!}
    {!! HTML::style('css/font-awesome.min.css')!!}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
                <li><a href="../user"><i class="fa fa-level-down"></i> Current Data<span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="../user/addrecipe"><i class="fa fa-plus-circle"></i> Add More Recipes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user fa-lg"> {{$us->name}}</i> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="#"><b><i class="fa fa-envelope"></i> {{$us->email}}</b></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../user/logout" style="text-align: center;"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<br><br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-success" role="alert" style="text-align: center;"><i class="fa fa-key"></i> Api Key : <div style="color: black;">{{$us->token}}</div> </div>
    </div>
</div>
<br><br>

<div class="row">
    <div class="panel panel-info">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-1">
                <h2>Add Recipe</h2>
                <form method="POST" action="../api/recipe/create/{{$us->token}}">
                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label >Country</label>
                        <input type="text" class="form-control" name="country" placeholder="Country">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                </form>
            </div>
            <div class="col-md-5">
                <h2>Add Ingredients</h2>
                <form method="POST" action="../api/ingredients/create/{{$us->token}}">
                    <div class="form-group">
                        <label >Recipe Id</label>
                        <select id="recipe_id"  data-no-selected="Nothing selected" class="form-control" name="recipe_id">
                            @foreach($ids as $id)
                                <option value="{{ $id->id }}">{{ $id->id }} - {{$id->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label >Unit</label>
                        <input type="text" class="form-control" name="unit" placeholder="Unit">
                    </div>
                    <div class="form-group">
                        <label >Qty</label>
                        <input type="text" class="form-control" name="qty" placeholder="Qty">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="panel panel-info">
        <div class="panel-body">
            <div class="col-md-5 col-md-offset-1">
                <h2>Add Directions</h2>
                <form method="POST" action="../api/directions/create/{{$us->token}}">
                    <div class="form-group">
                        <label >Recipe ID</label>
                        <select id="recipe_id"  data-no-selected="Nothing selected" class="form-control" name="recipe_id">
                            @foreach($ids as $id)
                                <option value="{{ $id->id }}">{{ $id->id }} - {{$id->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Steps</label>
                        ​<textarea id="txtArea" name="steps" class="form-control" rows="7" cols="70"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                </form>
            </div>
            <div class="col-md-5">
                <h2>Add Nutritional</h2>
                <form method="POST" action="../api/nutritional/create/{{$us->token}}">
                    <div class="form-group">
                        <label >Recipe Id</label>
                        <select id="recipe_id"  data-no-selected="Nothing selected" class="form-control" name="recipe_id">
                            @foreach($ids as $id)
                                <option value="{{ $id->id }}">{{ $id->id }} - {{$id->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Nutrient</label>
                        <input type="text" class="form-control" name="nutrient" placeholder="Nutrient">
                    </div>
                    <div class="form-group">
                        <label >Amount</label>
                        <input type="text" class="form-control" name="amount" placeholder="Amount">
                    </div>
                    <div class="form-group">
                        <label >Dri/Dv</label>
                        <input type="text" class="form-control" name="dri_dv" placeholder="Dri/Dv">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                </form>
            </div>
        </div>
    </div>
</div>


{!! HTML::script('js/vendor/jquery.min.js')!!}
{!! HTML::script('js/bootstrap.min.js')!!}

</body>
</html></oc>