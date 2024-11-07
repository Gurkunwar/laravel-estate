<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style>
        .closeBtn {
            background: red;
            border: 1px solid;
            width: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    @include('admin.sidebar')

    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
        <div class="container" align="center">

            @if (session()->has('message'))

            <div class="alert alert-success">
                {{session()->get('message')}}

                <button type="button" class="close closeBtn" data-dismiss="alert">x</button>


            </div>


            @endif

            <table>
                <tr style="background-color:grey;">
                    <td style="padding:20px;">Title</td>
                    <td style="padding:20px;">Description</td>
                    <td style="padding:20px;">Location</td>
                    <td style="padding:20px;">Price</td>
                    <td style="padding:20px;">Image</td>
                    <td style="padding:20px;">Update</td>
                    <td style="padding:20px;">Delete</td>
                </tr>

                @foreach ($data as $property)


                <tr align="center" style="background-color:black;">
                    <td>{{$property->title}}</td>
                    <td>{{$property->description}}</td>
                    <td>{{$property->location}}</td>
                    <td>{{$property->price}}</td>
                    <td><img height="100" width="100" src="/propertyimage/{{$property->image}}" alt=""></td>
                    <td>
                        <a class="btn btn-primary" href="">Update</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{url('deleteproperty', $property->id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!-- partial -->

    @include('admin.script')
</body>

</html>