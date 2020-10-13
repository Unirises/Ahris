<?php
use App\Company;
use App\CurrentCompanyLog;

$user = Auth::user();
$company = Company::where('user_id',$user->id)->get();
$currentCompanyName = Session::get('companyName');
// $currentCompanyLog = CurrentCompanyLog::where('user_id',$user->id)->get()->toArray();
// $getCompanyLog
?>
   <!-- Topnav -->
     <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="form-inline pr-3" id="navbar-dropdown">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                @if (!$currentCompanyName)
                {{'Create a new company'}}
                @else
                <li class="nav-item dropdown">
                <div class="dropdown show">
                  <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{$currentCompanyName}}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                    <p class="dropdown-item">{{$currentCompanyName}}</p>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Files</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>

                    @foreach ($company as $company_item)

                       @if ($company_item->company_name == $currentCompanyName)
                           @continue
                       @endif
                  <a class="dropdown-item" href="/user/company/{{$company_item->id}}">{{$company_item->company_name}}</a>
                    @endforeach

                    <a class="dropdown-item" href="{{route('company-create-form')}}">Add a new Company</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>

                  </div>
                </div>
                </li>
                @endif

              </div>
            </div>
            {{-- <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button> --}}
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->

                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            {{-- <li class="nav-item float-left">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

              <div class="media align-items-center">
              <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold">{{$user->firstname.' '.$user->lastname}}</span>
              </div>
            </div>
          </a>
            </li> --}}
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                   <img alt="Image placeholder" src="https://i.pinimg.com/236x/8c/5a/1d/8c5a1d217ef3690c99ed9cc06c3bc458.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{$user->firstname.' '.$user->lastname}}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="/user" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
         
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
