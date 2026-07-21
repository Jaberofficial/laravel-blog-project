<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="/admin/dashboard" class="brand-link">
      <!--begin::Brand Image-->
      <img src="{{ asset('admin/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow" />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">Admin Dashboard</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
<ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
    aria-label="Main navigation" data-accordion="false" id="navigation">

    <li class="nav-item {{ Request::is('admin/list-blog') || Request::is('admin/create-blog') ? 'menu-open' : '' }}">
    <a href="#" class="nav-link {{ Request::is('admin/list-blog') || Request::is('admin/create-blog') ? 'active' : '' }}">
            <i class="nav-icon bi bi-journal-text"></i>
            <p>
                Blog
                <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
        </a>

        <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="{{ url('/admin/list-blog') }}"
                   class="nav-link {{ Request::is('admin/list-blog') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-list-ul"></i>
                    <p>List</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/admin/create-blog') }}"
                   class="nav-link {{ Request::is('admin/create-blog') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-plus-circle-fill"></i>
                    <p>Add New</p>
                </a>
            </li>

        </ul>
    </li>

    <li class="nav-item">
        <a href="{{ url('/admin/contact-messages') }}"
           class="nav-link {{ Request::is('admin/contact-messages') ? 'active' : '' }}">
            <i class="nav-icon bi bi-envelope-fill"></i>
            <p>Contact Messages</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ url('/admin/settings') }}"
           class="nav-link {{ Request::is('admin/settings') ? 'active' : '' }}">
            <i class="nav-icon bi bi-gear-fill"></i>
            <p>Settings</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="{{ url('/admin/logout') }}" class="nav-link">
            <i class="nav-icon bi bi-box-arrow-right"></i>
            <p>Logout</p>
        </a>
    </li>

</ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>