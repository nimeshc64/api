<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation Starter Template</title>
    {!! HTML::style('css/foundation.min.css')!!}
</head>
<body>
<h1>Hello, world!</h1>

@yield('aa')



{!! HTML::script('js/vendor/jquery.min.js')!!}
{!! HTML::script('js/vendor/what-input.min.js')!!}
{!! HTML::script('js/foundation.min.js')!!}
{!! HTML::script('js/app.js')!!}
<script>
    $(document).foundation();
</script>

</body>
</html>