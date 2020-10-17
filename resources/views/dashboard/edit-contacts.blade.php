<!DOCTYPE html>
<html>

<head>
  @extends('layouts.asset-css')


</head>

<body>
  @include('layouts.user-sidenav')
 <!-- Main content -->
  <div class="main-content" id="panel">
    @include('layouts.user-topnav')
    
    <div class="container mt-5 mb-5">


      @if ($contacts[0]['type'] == 'business')
          @if ($contacts[0]['contact_type']  == 'customer')
            @include('layouts.customer-business')
          @else
          @include('layouts.supplier-business')
        @endif
          
      @else
          @if ($contacts[0]['contact_type']  == 'supplier')
             @include('layouts.supplier-individual') 
          @else
             @include('layouts.customer-individual')
        @endif
      @endif

        </div>
    </div>

   @extends('layouts.asset-js')

</body>

</html>
