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

@foreach($enumbers as $enumber)
<li class="list-group-item">

<a href="{{route('enumber detail', ['id'=> $enumber->id])}}">{{$enumber->code}}</a>

 </li>

</li>
@endforeach


<div class="col">

</div>
</div>
</div>


   
</body>
</html>