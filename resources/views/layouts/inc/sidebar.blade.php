
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ url('/') }}" target="_blank">
        <img src="{{ asset('admin/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">
         Trang chủ</span>
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
            <span class="nav-link-text ms-1 ">Thông kê</span>
          </a>
        </li>
        <!-- Products Management -->
        <li class="nav-item">
            <button class="nav-link text-white w3-button w3-left-align" onclick="myFunction('demo1')">
              <i class="material-icons opacity-10">assignment</i>
                <span class="nav-link-text ms-1">Quản lý Sản phẩm</span>
              <i class="fa fa-caret-down"></i>
            </button>
            <div id="demo1" class="w3-hide">
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('brands.index')}}">
                Nhãn Hàng
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('categories.index') }}">
              Danh Mục
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('coupons.index')}}">
              Mã Giảm Giá
            </a>  
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('products.index') }}">
              Sản Phẩm
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('tags.index') }}">
              Nhãn Hiệu
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('fabric.index') }}">
              Chất Liệu
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{ route('import.index') }}">
              Nhập Hàng Hóa
            </a> 
          </div>
        </li>
        <!-- Orders Management -->
        <li class="nav-item">
          <button class="nav-link text-white w3-button w3-left-align" onclick="myFunction('demo2')">
            <i class="material-icons opacity-10">table_view</i>
              <span class="nav-link-text ms-1">Quản lý Đơn hàng</span>
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="demo2" class="w3-hide">
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{route('admin.orders')}}">
              Đặt Hàng
            </a>
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{route('payments')}}">
              Thanh Toán
            </a> 
          </div>
        <li>
          <!-- Users Management -->
        <li class="nav-item">
          <button class="nav-link text-white w3-button w3-left-align" onclick="myFunction('demo3')">
            <i class="material-icons opacity-10">person</i>
              <span class="nav-link-text ms-1">Quản lý Tài khoản</span>
            <i class="fa fa-caret-down"></i>
          </button>
          <div id="demo3" class="w3-hide">
            <a class="nav-link text-white w3-button w3-block w3-left-align" href="{{route('admin.users')}}">
              Tài khoản
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

