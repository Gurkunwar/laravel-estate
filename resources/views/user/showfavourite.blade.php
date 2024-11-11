<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Sixteen Clothing HTML Template</title>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files (common for all users) -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <style>
        .latest-products .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header -->
    <header>
        @include('user.navbar')
        @if (session()->has('message'))

        <div class="alert alert-success">
            {{session()->get('message')}}

            <button type="button" class="close closeBtn" data-dismiss="alert">x</button>

        </div>


        @endif
    </header>

    <div style="padding:100px;" align="center">
        <table>
            <tr style="background-color:grey;">
                <td style="padding:10px; font-size:20px;">Property Name</td>
                <td style="padding:10px; font-size:20px;">Location</td>
                <td style="padding:10px; font-size:20px;">Price</td>
                <td style="padding:10px; font-size:20px;">Action</td>
                <td style="padding:10px; font-size:20px;">Buy Property</td>
            </tr>
            @foreach ($favourite as $favourites)
            <tr style="background-color:black;">
                <td style="padding:10px; color:white;">{{$favourites->property_title}}</td>
                <td style="padding:10px; color:white;">{{$favourites->property_location}}</td>
                <td style="padding:10px; color:white;">{{$favourites->property_price}}</td>
                <td style="padding:10px; color:white;"><a class="btn btn-danger" href="{{url('deletefavourite', $favourites->id)}}">Delete</a></td>
                <td style="padding:10px; color:white;"><a class="btn btn-danger" href="">Contact Us</a></td>
            </tr>
            @endforeach
        </table>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>
</body>

</html>