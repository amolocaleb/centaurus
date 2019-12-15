
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   

<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 <link href="{{'/css/admin.min.css'}}" rel="stylesheet" type="text/css">
 

</head>

<body id="page-top">
<!-- Page Wrapper -->
  <div id="wrapper">

    @include('partials.admin.sidebar')

  @yield('content')

  </div>


  @include('partials.scripts') 

</body>

</html>
