
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
              <!-- <i class="material-icons opacity-10">dashboard</i> -->
            </div>
            <span class="nav-link-text ms-1 ">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('products.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('categories.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class="material-icons opacity-10">person</i> -->
            </div>
            <span class="nav-link-text ms-1">Categories</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('tags.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class="material-icons opacity-10">person</i> -->
            </div>
            <span class="nav-link-text ms-1">Tags</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('admin/coupons')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class="material-icons opacity-10">person</i> -->
            </div>
            <span class="nav-link-text ms-1">Coupons</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('admin/orders')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <!-- <i class="material-icons opacity-10">person</i> -->
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('admin/users')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div>

