<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest Properties</h2>
                        <a href="{{url('/ourproperties')}}">view all properties <i class="fa fa-angle-right"></i></a>

                        <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding:10px;">
                            @csrf
                            <input class="form-control" type="search" name="search" placeholder="search">
                            <input type="submit" value="Search" class="btn btn-success">
                        </form>
                    </div>
                </div>

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
                                <!-- Pass property ID to toggleModal function -->
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

                @if (method_exists($data, 'links'))
                <!-- Pagination Links -->
                <div class="d-flex justify-content-center ml-3">
                    {!! $data->links() !!}
                </div>
                @endif
            </div>
        </div>
    </div>

    <script>
        // Function to toggle the modal visibility based on property ID
        function toggleModal(propertyId) {
            const modal = document.getElementById('contactModal' + propertyId);
            modal.style.display = modal.style.display === 'flex' ? 'none' : 'flex';
        }
    </script>

</body>

</html>