<!DOCTYPE html>
<html lang="en">

<head>
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

            <form action="{{url('uploadproperty')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div style="padding:15px;">
                    <label for="">Property title</label>

                    <input type="text" name="title" placeholder="Give a property title">
                </div>
                <div style="padding:15px;">
                    <label for="">Price</label>

                    <input type="number" name="price" placeholder="Give a price">
                </div>
                <div style="padding:15px;">
                    <label for="">Description</label>

                    <input type="text" name="des" placeholder="Give a description">
                </div>
                <div style="padding:15px;">
                    <label for="">Location</label>

                    <input type="text" name="location" placeholder="Give a location">
                </div>
                <div style="padding:15px;">
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