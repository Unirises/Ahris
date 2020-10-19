   <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="/">
          <h1 class="text-primary"> Ahris PH </h1>
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <h6 class="navbar-heading p-0 text-muted">Admin Dashboard</h6>
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{route('admin')}}">
                <i class="ni ni-laptop text-red"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

             <li class="nav-item">
              {{-- <a class="nav-link" href="{{route('admin-analytics')}}"> --}}
              <a class="nav-link" href="https://analytics.google.com/analytics/web/?authuser=4#/report-home/a180702852w249623446p231281420">
                <i class="ni ni-sound-wave text-info"></i>
                <span class="nav-link-text">Analytics</span>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="{{route('admin-web-updates')}}">
                <i class="ni ni-app text-blue"></i>
                <span class="nav-link-text">Web App Updates</span>
              </a>
            </li>

             <li class="nav-item">
              {{-- <a class="nav-link" href="{{route('admin-web-monitoring')}}"> --}}
              <a class="nav-link" target="_blank" href="https://sentry.io/organizations/ahrisph/performance/?project=5462988">
                <i class="ni ni-chart-bar-32 text-success"></i>
                <span class="nav-link-text">Website Monitoring</span>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="{{route('admin-user-control')}}">
                <i class="ni ni-circle-08 text-default"></i>
                <span class="nav-link-text">User Control</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('admin-user-authentication')}}">
                <i class="ni ni-key-25 text-gray-800"></i>
                <span class="nav-link-text">User Authentication</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('admin-transaction-overview')}}">
                <i class="ni ni-money-coins text-warning"></i>
                <span class="nav-link-text">Transaction Overview</span>
              </a>
            </li>


             <li class="nav-item">
              {{-- <a class="nav-link" href="{{route('admin-crashlogs-report')}}"> --}}
                <a class="nav-link" target="_blank" href="https://sentry.io/organizations/ahrisph/issues/?project=5462988">
              
                <i class="ni ni-tv-2 text-red"></i>
                <span class="nav-link-text">Crash Logs Report</span>
              </a>
            </li>

          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>