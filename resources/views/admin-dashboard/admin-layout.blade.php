<?php
$user = Auth::user();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Ahris PH">
  <title> Ahris PH | Admin Dashboard </title>
  @extends('layouts.asset-css')
</head>

<body>
    @include('modals.admin-add-user')
  @include('layouts.side-nav')
 <!-- Main content -->
  <div class="main-content" id="panel">
    @include('layouts.topnav')
    
        <div class="container-fluid mt-6">

          @yield('content')
         
        </div>
  </div>
  @extends('admin.asset-js')
</body>

</html>
