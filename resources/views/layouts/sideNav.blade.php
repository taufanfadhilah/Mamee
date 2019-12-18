<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-text mx-3">MaMee</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('employee.index')}}">
          <i class="fas fa-fw fa-users"></i>
          <span>Management Employee</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('divisions.index')}}">
          <i class="fas fa-fw fa-hotel"></i>
          <span>Management Division</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('units.index')}}">
          <i class="fas fa-fw fa-hotel"></i>
          <span>Management Unit</span></a>
      </li>
      {{-- <li class="nav-item active">
        <a class="nav-link" href="{{route('organizations.index')}}">
          <i class="fas fa-fw fa-users-cog"></i>
          <span>Management Organization</span></a>
      </li> --}}
      <li class="nav-item active">
        <a class="nav-link" href="{{route('rooms.index')}}">
          <i class="fas fa-fw fa-door-open"></i>
          <span>Management Room</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('login')}}">
          <i class="fas fa-fw fa-power-off"></i>
          <span>Logout</span></a>
      </li>

    </ul>
    <!-- End of Sidebar -->