<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>

    @include('admin.sidebar')

    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <div class="container" align="center">
            <table>
                <tr style="background-color:grey;">
                    <td style="padding:20px;">Customer Name</td>
                    <td style="padding:20px;">Phone</td>
                    <td style="padding:20px;">Address</td>
                    <td style="padding:20px;">Property Title</td>
                    <td style="padding:20px;">Location</td>
                    <td style="padding:20px;">Price</td>
                    <td style="padding:20px;">Status</td>
                    <td style="padding:20px;">Action</td>
                </tr>
                {{-- @foreach ($enquiry as $enquiries)
                <tr style="background-color:black;" align="center">
                    <td style="padding:20px;">{{$enquiries->name}}</td>
                    <td style="padding:20px;">{{$enquiries->email}}</td>
                    <td style="padding:20px;">{{$enquiries->phone}}</td>
                    <td style="padding:20px;">{{$enquiries->message}}</td>
                    <td style="padding:20px;">{{$enquiries->created_at}}</td>
                    <td style="padding:20px;">Pending</td>
                    <td style="padding:20px;"><a href="{{url('updatestatus', $enquiries->$id)}}" class="btn btn-success">Resolve</a></td>
                </tr>
                @endforeach --}}

            </table>
        </div>
    </div>
    <!-- partial -->

    @include('admin.script')
</body>

</html>