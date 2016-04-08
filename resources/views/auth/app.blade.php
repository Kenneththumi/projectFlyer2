<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8"></meta>
    <title>First Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
        .div{
            margin: 50px auto;
            background-color: #eee;
            width: 300px;
            border-radius: 3px;
            padding:10px;
        }
    </style>
</head>
<body>
<div class="div">
    @yield('content')
</div>
</body>
</html>