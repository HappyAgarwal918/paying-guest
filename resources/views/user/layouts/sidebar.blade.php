<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
  <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
    <i class="fe fe-x"><span class="sr-only"></span></i>
  </a>
  <nav class="vertnav navbar navbar-light">
    <!-- nav bar -->
    <div class="w-100 mb-4 d-flex">
      <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('home')}}">
        <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
          <g>
            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
          </g>
        </svg>
      </a>
    </div>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="{{ route('home')}}" data-toggle="collapse" aria-expanded="false" class="nav-link">
          <i class="fe fe-home fe-16"></i>
          <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
        </a>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>Components</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-box fe-16"></i>
          <span class="ml-3 item-text">UI elements</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
          <li class="nav-item">
            <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Colors</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item w-100">
        <a class="nav-link" href="widgets.html">
          <i class="fe fe-layers fe-16"></i>
          <span class="ml-3 item-text">Widgets</span>
          <span class="badge badge-pill badge-primary">New</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-credit-card fe-16"></i>
          <span class="ml-3 item-text">Forms</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="forms">
          <li class="nav-item">
            <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Basic Elements</span></a>
          </li>
        </ul>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>Apps</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item w-100">
        <a class="nav-link" href="#">
          <i class="fe fe-calendar fe-16"></i>
          <span class="ml-3 item-text">Calendar</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-book fe-16"></i>
          <span class="ml-3 item-text">Contacts</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="contact">
          <a class="nav-link pl-3" href="#"><span class="ml-1">Contact List</span></a>
          <a class="nav-link pl-3" href="#"><span class="ml-1">Contact Grid</span></a>
          <a class="nav-link pl-3" href="#"><span class="ml-1">New Contact</span></a>
        </ul>
      </li>
    </ul>
    <p class="text-muted nav-heading mt-4 mb-1">
      <span>Extra</span>
    </p>
    <ul class="navbar-nav flex-fill w-100 mb-2">
      <li class="nav-item dropdown">
        <a href="#layouts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
          <i class="fe fe-layout fe-16"></i>
          <span class="ml-3 item-text">Layout</span>
        </a>
        <ul class="collapse list-unstyled pl-4 w-100" id="layouts">
          <li class="nav-item">
            <a class="nav-link pl-3" href="#"><span class="ml-1 item-text">Default</span></a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="btn-box w-100 mt-4 mb-1">
      <a href="#" target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
        <i class="fe fe-12 fe-log-in mx-2"></i><span class="small">Login</span>
      </a>
    </div>
  </nav>
</aside>