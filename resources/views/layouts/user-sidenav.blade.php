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
          <h6 class="navbar-heading p-0 text-muted">User Dashboard</h6>
          <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="{{route('user')}}">
                <i class="ni ni-laptop text-red"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="sales">
                <i class="ni ni-sound-wave text-info"></i>
                <span class="nav-link-text">Sales</span>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="purchases">
                <i class="ni ni-app text-blue"></i>
                <span class="nav-link-text">Purchases</span>
              </a>
            </li>

             <li class="nav-item">
             <a class="nav-link" href="{{route('user-accounting')}}">
                <i class="ni ni-chart-bar-32 text-success"></i>
                <span class="nav-link-text">Accounting</span>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="reports">
                <i class="ni ni-circle-08 text-default"></i>
                <span class="nav-link-text">Reports</span>
              </a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="{{route('user-contacts')}}">
                <i class="ni ni-key-25 text-gray-800"></i>
                <span class="nav-link-text">Contacts</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="taxes">
                <i class="ni ni-money-coins text-warning"></i>
                <span class="nav-link-text">Taxes</span>
              </a>
            </li>


             <li class="nav-item">
              <a class="nav-link" href="settings">
                <i class="ni ni-settings-gear-65 text-red"></i>
                <span class="nav-link-text">Settings</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
        </div>
      </div>
    </div>
  </nav>
