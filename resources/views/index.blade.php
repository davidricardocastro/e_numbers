<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>

    <title>E numbers</title>




</head>

<body>

    <div class="container">
        <div class="row ">
            <div class="col-12 p-3 advert">
                advert
            </div>

            <div class="col-7 p-3 mx-auto text-center">
                
                <a href="{{URL::to('/')}}"><h1>E Numbers</h1></a>
                <h2>E numbers are codes for substances that are permitted to be used as food additives.</h2>
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
                <div class="card-header">
                Group type: <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="card-body">
                    <h2 class="card-title"><i class="fas fa-exclamation-triangle"></i> </h2>
                    <h3 class="card-text">{{ $message }}</h3>
                    <p class="card-text">Details: <i class="fas fa-exclamation-triangle"></i> </p>

                </div>
       
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

            <div class="col-7 p-5 mx-auto pageLinks"><p>For more information follow these links:</p>
            
             <a class="badge badge-primary" href=" http://www.fao.org/fao-who-codexalimentarius/en/">Codex Alimentarius</a>
             <a class="badge badge-primary" href="http://www.efsa.europa.eu/">European Food Safety Authority</a> 
             <a class="badge badge-primary" href="http://www.fao.org">Food and Agriculture Organization of the United Nations</a>
            </div>
           
            <div class="col-7 p-5 mx-auto"><i class="far fa-envelope"></i> info@mail.com </div>

        </div>
    </div>

</body>

</html>