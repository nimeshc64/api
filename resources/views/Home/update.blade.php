<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Manage</title>
    {!! HTML::style('css/bootstrap.min.css')!!}
    {!! HTML::style('css/font-awesome.min.css')!!}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        .filter-col{
            padding-left:10px;
            padding-right:10px;
        }
    </style>
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
                <li class="active"><a href="../user/updaterecipe"><i class="fa fa-upload"></i> Update Recipes</a></li>
                <li><a href="../user/deleterecipe"><i class="fa fa-times"></i> Delete Recipes</a></li>
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
            <div class="col-md-4 col-md-offset-4">
                <h4 style="">Search Recipe To Update</h4>
                <form class="form-inline" role="form" id="upForm">
                    <div class="form-group">
                        <label class="filter-col" style="margin-right:0;" for="pref-perpage">Recipe Name:</label>
                        <select id="pref-perpage" class="form-control">
                            @foreach($ids as $id)
                                <option value="{{ $id->id }}">{{$id->title}}</option>
                            @endforeach
                        </select>
                    </div> <!-- form group [rows] -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Search </button>
                    </div><!-- form group [search] -->
                </form>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2 col-md-3" style="margin-left: 5px;">
       <h5 style="text-align: center;">Recipe</h5>
        <form method="POST" action="../updateRecip">
            <input type="hidden" id="rid" name="Rid">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title"  id="Rtitle" >
            </div>
            <div class="form-group">
                <label >Country</label>
                <input type="text" class="form-control" name="country" placeholder="Country" id="Rcountry">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </form>
    </div>
    <div class="col-sm-2 col-md-3">
        <h5 style="text-align: center;">Ingredients</h5>
        <form method="POST" action="../updateIngre">
            <input type="hidden" id="iid" name="Iid">
            <div class="form-group">
                <label >Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" id="Iname">
            </div>
            <div class="form-group">
                <label >Unit</label>
                <input type="text" class="form-control" name="unit" placeholder="Unit" id="Iunit">
            </div>
            <div class="form-group">
                <label >Qty</label>
                <input type="text" class="form-control" name="qty" placeholder="Qty" id="Iqty">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </form>
    </div>
    <div class="col-sm-1 col-md-3">
       <h5 style="text-align: center;">Directions</h5>
        <form method="POST" action="../updateDirec">
            <input type="hidden" id="did" name="Did">
            <div class="form-group">
                <label >Steps</label>
                ​<textarea id="txtArea" name="steps" class="form-control" rows="7" cols="70"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </form>
    </div>
    <div class="col-sm-1 col-md-3" style="margin-left: -5px;">
       <h5 style="text-align: center;">Nutritional</h5>
        <form method="POST" action="../updateNut">
            <input type="hidden" id="nid" name="Nid">
            <div class="form-group">
                <label >Nutrient</label>
                <input type="text" class="form-control" name="nutrient" placeholder="Nutrient" id="Nnut">
            </div>
            <div class="form-group">
                <label >Amount</label>
                <input type="text" class="form-control" name="amount" placeholder="Amount" id="Namount">
            </div>
            <div class="form-group">
                <label >Dri/Dv</label>
                <input type="text" class="form-control" name="dri_dv" placeholder="Dri/Dv" id="Ndv">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </form>
    </div>
</div>


{!! HTML::script('js/vendor/jquery.min.js')!!}
{!! HTML::script('js/bootstrap.min.js')!!}

<script>
    $( '#upForm' ).on( 'submit', function(e) {
        e.preventDefault();
        var Id = $('#pref-perpage').val();
        $.ajax({
            type: "GET",
            url: '../user/getDetials',
            data: {id:Id},
            success: function( msg ) {
                $.each(msg, function (msg, t) {

                    $("#rid").val(t.Rid);
                    $("#did").val(t.Did);
                    $("#iid").val(t.Iid);
                    $("#nid").val(t.Nid);

                    $("#Rtitle").val(t.title);
                    $("#Rcountry").val(t.country);
                    $("#Iname").val(t.name);
                    $("#Iunit").val(t.unit);
                    $("#Iqty").val(t.qty);
                    $("#txtArea").text(t.steps);
                    $("#Nnut").val(t.nutrient);
                    $("#Namount").val(t.amount);
                    $("#Ndv").val(t.dri_dv);

                })
            }
        });
    });
</script>

</body>
</html>