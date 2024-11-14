<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Dashboard</title>

  <style>
    /* Center content inside body-main */
    .body-main {
      font-size: 70px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      height: 100vh; /* Full height to center vertically */
      margin: 0;
    }

    .container {
      display: inline-flex;
      align-items: center;
      gap: 40px;
      margin-left: 10rem;
    }

    .container h3 {
      font-weight: 500;
      margin: 0;
    }
    .container a {
      text-decoration: none;
      padding: 10px 20px;
      color: #fff;
      background-color: #007bff;
      border-radius: 5px;
      font-size: 24px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    /* Hover effect for the button */
    .container a:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="body-main">
    <div class="container">
      <h3>Welcome to Admin Dashboard</h3>
      <a href="{{url('/property')}}">Get Started</a>
    </div>
  </div>
</body>

</html>
