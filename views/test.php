

<!DOCTYPE html>
<html class=" ">
    <head>
        <!-- 
         * developer: Hamza EL Gannouni And Mohammed EL bekkouche
         * 
         * 
         * 
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Projet fin d'etude: Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <!---
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">  ---For iPhone 
       * <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    --- For iPhone 4 Retina display 
       * <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    -- For iPad
       * <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display 
        -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/graph.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/detail.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/legend.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/extensions.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/rickshaw.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/lines.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
<script>
    var modal = document.querySelector(".modal");
    var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close-button");

    function toggleModal() {
       modal.classList.toggle("show-modal");
    }

    function windowOnClick(event) {
       if (event.target === modal) {
           toggleModal();
       }
    }

    trigger.addEventListener("click", toggleModal);
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);
</script>
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
        <div class='page-topbar '>
            <div class='logo-area'>

            </div>
            <div class='quick-area'>
                <div class='pull-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap">
                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                        <li class="">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-primary">7</span>
                            </a>
                            <ul class="dropdown-menu messages animated fadeIn">

                                <li class="list">

                                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread status-available">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Clarine Vassar</strong>
                                                        <span class="time small">- 15 mins ago</span>
                                                        <span class="profile-status available pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Brooks Latshaw</strong>
                                                        <span class="time small">- 45 mins ago</span>
                                                        <span class="profile-status away pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Clementina Brodeur</strong>
                                                        <span class="time small">- 1 hour ago</span>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-4.png" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Carri Busey</strong>
                                                        <span class="time small">- 5 hours ago</span>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-offline">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-5.png" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Melissa Dock</strong>
                                                        <span class="time small">- Yesterday</span>
                                                        <span class="profile-status offline pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-available">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Verdell Rea</strong>
                                                        <span class="time small">- 14th Mar</span>
                                                        <span class="profile-status available pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-busy">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Linette Lheureux</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status busy pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" status-away">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img src="data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Araceli Boatright</strong>
                                                        <span class="time small">- 16th Mar</span>
                                                        <span class="profile-status away pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                        Sometimes it takes a lifetime to win a battle.
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external">
                                    <a href="javascript:;">
                                        <span>Read All Messages</span>
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-orange">3</span>
                            </a>
                            <ul class="dropdown-menu notifications animated fadeIn">
                                <li class="total">
                                    <span class="small">
                                        You have <strong>3</strong> new notifications.
                                        <a href="javascript:;" class="pull-right">Mark all as Read</a>
                                    </span>
                                </li>
                                <li class="list">

                                    <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                        <li class="unread available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server needs to reboot</strong>
                                                        <span class="time small">15 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="unread away"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>45 new messages</strong>
                                                        <span class="time small">45 mins ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Server IP Blocked</strong>
                                                        <span class="time small">1 hour ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>10 Orders Shipped</strong>
                                                        <span class="time small">5 hours ago</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" offline"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>New Comment on blog</strong>
                                                        <span class="time small">Yesterday</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" available"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Great Speed Notify</strong>
                                                        <span class="time small">14th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=" busy"> <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Team Meeting at 6PM</strong>
                                                        <span class="time small">16th Mar</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>

                                    </ul>

                                </li>

                                <li class="external">
                                    <a href="javascript:;">
                                        <span>Read All Notifications</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="hidden-sm hidden-xs searchform">
                            <div class="input-group">
                                <span class="input-group-addon input-focus">
                                    <i class="fa fa-search"></i>
                                </span>
                                <form action="search-page.html" method="post">
                                    <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                                    <input type='submit' value="">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>      
                <div class='pull-right'>
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle">
                                <img src="data/profile/profile.png" alt="user-image" class="img-circle img-inline">
                                <span><i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">
                                <li>
                                    <a href="#settings">
                                        <i class="fa fa-wrench"></i>
                                        Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#profile">
                                        <i class="fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="#help">
                                        <i class="fa fa-info"></i>
                                        Help
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="index.php?action=deconnexion">
                                        <i class="fa fa-lock"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="chat-toggle-wrapper">
                            <a href="#" data-toggle="chatbar" class="toggle_chat">
                                <i class="fa fa-comments"></i>
                                <span class="badge badge-warning">9</span>
                            </a>
                        </li>
                    </ul>           
                </div>      
            </div>

        </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
         <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">


                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a href="ui-profile.html">
                                <img src="data/profile/profile.png" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                                <a href="ui-profile.html">
                                  hamza EL Gannouni    </a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">ID:7</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>   


                        <li class="open"> 
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i>
                                <span class="title">Dashboard</span>
                                
                            </a>
                        </li>
                               </li>
                        <li class=""> 
                            <a href="widgets.html">
                                <i class="fa fa-th"></i>
                                <span class="title">Vide</span><span class="label label-orange nosubmenu">HOT</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-suitcase"></i>
                                <span class="title">Vide</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-typography.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-accordion.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-progress.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-icons.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-buttons.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-modals.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-notifications.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tooltips.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-sortable.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-navbars.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-extra.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-carousel.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tree.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-panels.html">Vides</a>
                                </li>
                                <li>
                                    <a class="" href="ui-grids.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tiles.html">Vide</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-gift"></i>
                                <span class="title">vide</span>
                                <span class="arrow "></span><span class="label label-orange">NEW</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-calendar.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-pricing.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-profile.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-login.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-register.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-timeline.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-invoice.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-members.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-gallery.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-search.html">Search</a>
                                </li>
                                <li>
                                    <a class="" href="ui-blogs.html">Blogs</a>
                                </li>
                                <li>
                                    <a class="" href="ui-imagecrop.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-tocify.html">Vide</a>
                                </li>
                                <li>
                                    <a class="" href="ui-faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a class="" href="ui-404.html">404</a>
                                </li>
                                <li>
                                    <a class="" href="ui-500.html">500</a>
                                </li>
                                <li>
                                    <a class="" href="ui-lockscreen.html">Lock Screen</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span class="title">vide</span>
                                <span class="arrow "></span><span class="label label-orange">4</span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mail-inbox.html">vide</a>
                                </li>
                                <li>
                                    <a class="" href="mail-compose.html">vide</a>
                                </li>
                                <li>
                                    <a class="" href="mail-view.html">View</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart"></i>
                                <span class="title">vide</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="charts-morris.html">vide</a>
                                </li>
                                <li>
                                    <a class="" href="charts-chartjs.html">vide</a>
                                </li>
                                <li>
                                    <a class="" href="charts-flot.html">vide</a>
                                </li>
                                <li>
                                    <a class="" href="charts-sparkline.html">vide</a>
                                </li>
                                <li>
                                    <a class="" href="charts-easypiechart.html">vide</a>
                                </li>
                                <li>
                                    <a class="" href="charts-rickshaw.html">vide</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-table"></i>
                                <span class="title">vide</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="tables-basic.html">Basic tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-data.html">Data Tables</a>
                                </li>
                                <li>
                                    <a class="" href="tables-responsive.html">Responsive Tables</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-columns"></i>
                                <span class="title">vide</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="layout-default.html">Default Layout</a>
                                </li>
                                <li>
                                    <a class="" href="layout-collapsed.html">Collapsed Menu</a>
                                </li>
                                <li>
                                    <a class="" href="layout-chat.html">Chat Open</a>
                                </li>
                                <li>
                                    <a class="" href="layout-boxed.html">Boxed Layout</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">vide</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-vectormaps.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a class="" href="ui-googlemaps.html">Google Maps</a>
                                </li>
                                <li>
                                    <a class="" href="ui-googlemapfull.html">Advanced Google Maps</a>
                                </li>
                            </ul>
                        </li>
        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">vide</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-vectormaps.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a class="" href="ui-googlemaps.html">Google Maps</a>
                                </li>
                                <li>
                                    <a class="" href="ui-googlemapfull.html">Advanced Google Maps</a>
                                </li>
                            </ul>
                        </li>        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-map-marker"></i>
                                <span class="title">vide</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="ui-vectormaps.html">Vector Maps</a>
                                </li>
                                <li>
                                    <a class="" href="ui-googlemaps.html">Google Maps</a>
                                </li>
                                <li>
                                    <a class="" href="ui-googlemapfull.html">Advanced Google Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">vide</span> <span class="arrow "></span> </a>
                            <ul class="sub-menu">
                                <li > <a href="javascript:;"> <span class="title">Level 1.1</span> </a> </li>
                                <li > <a href="javascript:;"> <span class="title">Level 1.2</span> <span class="arrow "></span> </a>
                                    <ul class="sub-menu">
                                        <li > <a href="javascript:;"> <span class="title">Level 2.1</span> </a></li>
                                        <li > <a href="ujavascript:;"> <span class="title">Level 2.2</span> <span class="arrow "></span></a> 
                                            <ul class="sub-menu">
                                                <li > <a href="javascript:;"> <span class="title">vide</span> <span class="arrow "></span></a> 
                                                    <ul class="sub-menu">
                                                        <li > <a href="ujavascript:;"> <span class="title">vide</span> </a> </li>
                                                        <li > <a href="ujavascript:;"> <span class="title">Level 4.2</span> </a> </li>
                                                    </ul>
                                                </li>
                                                <li > <a href="ujavascript:;"> <span class="title">Level 3.2</span> </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                  

                </div>
                <!-- MAIN MENU - END -->



                <div class="project-info">

                    <div class="block1">
                        <div class="data">
                            <span class='title'>New&nbsp;Orders</span>
                            <span class='total'>2,345</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_orders">...</span>
                        </div>
                    </div>

                    <div class="block2">
                        <div class="data">
                            <span class='title'>Visitors</span>
                            <span class='total'>345</span>
                        </div>
                        <div class="graph">
                            <span class="sidebar_visitors">...</span>
                        </div>
                    </div>

                </div>



            </div>
            <!--  SIDEBAR - END -->

            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Dashboard</h1>                            </div>


                        </div>
                    </div>
                    <!--- menu hamza-->
                    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            
        </div>
     
        <!-- PHP code to read records will be here -->
         <table id='example-1' class='table table-striped dt-responsive display' cellspacing='0' width='100%' class='table table-hover table-responsive table-bordered'><tr><th>ID</th><th>Nom</th><th>Prenom</th><th>Age</th><th>Action</th></tr><a href='index.php?action=AjouteFils' class='btn btn-primary m-b-1em' >Ajouter Enfant</a><br><tr><td>2</td><td>karime</td><td>EL Gannouni</td><td>13</td><td><a href='ui-googlemapfull.php?id=2' class='btn btn-info m-r-1em'>Suivez votre fils</a><a href='index.php?action=modifie&id=2' class='btn btn-primary m-r-1em'>Modifier</a><a href='index.php?action=supprimer&id=2'  class='btn btn-danger'>Delete</a> <button class='toto' onclick='toggleModal()'>Config App</button></td></tr><tr><td>3</td><td>fatiha</td><td>EL Gannouni</td><td>5</td><td><a href='ui-googlemapfull.php?id=3' class='btn btn-info m-r-1em'>Suivez votre fils</a><a href='index.php?action=modifie&id=3' class='btn btn-primary m-r-1em'>Modifier</a><a href='index.php?action=supprimer&id=3'  class='btn btn-danger'>Delete</a> <button class='toto' onclick='toggleModal()'>Config App</button></td></tr></table>

<button class="trigger">Click here to trigger the modal!</button>
    <div class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h1>Hello, I am a modal!</h1>
        </div>
    </div>

    <style>
    .modal {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        visibility: hidden;
        transform: scaleX(1.1) scaleY(1.1);
        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
        font-family: sans-serif;
    }
    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 1rem 1.5rem;
        width: 24rem;
        border-radius: 0.5rem;
    }
    .close-button {
        float: right;
        width: 1.5rem;
        line-height: 1.5rem;
        text-align: center;
        cursor: pointer;
        border-radius: 0.25rem;
        background-color: lightgray;
    }
    .close-button:hover {
        background-color: darkgray;
    }
    .show-modal {
        opacity: 1;
        visibility: visible;
        transform: scaleX(1.0) scaleY(1.0);
        transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
    }
    @media only screen and (max-width: 50rem) {
        h1 {
            font-size: 1.5rem;
        }
        .modal-content {
            width: calc(100% - 5rem);
        }
    }
</style>

        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/rickshaw-chart/vendor/d3.v3.js" type="text/javascript"></script> <script src="assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script> <script src="assets/plugins/rickshaw-chart/js/Rickshaw.All.js"></script><script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script><script src="assets/plugins/easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script><script src="assets/plugins/morris-chart/js/raphael-min.js" type="text/javascript"></script><script src="assets/plugins/morris-chart/js/morris.min.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script><script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script><script src="assets/plugins/gauge/gauge.min.js" type="text/javascript"></script><script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><script src="assets/js/dashboard.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
    <button class="trigger">Click here to trigger the modal!</button>
    <div class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h1>Hello, I am a modal!</h1>
        </div>
    </div>
<script>
    var modal = document.querySelector(".modal");
    var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close-button");

    function toggleModal() {
       modal.classList.toggle("show-modal");
    }

    function windowOnClick(event) {
       if (event.target === modal) {
           toggleModal();
       }
    }

    trigger.addEventListener("click", toggleModal);
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);
</script>
    <style>
    .modal {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        opacity: 0;
        visibility: hidden;
        transform: scaleX(1.1) scaleY(1.1);
        transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
        font-family: sans-serif;
    }
    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 1rem 1.5rem;
        width: 24rem;
        border-radius: 0.5rem;
    }
    .close-button {
        float: right;
        width: 1.5rem;
        line-height: 1.5rem;
        text-align: center;
        cursor: pointer;
        border-radius: 0.25rem;
        background-color: lightgray;
    }
    .close-button:hover {
        background-color: darkgray;
    }
    .show-modal {
        opacity: 1;
        visibility: visible;
        transform: scaleX(1.0) scaleY(1.0);
        transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
    }
    @media only screen and (max-width: 50rem) {
        h1 {
            font-size: 1.5rem;
        }
        .modal-content {
            width: calc(100% - 5rem);
        }
    }
</style>
</html>

