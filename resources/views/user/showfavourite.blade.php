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
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2>Sixteen <em>Clothing</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="products.html">Our Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>

                        <!-- Authentication Links -->
                        @if (Route::has('login'))
                        @auth


                        <!-- Navigation link with count display for authenticated users -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('showfavourite') }}">
                                Favourites [{{ $count ?? 0 }}]
                            </a>
                        </li>


                        <!-- If logged in, show logout link -->
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                        @else
                        <!-- If not logged in, show login and register links -->
                        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                        @if (Route::has('register'))
                        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                        @endif
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
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
            </tr>
            @foreach ($favourite as $favourites)
            <tr style="background-color:black;">
                <td style="padding:10px; color:white;">{{$favourites->property_title}}</td>
                <td style="padding:10px; color:white;">{{$favourites->property_location}}</td>
                <td style="padding:10px; color:white;">{{$favourites->property_price}}</td>
                <td style="padding:10px; color:white;"><a class="btn btn-danger" href="{{url('deletefavourite', $favourites->id)}}">Delete</a></td>
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