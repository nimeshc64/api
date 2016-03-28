<!DOCTYPE html>
<html>
    <head>
       @include('Home.include.header')
    </head>
    <body>
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,200' rel='stylesheet' type='text/css'>
    <style>
        body{
            font-family: 'Catamaran', sans-serif;
        }
        .button{
            font-size: 15px;;
        }
    </style>
    <div class="wrapper">
        <nav>

            <div class="pull-left">
                <h1><a href="javascript:"><img src="img/icon.png" alt="Free Documentation Template Icon" /> <span style="font-size: .5em;">Documentation</span></a></h1>
            </div>

            <div class="pull-right" style="padding-top:5px; padding-right: 5px;">
                <a href="user" class="success  button"><i class="fa fa-cogs"></i> My Console</a>

                <?php
                session_start();
                if(!empty($_SESSION['userid']))
                {
                    echo '<a href="../user/logout" class="button"><i class="fa fa-sign-out"></i> LogOut</a>';
                }
                else
                {
                    echo '<a href="../user/login" class="button secondary"><i class="fa fa-sign-in"></i> LogIn</a>';
                }
                ?>

            </div>

        </nav>
        <header style="background-color:#ea6153";>
            <div class="container">
                <h2 class="lone-header">Recipes Oven</h2>
            </div>
        </header>

        <section>
            <div class="container">

               @include('Home.include.sidebar')
                <div class="docs-content">
                @yield('content')
                </div>
               {{--@include('Home.include.content')--}}
            </div>
        </section>

        <footer>
            <div class="">
                <p> &copy; Copyright NimeshChathuranga. All Rights Reserved.</p>
            </div>
        </footer>
    </div>

    @include('Home.include.script')
    </body>

</html>
