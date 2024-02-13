<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}"" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/add_sample') ? 'active' : '' }}""
                    href="/dashboard/add_sample">
                    <span data-feather="edit-2" class="align-text-bottom"></span>
                    Data Sample
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('history') ? 'active' : '' }}"" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    History Pendaftaran Sample
                </a>
            </li> --}}
        </ul>
    </div>
</nav>
