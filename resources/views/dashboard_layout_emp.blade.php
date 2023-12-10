<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="moneymaven2.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="font/fontawesome/fontawesome.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/layout.css')}}" />
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!----===== Boxicons CSS ===== -->
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
	  <script src = "https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <title>Paycheck</title>
  </head>
  <body>
    @include('header_emp')
    @yield('dashboard_content_employee')
    
    <script src="{{asset('assets/js/layout.js')}}"></script>
  </body>

</html>