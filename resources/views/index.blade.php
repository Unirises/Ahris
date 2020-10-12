 <!DOCTYPE html>
 <html>
 <head>
   @include('layouts.asset-css')
 </head>
 <body>

  {{-- @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      @auth
          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
      @else
          <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
          @endif
      @endif
  </div>
@endif --}}
   <!-- Navbar -->
   {{-- {{$user}} --}}
   <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-gradient-default">
     <div class="container">
       <a class="navbar-brand" href="/">
         <img src="./assets/img/brand/logo-white.png">
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
         <div class="navbar-collapse-header">
           <div class="row">
             <div class="col-6 collapse-brand">
               <a href="#">
                 <h1 class="text-default"> AHRIS PH </h1>
               </a>
             </div>
             <div class="col-6 collapse-close">
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                 <span></span>
                 <span></span>
               </button>
             </div>
           </div>
         </div>
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <a href="login" class="nav-link">
               <span class="nav-link-inner--text">Login</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="register" class="nav-link">
               <span class="nav-link-inner--text">Register</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="blogs" class="nav-link">
               <span class="nav-link-inner--text">Blogs</span>
             </a>
           </li>
         </ul>
         <hr class="d-lg-none" />
         <ul class="navbar-nav align-items-lg-center ml-lg-auto">
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
               <i class="fab fa-facebook-square"></i>
               <span class="nav-link-inner--text d-lg-none">Facebook</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
               <i class="fab fa-instagram"></i>
               <span class="nav-link-inner--text d-lg-none">Instagram</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
               <i class="fab fa-twitter-square"></i>
               <span class="nav-link-inner--text d-lg-none">Twitter</span>
             </a>
           </li>
         </ul>
       </div>
     </div>
   </nav>
   <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header bg-gradient-default pt-5 pb-7">
       <div class="container">
         <div class="header-body">
           <div class="row align-items-center">
             <div class="col-lg-6">
               <div class="pr-5">
                 <h1 class="display-2 text-white font-weight-bold mb-0">Account and Payroll Software</h1>
                 <h2 class="display-4 text-white font-weight-light">for small business.</h2>
                 <p class="text-white mt-4">Manage your business on your terms. Access your books and get
                 up-to-date financial reports anytime you choose and wherever you are.</p>
                 <div class="mt-5">
                   <a href="#" class="btn btn-neutral my-2">Try Ahris for Free</a>
                   <a href="#" class="btn btn-primary my-2">Purchase now</a>
                 </div>
               </div>
             </div>
             <div class="col-lg-6">
               <div class="row pt-5">
                 <div class="col-md-6">
                   <div class="card">
                     <div class="card-body">
                       <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4">
                         <i class="ni ni-money-coins"></i>
                       </div>
                       <h5 class="h3">Accounting</h5>
                       <p></p>
                     </div>
                   </div>
                   <div class="card">
                     <div class="card-body">
                       <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow mb-4">
                         <i class="ni ni-active-40"></i>
                       </div>
                       <h5 class="h3">Professionals</h5>
                       <p>Coming Soon</p>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-6 pt-lg-5 pt-4">
                   <div class="card mb-4">
                     <div class="card-body">
                       <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow mb-4">
                         <i class="ni ni-active-40"></i>
                       </div>
                       <h5 class="h3">Payroll</h5>
                       <p>Coming Soon</p>
                     </div>
                   </div>
                   <div class="card mb-4">
                     <div class="card-body">
                       <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow mb-4">
                         <i class="ni ni-active-40"></i>
                       </div>
                       <h5 class="h3">Resources</h5>
                       <p>Coming Soon.</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="separator separator-bottom separator-skew zindex-100">
         <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
           <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
         </svg>
       </div>
     </div>
     <section class="py-6 bg-default">
       <div class="row justify-content-center text-center">
         <div class="col-md-6">
           <h1 class="display-3 text-white">Accounting Features</h1>
            
         </div>
       </div>
     </section>
      <section class="section-nucleo-icons bg-white overflow-hidden mt-5 mb-2">
       <div class="container">
         <div class="row justify-content-center">
           <div class="col-lg-8 text-center">
             <h1 class="display-3">Tax Support Features</h1>
             <h2 class="display-5">Sales, Purchases and Importation Summary</h2>
             <p class="lead">
               Download monthly sales andpurchases summary withcomplete details for taxcompliance
             </p>
           </div>
         </div>
     </section> 
      <section class="section section-lg pt-lg-0 mt-3 text-center">
       <div class="container">
         <div class="row justify-content-center">
           <div class="col-lg-12">
             <div class="row">
               <div class="col-lg-3">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-default text-white rounded-circle mb-4">
                       <i class="fa fa-tachometer-alt"></i>
                     </div>
                     <h4 class="h3 text-primary text-uppercase">Dashboard</h4>
                     <p class="description mt-3">Provides a visual snapshot of your business financial performance.</p>
                   </div>
                 </div>
               </div>
               <div class="col-lg-3">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-default text-white rounded-circle mb-4">
                       <i class="ni ni-laptop"></i>
                     </div>
                     <h4 class="h3 text-success text-uppercase">Monitor Outstanding Receivables</h4>
                     <p class="description mt-3">Improve your cash flow bymonitoring your receivablesand reminding your customersabout their dues.</p>
                   </div>
                 </div>
               </div>
               <div class="col-lg-3">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-default text-white rounded-circle mb-4">
                       <i class="ni ni-money-coins"></i>
                     </div>
                     <h4 class="h3 text-warning text-uppercase">Manage Bills</h4>
                     <p class="description mt-3">Maintain a goodcredit by paying yourbills on time.</p>
                   </div>
                 </div>
               </div>
               <div class="col-lg-3">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-default text-white rounded-circle mb-4">
                       <i class="ni ni-box-2"></i>
                     </div>
                     <h4 class="h3 text-info text-uppercase">Track Inventory</h4>
                     <p class="description mt-3">Efficiently managequantity to avoidoverstocking andinsufficient stocks.</p>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
   </div>
   <!-- Footer -->
   <footer class="py-5" id="footer-main">
     <div class="container">
       <div class="row align-items-center justify-content-xl-between">
         <div class="col-xl-6">
           <div class="copyright text-center text-xl-left text-muted">
             &copy; <?php echo date("Y"); ?> <a href="#" class="font-weight-bold ml-1" target="_blank">Ahris.PH INC. All rights reserved.</a>
           </div>
         </div>
       </div>
     </div>
   </footer>
   @include('layouts.asset-js')
 </body>

 </html>