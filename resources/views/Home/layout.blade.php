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
    </style>
    <div class="wrapper">
        <nav>

            <div class="pull-left">
                <h1><a href="javascript:"><img src="img/icon.png" alt="Free Documentation Template Icon" /> <span style="font-size: .5em;">Documentation</span></a></h1>
            </div>

            <div class="pull-right">
                <a href="user" class="success  button">My Console</a>
                <a href="about.html" class="secondary  button">LogIn</a>
                {{--<a href="http://frittt.com/free-documentation-html-template-docweb" target="_blank" class="btn btn-download"><img src="img/download.png" width="25" alt="Download Free Documentation Template" /> Download Now</a>--}}
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
