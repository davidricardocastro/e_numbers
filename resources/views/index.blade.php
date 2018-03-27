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
        <div class="row text-center">
            <div class="col-12 p-5">
                advert
            </div>

            <div class="col-12 p-5">
                <h1>E Numbers</h1>
                <p>E numbers are codes for substances that are permitted to be used as food additives.</p>
            </div>

            <div class="col-6 p-5 mx-auto">
                <form method="GET">
                    <label for="searchENumber">Search for an E-Number</label>
                    <div class="input-group ">

                        <input type="text" class="form-control" placeholder="e.g.: E330" name="searchENumber" id="searchENumber">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button">Search</button>
                        </div>
                     </div>
                </form>
            </div>

            <div class="col-7  mx-auto p-5">
                
                <a class="badge badge-light" href="#">Colours</a>
                <a class="badge badge-light" href="#">Preservatives</a>
                <a class="badge badge-light" href="#">Antioxidants & acidity regulators</a>
                <a class="badge badge-light" href="#">Thickeners, stabilisers & emulsifiers</a>
                <a class="badge badge-light" href="#">pH regulators & anti-caking agents</a>
                <a class="badge badge-light" href="#">Flavour enhancers</a>
                <a class="badge badge-light" href="#">Miscellaneous</a>


            </div>


            <div class="col-12 p-5">
                advert
            </div>
        </div>
    </div>

</body>

</html>