<div class="sidebar" style="width:250px">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
      <div class="logo" style="padding-top:10px; display: inline-flexbox; flex-direction: column; ">
        <a href="{{ route('dashboard.index') }}" class="simple-text logo-mini">
          WM
        </a>
        <a href="{{ route('dashboard.index') }}" class="simple-text logo-normal">
          <h3 style="font-weight: bolder">MeteranQu</h3>
        </a>
      </div>
      <style>
        .nav {
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav li {
    margin: 10px 0;
}

.nav a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #175729; /* Warna teks normal */
    padding: 10px;
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
    border-radius: 5px; /* Rounded corners */
}

.nav a:hover {
    background-color: #e0f7fa; /* Warna latar belakang saat hover */
    color: #000; /* Warna teks saat hover */
    transform: scale(1.05); /* Sedikit memperbesar ukuran saat hover */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2); /* Bayangan saat hover */
}

.nav a h4 {
    margin: 0; /* Menghapus margin default dari h4 */
}
.nav li a {
    transition: all 0.3s ease; /* Transisi halus untuk hover */
}

.nav li.active a {
    color: #175729; /* Warna teks untuk menu aktif */
    transform: scale(1.05); /* Perbesar sedikit untuk efek */
}




      </style>
      <ul class="nav">
        <li class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}">
                <i class="tim-icons icon-chart-pie-36"></i>
                <p><h4>Dashboard</h4></p>
            </a>
        </li>
        <li class="{{ request()->routeIs('status.index') ? 'active' : '' }}">
            <a href="{{ route('status.index') }}">
                <i class="tim-icons icon-mobile"></i>
                <p><h4>Status</h4></p>
            </a>
        </li>
        <li class="{{ request()->routeIs('tagihan.index') ? 'active' : '' }}">
            <a href="{{ route('tagihan.index') }}">
                <i class="tim-icons icon-puzzle-10"></i>
                <p><h4>Tabel Pelanggan</h4></p>
            </a>
        </li>
        <li class="{{ request()->routeIs('table.index') ? 'active' : '' }}">
            <a href="{{ route('table.index') }}">
                <i class="tim-icons icon-paper"></i>
                <p><h4>Tagihan Air</h4></p>
            </a>
        </li>
    </ul>
    
    
        {{-- <li>
            <li>
                <a href="{{ route('user.index') }}">
                  <i class="tim-icons icon-single-02"></i>
                  <p><h4>User Profile</h4></p>
                </a>
              </li>
            <li>
      </ul> --}}
    </div>
  </div>