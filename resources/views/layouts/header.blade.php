<header class="tr-header">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><i class="fab fa-instagram"></i>{{ __('Fluffs') }}</a>
            </div>
            <div class="navbar-left">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                </ul>
            </div>
            </div>
            <div class="navbar-right">                          
                <ul class="nav navbar-nav">
                    <li>
                        <div class="search-dashboard">
                            <form>
                                <input placeholder="Search here" type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>							
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fa fa-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <div class="dropdown-item noti-title">
                                <h6 class="m-0">
                                    <span class="pull-right">
                                        <a href="" class="text-dark"><small>{{ __('Clear All') }}</small></a> 
                                    </span>
                                    {{ __('Notification') }}
                                </h6>
                            </div>

                            <div class="slimScrollDiv">
                                <div class="slimscroll">
                                    <div id="Slim">
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="fa fa-comment"></i></div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                        </a>
                                    </div>
                                    <div class="slimScrollBar"></div>
                                    <div class="slimScrollRail"></div>
                                </div>
                            </div>
                            <a href="photo_notifications.html" class="dropdown-item text-center notify-all">View all <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="dropdown mega-avatar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="avatar w-32"><img src="#" class="img-resonsive img-circle" width="25" height="25" alt="avatar" onerror="this.src='{{ asset('assets/img/users/2.jpg') }}'"></span>
                            <span class="hidden-xs">{{auth()->user()->name}}</span>
                        </a>
                        <div class="dropdown-menu w dropdown-menu-scale pull-right">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><span>{{ __('Profile') }}</span></a> 
                            <a class="dropdown-item" href="#"><span>{{ __('Settings') }}</span></a> 
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                {{ __('Sign out') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul> 
            </div>
        </div>
    </nav>
</header>