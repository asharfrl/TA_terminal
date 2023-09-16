  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="/Dashboard">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
        </li>
    @if (auth()->user()->level == 'Admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="/dataPetugas">
          <i class="bi bi-diagram-3"></i>
          <span>Data Petugas</span>
        </a>
      </li>

    @elseif (auth()->user()->level == 'Petugas')

    @endif

      <li class="nav-item">
        <a class="nav-link collapsed" href="/Profile">
          <i class="bi bi-person-fill"></i>
          <span>Profile</span>
        </a>
      </li>

    {{-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-arrow-counterclockwise"></i><span>Unknown</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>1</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>2</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bi bi-circle"></i><span>3</span>
          </a>
        </li>
      </ul>
    </li><!-- End Unknown Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav --> --}}

    </ul>

  </aside><!-- End Sidebar-->
