<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-text mx-3">MaMee Dashboard</div>
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
        <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
          <i class="fas fa-fw fa-power-off"></i>
          <span>Logout</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
      </li>

    </ul>
    <!-- End of Sidebar -->