<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('/') }}/back-end/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ asset('/') }}/back-end/assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    @yield('loginBody')
    
  </div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('/') }}/back-end/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('/') }}/back-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('/') }}/back-end/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
