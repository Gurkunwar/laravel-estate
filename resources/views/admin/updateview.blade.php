<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.css')
    <style>
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            color: black;
            background-color: white;
        }

        .closeBtn {
            background: red;
            border: 1px solid;
            width: 20px;
            border-radius: 5px;
            margin-left: 2rem;
        }
    </style>
</head>

<body>

    @include('admin.sidebar')

    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
            <h1 class="title">Add Property</h1>

            @if (session()->has('message'))

            <div class="alert alert-success">
                {{session()->get('message')}}

                <button type="button" class="close closeBtn" data-dismiss="alert">x</button>


            </div>


            @endif

            <form action="{{url('updateproperty', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div style="padding:15px;">
                    <label for="">Property title</label>

                    <input type="text" name="title" value="{{$data->title}}">
                </div>
                <div style="padding:15px;">
                    <label for="">Price</label>

                    <input type="number" name="price" value="{{$data->price}}">
                </div>
                <div style="padding:15px;">
                    <label for="">Description</label>

                    <input type="text" name="des" value="{{$data->description}}">
                </div>
                <div style="padding:15px;">
                    <label for="">Location</label>

                    <input type="text" name="location" value="{{$data->location}}">
                </div>
                <div style="padding:15px;">
                    <label>Old Image</label>

                    <img height="100" width="100" src="/propertyimage/{{$data->image}}">
                </div>
                <div style="padding:15px;">
                    <label>Change the image</label>
                    <input type="file" name="file">
                </div>
                <div style="padding:15px;">
                    <input class="btn btn-success" type="submit">
                </div>
            </form>
        </div>


    </div>

    <!-- partial -->

    @include('admin.script')
</body>

</html>