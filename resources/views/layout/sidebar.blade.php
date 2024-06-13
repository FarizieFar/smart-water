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
      <ul class="nav">
        <li>
          <a href="{{ route('dashboard.index') }}">
            <i class="tim-icons icon-chart-pie-36"></i>
            <p><h4>Dashboard</h4></p>
          </a>
        </li>
        <li>
            <a href="{{ route('status.index') }}">
              <i class="tim-icons icon-mobile"></i>
              <p><h4>Status</h4></p>
            </a>
          </li>
            <li>
          <a href="{{ route('tagihan.index') }}">
            <i class="tim-icons icon-puzzle-10"></i>
            <p><h4>Tabel Pelanggan</h4></p>
          </a>
        </li>
        <li>
          <a href="{{ route('table.index') }}">
            <i class="tim-icons icon-paper"></i>
            <p><h4>Tagihan Air</h4></p>
          </a>
        </li>
        <li>
            <li>
                <a href="{{ route('user.index') }}">
                  <i class="tim-icons icon-single-02"></i>
                  <p><h4>User Profile</h4></p>
                </a>
              </li>
            <li>
      </ul>
    </div>
  </div>