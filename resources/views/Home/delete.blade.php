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
                <li ><a href="../user/addrecipe"><i class="fa fa-plus-circle"></i> Add More Recipes</a></li>
                <li ><a href="../user/updaterecipe"><i class="fa fa-upload"></i> Update Recipes</a></li>
                <li class="active"><a href="../user/deleterecipe"><i class="fa fa-times"></i> Delete Recipes</a></li>
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
<br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="alert alert-success" role="alert" style="text-align: center;"><i class="fa fa-key"></i> Api Key : <div style="color: black;">{{$us->token}}</div> </div>
    </div>
</div>
<br>

<div class="row">
    <div class="panel panel-info">
        <div class="panel-body" style="text-align: center;">

            <div class="row">
                <div class="col-sm-1 col-md-offset-1 col-md-5">
                    <h4 style="">Select Recipe To Delete</h4>
                    <form class="form-inline" role="form" id="upForm" action="../deleteRecip" method="post">
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Recipes Name:</label>
                            <select id="pref-perpage" class="form-control" name="Rid">
                                @foreach($ids as $id)
                                    <option value="{{ $id->Rid }}">{{$id->title}}</option>
                                @endforeach
                            </select>
                        </div> <!-- form group [rows] -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div><!-- form group [search] -->
                    </form>
                </div>
                <div class="col-md-5">
                    <h4 style="">Select Ingredients To Delete</h4>
                    <form class="form-inline" role="form" id="upForm" action="../deleteIngre" method="post">
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Ingredients Name:</label>
                            <select id="pref-perpage" class="form-control" name="Iid">
                                @foreach($ids as $id)
                                    <option value="{{ $id->Iid }}">{{$id->name}}</option>
                                @endforeach
                            </select>
                        </div> <!-- form group [rows] -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div><!-- form group [search] -->
                    </form>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-md-offset-1 col-md-5">
                    <h4 style="">Select Directions To Delete</h4>
                    <form class="form-inline" role="form" id="upForm" action="../deleteDirec" method="post">
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Directions Name:</label>
                            <select id="pref-perpage" class="form-control" name="Did">
                                @foreach($ids as $id)
                                    <option value="{{ $id->Did }}">{{$id->steps}}</option>
                                @endforeach
                            </select>
                        </div> <!-- form group [rows] -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div><!-- form group [search] -->
                    </form>
                </div>
                <div class="col-md-5">
                    <h4 style="">Select Nutritional To Delete</h4>
                    <form class="form-inline" role="form" id="upForm" action="../deleteNut" method="post">
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-perpage">Nutritionals Name:</label>
                            <select id="pref-perpage" class="form-control" name="Nid">
                                @foreach($ids as $id)
                                    <option value="{{ $id->Nid }}">{{$id->nutrient}}</option>
                                @endforeach
                            </select>
                        </div> <!-- form group [rows] -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </div><!-- form group [search] -->
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

{!! HTML::script('js/vendor/jquery.min.js')!!}
{!! HTML::script('js/bootstrap.min.js')!!}

</body>
</html></oc>