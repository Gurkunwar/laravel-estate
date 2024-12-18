<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Space Hunt Properties</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--



-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="assets/css/owl.css">

  <style>
    .container .product-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 5px;
    }

    /* Additional styles for modal display */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      align-items: center;
      justify-content: center;
    }

    .modal-content {
      background: #fff;
      padding: 20px;
      border-radius: 5px;
      width: 500px;
      max-width: 100%;
    }
  </style>

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">

    @include('user.navbar')

  </header>

  <!-- Page Content -->
  <div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>new listing</h4>
            <h2>modern properties</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="filters">
            <ul>
              <li class="active " data-filter="*">
                <h3>All Properties</h3>
              </li>
              <!-- <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li> -->
            </ul>
          </div>
        </div>

        <div class="">
          <div class="container">
            <div class="row">

              @foreach ($data as $property)
              <div class="col-md-4">
                <div class="product-item">
                  <a href="#"><img src="/propertyimage/{{$property->image}}" alt=""></a>
                  <div class="down-content">
                    <a href="#">
                      <h4>{{$property->title}}</h4>
                    </a>
                    <strong>₹{{$property->price}}</strong>
                    <p>{{$property->description}}</p>
                    <b>{{$property->location}}</b>

                    <form action="{{url('addfavourite', $property->id)}}" method="post">
                      @csrf
                      <input type="submit" class="btn btn-primary" value="Add To Favourite">
                      <input type="button" class="btn btn-primary" value="Contact" onclick="toggleModal({{ $property->id }})">
                    </form>
                  </div>
                </div>
              </div>

              <!-- Contact Modal for each property -->
              <div id="contactModal{{ $property->id }}" class="modal">
                <div class="modal-content">
                  <span class="close" onclick="toggleModal({{ $property->id }})">&times;</span>
                  <h2>Contact Us for {{ $property->title }}</h2>
                  <!-- Route will dynamically include property ID -->
                  <form action="{{ url('/submitenquiry', $property->id) }}" method="post">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                    <label for="phone">Phone:</label>
                    <input type="number" name="phone" class="form-control" required>
                    <label for="message">Message:</label>
                    <textarea name="message" class="form-control" required></textarea>
                    <button type="submit" class="btn btn-primary">Send</button>
                  </form>
                </div>
              </div>
              @endforeach

              
            </div>
            
          </div>
        </div>


        <!-- <div class="col-md-12">
          <ul class="pages">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>&copy; 2024 Space Hunt Real Estate. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

  <script>
    // Function to toggle the modal visibility based on property ID
    function toggleModal(propertyId) {
      const modal = document.getElementById('contactModal' + propertyId);
      modal.style.display = modal.style.display === 'flex' ? 'none' : 'flex';
    }
  </script>


</body>

</html>