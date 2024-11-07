<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest Products</h2>
                    <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
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
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Pagination Links -->
            <div class="d-flex justify-content-center ml-3">
                {!! $data->links() !!}
            </div>
        </div>
    </div>
</div>
