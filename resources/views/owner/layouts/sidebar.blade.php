<!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('owner.addProperties')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Add Properties</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('owner.allProperties')}}">
          <i class="icon-contract menu-icon"></i>
          <span class="menu-title">All Properties</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('owner.settings')}}">
          <i class="icon-head menu-icon"></i>
          <span class="menu-title">Settings</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="icon-layout menu-icon"></i>
          <span class="menu-title">UI Elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">Buttons</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Dropdowns</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">Typography</a></li>
          </ul>
        </div>
      </li> -->
    </ul>
  </nav>