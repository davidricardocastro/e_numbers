<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">


    <title>E numbers</title>




</head>

<body>

    <div class="container">
        <div class="row ">
            <div class="col-12 p-3 advert">
                advert
            </div>

            <div class="col-7 p-3 mx-auto text-center">
                <h1>E Numbers</h1>
                <p>E numbers are codes for substances that are permitted to be used as food additives.</p>
            </div>

            <div class="col-7 p-3 mx-auto">
                <form method="POST" action="{{URL::to('/search')}}" role="search">
                {{ csrf_field() }}
                    <label for="searchENumber">Search for an E-Number</label>
                    <div class="input-group ">

                        <input type="text" class="form-control"  placeholder="e.g.: E330" name="searchENumber" id="searchENumber">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="submit">Search</button>
                        </div>
                     </div>
                </form>
            </div>

<!--displays search results   -->
@if(isset($details))

    <div class="col-7 p-3 mx-auto">

    


    <p> search results for {{ $query }}:</p>
    @foreach($details as $enumber)

            <div class="card m-2">
                <div class="card-header">
                   Group type: {{$enumber -> group_type}}
                </div>
                <div class="card-body">
                    <h2 class="card-title">{{$enumber -> code}}</h2>
                    <h3 class="card-text">{{$enumber -> name}}</h3>
                    <p class="card-text">Details: {{$enumber -> purpose}}</p>

                    
                </div>
            </div>

    
    
    
    
    @endforeach
    </div>
    
    <!--if item not found from database display message   -->
    @elseif(isset($message))
    <div class="col-7 p-5 mx-auto">
        <p> {{ $message}} </p>
    </div>
@endif

<!--  links to be implemented:

            <div class="col-7  mx-auto p-5">
                
                <a class="badge badge-light" href="#">Colours</a>
                <a class="badge badge-light" href="#">Preservatives</a>
                <a class="badge badge-light" href="#">Antioxidants & acidity regulators</a>
                <a class="badge badge-light" href="#">Thickeners, stabilisers & emulsifiers</a>
                <a class="badge badge-light" href="#">pH regulators & anti-caking agents</a>
                <a class="badge badge-light" href="#">Flavour enhancers</a>
                <a class="badge badge-light" href="#">Miscellaneous</a>


            </div>
-->

            <div class="col-12 p-5 advert">
                advert
            </div>
        </div>
    </div>

</body>

</html>