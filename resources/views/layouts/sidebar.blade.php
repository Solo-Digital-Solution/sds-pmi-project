<!-- BEGIN .app-side -->
<aside class="app-side" id="app-side">
    <!-- BEGIN .side-content -->
    <div class="side-content ">
        <!-- BEGIN .user-actions -->
        <ul class="user-actions">
            <li>
                <a href="#">
                    <i class="icon-event_note"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-rate_review"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-drafts"></i>
                    <span class="count-label red"></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-assignment_turned_in"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-photo_camera"></i>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Secured">
                    <i class="icon-verified_user"></i>
                </a>
            </li>
        </ul>
        <!-- END .user-actions -->
        <!-- BEGIN .side-nav -->
        <nav class="side-nav">
            <!-- BEGIN: side-nav-content -->
            <ul class="unifyMenu" id="unifyMenu">
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="icon-laptop_windows"></i>
                        </span>
                        <span class="nav-title">Dashboards</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href='{{ url('/')  }}'>Dashboard</a>
                        </li>
                        <li>
                            <a href='{{ url('/executive-summary')  }}'>Laporan Triwulan</a>
                        </li>
                        <li>
                            <a href='{{ url('/')  }}'>Manajemen Akun</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="icon-center_focus_strong"></i>
                        </span>
                        <span class="nav-title">Laporan</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href='{{ url('/')  }}'>Kejadian</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow" aria-expanded="false">
                        <span class="has-icon">
                            <i class="icon-assignment_turned_in"></i>
                            
                        </span>
                        <span class="nav-title">Assessment</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href='{{ url('/form-assessment') }}'>Form Assessment</a>
                        </li>
                    </ul>
                    <ul aria-expanded="false">
                        <li>
                            <a href='{{ url('/')  }}'>History Assessment</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END: side-nav-content -->
        </nav>
        <!-- END: .side-nav -->
    </div>
    <!-- END: .side-content -->
</aside>
<!-- END: .app-side -->