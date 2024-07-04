<!-- BEGIN .app-heading -->
<header class="app-header">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-5 col">
                <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
                    <i class="icon-menu5"></i>
                </a>
                <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                    <i class="icon-chevron-thin-left"></i>
                </a>
            </div>
            <div class="col-sm-2 col">
                <a href="{{ route('dashboard') }}" class="logo">
                    <img src="{{ asset('img/logo-pmi.png') }}" alt="Logo PMI" />
                </a>
            </div>
            <div class="col-sm-5 col">
                <ul class="header-actions">
                    <!-- <li class="dropdown">
                        <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-notifications_none"></i>
                            <span class="count-label"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
                            <ul class="imp-notify">
                                <li>
                                    <div class="icon">A</div>
                                    <div class="details">
                                        <p><span>Assessment</span>Assessment kejadian A sudah selesai. Segera validasi!</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">A</div>
                                    <div class="details">
                                        <p><span>Assessment</span>Assessment kejadian B sudah selesai. Segera validasi!</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon secondary">K</div>
                                    <div class="details">
                                        <p><span>Kejadian</span>Kejadian C sudah selesai.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <!-- <li>
                        <a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-person_outline"></i>
                            <span class="count-label red"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
                            <ul class="stats-widget">
                                <li>
                                    <h4>$37895</h4>
                                    <p>Revenue <span>+2%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h4>4,897</h4>
                                    <p>Downloads <span>+39%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                            <span class="sr-only">65% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <h4>2,219</h4>
                                    <p>Uploads <span class="text-secondary">-7%</span></p>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
                                            <span class="sr-only">42% Complete (success)</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                            <img class="avatar" src="{{ asset('img/user.png') }}" alt="Dashboards" />
                            <i class="icon-chevron-small-down"></i>
                        </a>
                        <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
                            <ul class="user-settings-list">
                                <li>
                                    <a href="{{ route('profile.index') }}">
                                        <div class="icon">
                                            @if (Auth::user()->profilePhoto)
                                            <img src="{{ asset('profilePhoto/' . Auth::user()->profilePhoto) }}" class="rounded-image"  class="img-fluid" alt="Profile Picture">
                                            @else
                                            <img src="{{ asset('img/default.jpg') }}" class="img-fluid rounded-image" alt="Default Profile Picture">
                                            @endif
                                        </div>
                                        <p>Profil Anda</p>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="#">
                                        <div class="icon red">
                                            <i class="icon-cog3"></i>
                                        </div>
                                        <p>Settings</p>
                                    </a>
                                </li> -->
                                <!-- <li>
                                    <a href="filters.html">
                                        <div class="icon yellow">
                                            <i class="icon-schedule"></i>
                                        </div>
                                        <p>Activity</p>
                                    </a>
                                </li> -->
                            </ul>
                            <!-- Authentication -->
                            <div class="logout-btn">
                                <a href="{{ url('/') }}" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- END: .app-heading -->