<header class="app-header fixed-top">
    <div class="app-header-inner">
        <div class="container-fluid py-2">
            <div class="app-header-content">
                <div class="row justify-content-between align-items-center">

                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                                <title>Menu</title>
                                <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                            </svg>
                        </a>
                    </div>
                    <!--//col-->
                    <div class="search-mobile-trigger d-sm-none col">
                        <i class="search-mobile-trigger-icon fas fa-search"></i>
                    </div>
                    <!--//col-->
                    <div class="app-search-box col">
                        <form class="app-search-form">
                            <div class="form-group">
                                <input type="text" id="search" name="search" class="form-control search-input" placeholder="Search..."> 
                                <div id="search-result"></div>
                            </div>
                        </form>
                    </div>
                    <!--//app-search-box-->

                    <div class="app-utilities col-auto">
                        <div class="app-utility-item app-notifications-dropdown dropdown">
                            <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" title="Notifications">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                                    <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>
                                <span class="icon-badge">3</span>
                            </a>
                            <!--//dropdown-toggle-->

                            <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
                                <div class="dropdown-menu-header p-3">
                                    <h5 class="dropdown-menu-title mb-0">Notifications</h5>
                                </div>
                                <!--//dropdown-menu-title-->
                                <div class="dropdown-menu-content">
                                    <div class="item p-3">
                                        <div class="row gx-2 justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <img class="profile-image" src="assets/images/profiles/profile-1.png" alt="">
                                            </div>
                                            <!--//col-->
                                            <div class="col">
                                                <div class="info">
                                                    <div class="desc">Amy shared a file with you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                                                    <div class="meta"> 2 hrs ago</div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="link-mask" href="notifications.html"></a>
                                    </div>
                                    <!--//item-->
                                    <div class="item p-3">
                                        <div class="row gx-2 justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <div class="app-icon-holder">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                        <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col">
                                                <div class="info">
                                                    <div class="desc">You have a new invoice. Proin venenatis interdum est.</div>
                                                    <div class="meta"> 1 day ago</div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="link-mask" href="notifications.html"></a>
                                    </div>
                                    <!--//item-->
                                    <div class="item p-3">
                                        <div class="row gx-2 justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <div class="app-icon-holder icon-holder-mono">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col">
                                                <div class="info">
                                                    <div class="desc">Your report is ready. Proin venenatis interdum est.</div>
                                                    <div class="meta"> 3 days ago</div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="link-mask" href="notifications.html"></a>
                                    </div>
                                    <!--//item-->
                                    <div class="item p-3">
                                        <div class="row gx-2 justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <img class="profile-image" src="assets/images/profiles/profile-2.png" alt="">
                                            </div>
                                            <!--//col-->
                                            <div class="col">
                                                <div class="info">
                                                    <div class="desc">James sent you a new message.</div>
                                                    <div class="meta"> 7 days ago</div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="link-mask" href="notifications.html"></a>
                                    </div>
                                    <!--//item-->
                                </div>
                                <!--//dropdown-menu-content-->

                                <div class="dropdown-menu-footer p-2 text-center">
                                    <a href="notifications.html">View all</a>
                                </div>

                            </div>
                            <!--//dropdown-menu-->
                        </div>
                        <!--//app-utility-item-->
                        <div class="app-utility-item">
                            <a href="settings.html" title="Settings">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                    <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                </svg>
                            </a>
                        </div>
                        <!--//app-utility-item-->

                        <div class="app-utility-item app-user-dropdown dropdown">
                            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="assets/images/user.png" alt="user profile"></a>
                            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                <li><a class="dropdown-item" href="account.html">Account</a></li>
                                <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="login.html">Log Out</a></li>
                            </ul>
                        </div>
                        <!--//app-user-dropdown-->
                    </div>
                    <!--//app-utilities-->
                </div>
                <!--//row-->
            </div>
            <!--//app-header-content-->
        </div>
        <!--//container-fluid-->
    </div>
    <!--//app-header-inner-->
    <div id="app-sidepanel" class="app-sidepanel">
        <div id="sidepanel-drop" class="sidepanel-drop"></div>
        <div class="sidepanel-inner d-flex flex-column">
            <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
            <div class="app-branding">
                <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"><span class="logo-text">PORTAL</span></a>

            </div>
            <!--//app-branding-->

            <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a id="overview_nav" class="nav-link" href="dashboard.php">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" fill="currentColor" width="20" height="20">
                                    <g id="_01_align_center" data-name="01 align center">
                                        <path d="M4.5,19.5V22H3a1,1,0,0,1-1-1V19.5H4.5m2-2H0V21a3,3,0,0,0,3,3H6.5V17.5Z" />
                                        <path d="M22,19.5V21a1,1,0,0,1-1,1H19.5V19.5H22m2-2H17.5V24H21a3,3,0,0,0,3-3V17.5Z" />
                                        <path d="M4.5,10.75v2.5H2v-2.5H4.5m2-2H0v6.5H6.5V8.75Z" />
                                        <path d="M22,10.75v2.5H19.5v-2.5H22m2-2H17.5v6.5H24V8.75Z" />
                                        <path d="M4.5,2V4.5H2V3A1,1,0,0,1,3,2H4.5m2-2H3A3,3,0,0,0,0,3V6.5H6.5V0Z" />
                                        <path d="M13.25,19.5V22h-2.5V19.5h2.5m2-2H8.75V24h6.5V17.5Z" />
                                        <path d="M13.25,10.75v2.5h-2.5v-2.5h2.5m2-2H8.75v6.5h6.5V8.75Z" />
                                        <path d="M13.25,2V4.5h-2.5V2h2.5m2-2H8.75V6.5h6.5V0Z" />
                                        <path d="M21,2a1,1,0,0,1,1,1V4.5H19.5V2H21m0-2H17.5V6.5H24V3a3,3,0,0,0-3-3Z" />
                                    </g>
                                </svg>
                            </span>
                            <span class="nav-link-text">Overview</span>
                        </a>
                        <!--//nav-link-->
                    </li>
                    <!--//nav-item-->

                    <li class="nav-item has-submenu">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a id="client_nav" class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#client-submenu" aria-expanded="false" aria-controls="client-submenu">
                            <span class="nav-icon">
                                <svg id="Layer_1" viewBox="0 0 25 25" fill="currentColor" width="20" height="20" class="bi bi-folder" fill="currentColor" data-name="Layer 1">
                                    <path d="m4 13h3v2h-3zm5 2h3v-2h-3zm-5 4h3v-2h-3zm5 0h3v-2h-3zm-5-12h3v-2h-3zm5 0h3v-2h-3zm-5 4h3v-2h-3zm5 0h3v-2h-3zm15-3v16h-24v-21a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v2h5a3 3 0 0 1 3 3zm-10-5a1 1 0 0 0 -1-1h-10a1 1 0 0 0 -1 1v19h12zm8 5a1 1 0 0 0 -1-1h-5v15h6zm-4 7h2v-2h-2zm0 4h2v-2h-2zm0-8h2v-2h-2z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">Client</span>
                            <span class="submenu-arrow">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                            <!--//submenu-arrow-->
                        </a>
                        <!--//nav-link-->
                        <div id="client-submenu" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item"><a class="submenu-link" href="register_client.php">Register Client</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="view_edit_clients.php">View/ Edit Existing Clients</a></li>
                            </ul>
                        </div>
                    </li>
                    <!--//nav-item-->
                    <li class="nav-item has-submenu">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a id="member_nav" class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#member-submenu" aria-expanded="false" aria-controls="member-submenu">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" fill="currentColor" width="20" height="20">
                                    <g id="_01_align_center" data-name="01 align center">
                                        <path d="M21,24H19V18.957A2.96,2.96,0,0,0,16.043,16H7.957A2.96,2.96,0,0,0,5,18.957V24H3V18.957A4.963,4.963,0,0,1,7.957,14h8.086A4.963,4.963,0,0,1,21,18.957Z" />
                                        <path d="M12,12a6,6,0,1,1,6-6A6.006,6.006,0,0,1,12,12ZM12,2a4,4,0,1,0,4,4A4,4,0,0,0,12,2Z" />
                                    </g>
                                </svg>
                            </span>
                            <span class="nav-link-text">Member</span>
                            <span class="submenu-arrow">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                            <!--//submenu-arrow-->
                        </a>
                        <!--//nav-link-->
                        <div id="member-submenu" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item"><a class="submenu-link" href="add_member.php">Add Member</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="view_edit_members.php">View/ Edit Existing Members</a></li>
                            </ul>
                        </div>
                    </li>
                    <!--//nav-item-->
                    <li class="nav-item has-submenu">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a id="dependant_nav" class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#dependant-submenu" aria-expanded="false" aria-controls="dependant-submenu">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" fill="currentColor" width="20" height="20" class="bi bi-folder" fill="currentColor">
                                    <path d="M6.349,11H3a1,1,0,0,0-1,1v3H0V12A3,3,0,0,1,3,9H7.537A5.977,5.977,0,0,0,6.349,11ZM21,9H16.463a5.977,5.977,0,0,1,1.188,2H21a1,1,0,0,1,1,1v3h2V12A3,3,0,0,0,21,9Zm-5,4a4,4,0,1,0-4,4A4,4,0,0,0,16,13Zm-2,0a2,2,0,1,1-2-2A2,2,0,0,1,14,13Zm4,8a3,3,0,0,0-3-3H9a3,3,0,0,0-3,3v3H8V21a1,1,0,0,1,1-1h6a1,1,0,0,1,1,1v3h2ZM22,4a4,4,0,1,0-4,4A4,4,0,0,0,22,4ZM20,4a2,2,0,1,1-2-2A2,2,0,0,1,20,4ZM10,4A4,4,0,1,0,6,8,4,4,0,0,0,10,4ZM8,4A2,2,0,1,1,6,2,2,2,0,0,1,8,4Z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">Dependant</span>
                            <span class="submenu-arrow">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                            <!--//submenu-arrow-->
                        </a>
                        <!--//nav-link-->
                        <div id="dependant-submenu" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item"><a class="submenu-link" href="add_dependant.php">Add Dependant</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="view_edit_dependants.php">View/ Edit Existing Dependant</a></li>
                            </ul>
                        </div>
                    </li>
                    <!--//nav-item-->
                    <li class="nav-item has-submenu">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a id="insurer_nav" class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#insurer-submenu" aria-expanded="false" aria-controls="insurer-submenu">
                            <span class="nav-icon">
                                <svg id="Layer_1" viewBox="0 0 25 25" fill="currentColor" width="20" height="20" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                                    <path d="m0 22h24v2h-24zm24-14.091v2.091h-3v8h2v2h-22v-2h2v-8h-3v-2.091a3 3 0 0 1 1.563-2.634l9-4.909a2.993 2.993 0 0 1 2.874 0l9 4.909a3 3 0 0 1 1.563 2.634zm-19 10.091h3v-8h-3zm5-8v8h4v-8zm9 0h-3v8h3zm3-2.091a1 1 0 0 0 -.521-.878l-9-4.909a1 1 0 0 0 -.958 0l-9 4.909a1 1 0 0 0 -.521.878v.091h20z" />
                                </svg>
                            </span>
                            <span class="nav-link-text">Insurer</span>
                            <span class="submenu-arrow">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                            <!--//submenu-arrow-->
                        </a>
                        <!--//nav-link-->
                        <div id="insurer-submenu" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                            <ul class="submenu-list list-unstyled">
                                <li class="submenu-item"><a class="submenu-link" href="add_insurer.php">Add Insurer</a></li>
                                <li class="submenu-item"><a class="submenu-link" href="account.html">View/ Edit Existing Insurer</a></li>
                            </ul>
                        </div>
                    </li>
                    <!--//nav-item-->

                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a id="" class="nav-link" href="charts.html">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="bi bi-folder" fill="currentColor">
                                    <g id="_01_align_center" data-name="01 align center">
                                        <path d="M12,24A12,12,0,1,1,24,12,12.013,12.013,0,0,1,12,24ZM12,2A10,10,0,1,0,22,12,10.011,10.011,0,0,0,12,2Z" />
                                        <path d="M13,15H11v-.743a3.954,3.954,0,0,1,1.964-3.5,2,2,0,0,0,1-2.125,2.024,2.024,0,0,0-1.6-1.595A2,2,0,0,0,10,9H8a4,4,0,1,1,5.93,3.505A1.982,1.982,0,0,0,13,14.257Z" />
                                        <rect x="11" y="17" width="2" height="2" />
                                    </g>
                                </svg>
                            </span>

                            <span class="nav-link-text">Help</span>
                        </a>
                        <!--//nav-link-->
                    </li>
                    <!--//nav-item-->
                </ul>
                <!--//app-menu-->
            </nav>
            <!--//app-nav-->
            <div class="app-sidepanel-footer">
                <nav class="app-nav app-nav-footer">
                    <ul class="app-menu footer-menu list-unstyled">
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="settings.html">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                        <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Settings</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                        <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Downloads</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                    </ul>
                    <!--//footer-menu-->
                </nav>
            </div>
            <!--//app-sidepanel-footer-->

        </div>
        <!--//sidepanel-inner-->
    </div>
    <!--//app-sidepanel-->
</header>
<!--//app-header-->

<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var search = $(this).val();
            if (search !== "") {
                $.ajax({
                    url: "lib/nav_search.php",
                    type: "POST",
                    cache: false,
                    data: {
                        term: search
                    },
                    success: function(data) {
                        $("#search-result").html(data);
                        $("#search-result").fadeIn();
                    }
                });
            } else {
                $("#search-result").html("");
                $("#search-result").fadeOut();
            }
        });
        // click one particular search name it's fill in textbox
        $(document).on("click", "li", function() {
            $('#search').val($(this).text());
            $('#search-result').fadeOut("fast");
        });
    });
</script>