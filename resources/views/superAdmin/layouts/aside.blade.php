
<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">

            <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('superadmin/index')}}" aria-expanded="false">
                    <i class="mdi mdi-av-timer"></i>
                    <span class="hide-menu">Super Admin Dashborad </span>
                </a>
            </li>
            <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('superadmin/superadmin-admin')}}" aria-expanded="false"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu">Admin</span></a></li>

            <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('superadmin/superadmin-salesmanager')}}" aria-expanded="false"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu">Sales Manager</span></a></li>

            <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{url('superadmin/superadmin-operationmanager')}}" aria-expanded="false"><i class="mdi mdi-comment-processing-outline"></i><span class="hide-menu">Operation Manager</span></a></li>
            
            <br><br><br>

<li class="sidebar-item">

    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" aria-expanded="false">
        <i class="mdi mdi-directions"></i><span class="hide-menu">Logout</span>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    </a>
</li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->