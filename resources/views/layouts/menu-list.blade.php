<li class="pc-item">
  <a href="{{ route('dashboard') }}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
    <span class="pc-mtext">Dashboard</span>
  </a>
</li>

<li class="pc-item pc-hasmenu" data-accordion="true">
  <a href="javascript:void(0);" class="pc-link">
    <span class="pc-micon"><i class="fa-solid fa-gear" style="color: #ce0909;"></i></span>
    <span class="pc-mtext">Users Management</span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="{{ route('all-users') }}"><span class="pc-micon"><i class="fa-solid fa-users" style="color: #e25959;"></i>All Users</a></li>
    <li class="pc-item"><a class="pc-link" href="#">Pending Request</a></li>
  </ul>
</li>

<li class="pc-item pc-hasmenu" data-accordion="true">
  <a href="javascript:void(0);" class="pc-link">
    <span class="pc-micon"><i class="fa-solid fa-gear" style="color: #ce0909;"></i></span>
    <span class="pc-mtext">Roles & Permission</span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="{{ route('roles.index') }}"><span class="pc-micon"><i class="fa-solid fa-gears" style="color: #e25959;"></i></span>Roles</a></li>
    <li class="pc-item"><a class="pc-link" href="#"><span class="pc-micon"><i class="fa-solid fa-file-lines" style="color: #e25959;"></i></span>Permissions</a></li>
  </ul>
</li>

<li class="pc-item pc-caption">
  <label>Pages</label>
  <i class="ti ti-news"></i>
</li>
<li class="pc-item">
  <a href="../pages/login.html" class="pc-link">
    <span class="pc-micon"><i class="ti ti-lock"></i></span>
    <span class="pc-mtext">Login</span>
  </a>
</li>
<li class="pc-item">
  <a href="../pages/register.html" class="pc-link">
    <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
    <span class="pc-mtext">Register</span>
  </a>
</li>

<li class="pc-item pc-caption">
  <label>Other</label>
  <i class="ti ti-brand-chrome"></i>
</li>
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-menu"></i></span><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
  <ul class="pc-submenu">
    <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
    <li class="pc-item pc-hasmenu">
      <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
      <ul class="pc-submenu">
        <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
        <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="pc-item pc-hasmenu">
      <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
      <ul class="pc-submenu">
        <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
        <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
            <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>
</li>
<li class="pc-item">
  <a href="../other/sample-page.html" class="pc-link">
    <span class="pc-micon"><i class="ti ti-brand-chrome"></i></span>
    <span class="pc-mtext">Sample page</span>
  </a>
</li>