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
            @if (session()->has('message'))

            <div class="alert alert-success">
                {{session()->get('message')}}

                <button type="button" class="close closeBtn" data-dismiss="alert">x</button>


            </div>


            @endif
            <table>
                <tr style="background-color:grey;">
                    <td style="padding:20px;">Customer Name</td>
                    <td style="padding:20px;">Email</td>
                    <td style="padding:20px;">Phone</td>
                    <td style="padding:20px;">Message</td>
                    <td style="padding:20px;">Property Title</td>
                    <td style="padding:20px;">Status</td>
                    <td style="padding:20px;">Action</td>
                </tr>
                @foreach ($enquiry as $enquiries)
                <tr style="background-color:black;" align="center">
                    <td style="padding:20px;">{{$enquiries->name}}</td>
                    <td style="padding:20px;">{{$enquiries->email}}</td>
                    <td style="padding:20px;">{{$enquiries->phone}}</td>
                    <td style="padding:20px;">{{$enquiries->message}}</td>
                    <td style="padding:20px;">{{$enquiries->property_name}}</td>
                    <td style="padding:20px;">{{$enquiries->status}}</td>
                    <td style="padding:20px;"><a href="{{url('updatestatus', $enquiries->id)}}" class="btn btn-success">Resolve</a></td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
    <!-- partial -->

    @include('admin.script')
</body>

</html>