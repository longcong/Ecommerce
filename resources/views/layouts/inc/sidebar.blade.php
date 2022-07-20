
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="{{ asset('admin/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">
          PC COVID</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="navbar" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('admin.dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1 ">Dashboard</span>
          </a>
        </li>
          <div class="dropdown show">
              <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Product Management
              </a>

              <div class="dropdown-menu" style="margin-left:30px;" aria-labelledby="dropdownMenuLink">
                  <a class=" dropdown-item" href="{{ route('products.index') }}">
                    Products
                  </a>
                  <a class="dropdown-item" href="{{ route('categories.index') }}">
                    Categories
                  </a>
                  <a class="dropdown-item" href="{{ route('tags.index') }}">
                    Tags
                  </a>  
              </div>
          </div>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('admin/coupons')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class="material-icons opacity-10">view_in_ar</i> -->
            </div>
            <span class="nav-link-text ms-1">Coupons</span>
          </a>
        </li>

        <div class="dropdown show">
              <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Orders Management
              </a>

              <div class="dropdown-menu" style="margin-left:30px;" aria-labelledby="dropdownMenuLink">
                  <a class=" dropdown-item" href="{{route('admin.orders')}}">
                    Orders
                  </a>
                  <a class="dropdown-item" href="{{route('payments')}}">
                    Payments
                  </a> 
              </div>
          </div>

          <div class="dropdown show">
              <a class="nav-link text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Users Management
              </a>

              <div class="dropdown-menu" style="margin-left:30px;" aria-labelledby="dropdownMenuLink">
                  <a class=" dropdown-item" href="{{route('admin.users')}}">
                    Users
                  </a> 
              </div>
          </div>

      </ul>
    </div>

