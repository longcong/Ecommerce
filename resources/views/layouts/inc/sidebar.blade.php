
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ url('/') }}" target="_blank">
        <img src="{{ asset('admin/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">
          Home Page</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="navbar" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <button class="nav-link text-white w3-button w3-left-align" onclick="myFunction('demo0')">
            <i class="material-icons opacity-10">dashboard</i>
              <span class="nav-link-text ms-1">Statistics</span>
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="demo0" class="w3-hide">
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('admin.dashboard') }}">
              Dashboard
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('statistics.products') }}">
              Import Statistics
            </a>
          </div>
        </li>
        <!-- Products Management -->
        <li class="nav-item">
            <button class="nav-link text-white w3-button w3-left-align" onclick="myFunction('demo1')">
              <i class="material-icons opacity-10">assignment</i>
                <span class="nav-link-text ms-1">Product Management</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div id="demo1" class="w3-hide">
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('brands.index')}}">
                Brands
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('categories.index') }}">
              Categories
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('coupons.index')}}">
              Coupons
            </a>  
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('products.index') }}">
              Products
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('tags.index') }}">
              Tags
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('import.index') }}">
              Product Import
            </a> 
          </div>
        </li>
        <!-- Orders Management -->
        <li class="nav-item">
          <button class="nav-link text-white w3-button w3-left-align" onclick="myFunction('demo2')">
            <i class="material-icons opacity-10">table_view</i>
              <span class="nav-link-text ms-1">Orders Management</span>
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="demo2" class="w3-hide">
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{route('admin.orders')}}">
              Orders
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{route('payments')}}">
              Payments
            </a> 
          </div>
        <li>
          <!-- Users Management -->
        <li class="nav-item">
          <button class="nav-link text-white w3-button w3-left-align" onclick="myFunction('demo3')">
            <i class="material-icons opacity-10">person</i>
              <span class="nav-link-text ms-1">Users Management</span>
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="demo3" class="w3-hide">
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{route('admin.users')}}">
              Users
            </a> 
          </div>
        </li>

      </ul>
    </div>
    <script>
      function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else { 
          x.className = x.className.replace(" w3-show", "");
        }
      }
    </script>

