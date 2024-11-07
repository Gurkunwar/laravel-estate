<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>

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

                        <a href="#" class="btn btn-primary">Add To Favourite</a>
                    </div>
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
