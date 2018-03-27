<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">

            <h4>{{$enumber->group_type}}</h4>

            <h1>{{$enumber->code}}</h1>


            <h2>{{$enumber->name}}</h2>

            <h3>{{$enumber->purpose}}</h3>
        </div>
    </div>
</div>










</body>
</html>

