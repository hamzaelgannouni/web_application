
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Ultra Admin : Mailbox</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/icheck/skins/minimal/minimal.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->


    <!-- END HEAD -->

    
          
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Mailbox</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box nobox">
                            <div class="content-body">    <div class="row">

                                    <div class="col-md-3 col-sm-3 col-xs-3">


                                        <a class="btn btn-primary btn-block" href='mail-compose.html'>Compose</a>

                                        <ul class="list-unstyled mail_tabs">
                                            <li class="active">
                                                <a href="mail-inbox.html">
                                                    <i class="fa fa-inbox"></i> Inbox <span class="badge badge-primary pull-right">6</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="mail-sent.html">
                                                    <i class="fa fa-send-o"></i> Sent
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="mail-drafts.html">
                                                    <i class="fa fa-edit"></i> Drafts <span class="badge badge-orange pull-right">2</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="mail-important.html">
                                                    <i class="fa fa-star-o"></i> Important
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="mail-trash.html">
                                                    <i class="fa fa-trash-o"></i> Trash
                                                </a>
                                            </li>
                                        </ul>

                                    </div>

                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="mail_content">

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                    <h3 class="mail_head">Inbox <sup>(5)</sup></h3>
                                                    <i class='fa fa-refresh icon-primary icon-xs icon-orange mail_head_icon'></i>
                                                    <i class='fa fa-search icon-primary icon-xs icon-orange mail_head_icon'></i>
                                                    <i class='fa fa-cog icon-primary icon-xs icon-orange mail_head_icon pull-right'></i>


                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12">

                                                    <div class="pull-left">
                                                        <div class="btn-group mail_more_btn">
                                                            <button type="button" class="btn btn-default"><input type='checkbox' class="iCheck"> All</button>
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">All</a></li>
                                                                <li><a href="#">Read</a></li>
                                                                <li><a href="#">Unread</a></li>
                                                                <li><a href="#">Starred</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <nav class='pull-right'>
                                                        <ul class="pager mail_nav">
                                                            <li><a href="#"><i class='fa fa-arrow-left icon-xs icon-orange icon-secondary'></i></a></li>
                                                            <li><a href="#"><i class='fa fa-arrow-right icon-xs icon-orange icon-secondary'></i></a></li>
                                                        </ul>
                                                    </nav>
                                                    <span class='pull-right mail_count_nav text-muted'><strong>1</strong> to <strong>20</strong> of 3247</span>

                                                </div>

                                                <div class="col-md-12 col-sm-12 col-xs-12 mail_list">
                                                    <table class="table table-striped table-hover">
                                                        <tr class="unread" id="mail_msg_1">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">John Smith</td>
                                                            <td class="open-view"><span class="label label-primary">Family</span>&nbsp;<span class="msgtext">Hello, hope you having a great day ahead.</span></td>
                                                            <td class="open-view"><span class="msg_time">19:34</span></td>
                                                        </tr>
                                                        <tr class="unread" id="mail_msg_2">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Laura Willson</td>
                                                            <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span></td>
                                                            <td class="open-view"><span class="msg_time">21:54</span></td>
                                                        </tr>
                                                        <tr class="unread" id="mail_msg_3">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Jane D.</td>
                                                            <td class="open-view"><span class="msgtext">We play, dance and love. Share love all around you.</span></td>
                                                            <td class="open-view"><span class="msg_time">22:28</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_4">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">John Smith</td>
                                                            <td class="open-view"><span class="msgtext">Hello, hope you having a great day ahead.</span></td>
                                                            <td class="open-view"><span class="msg_time">Yesterday</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_5">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Laura Willson</td>
                                                            <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span></td>
                                                            <td class="open-view"><span class="msg_time">Yesterday</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_6">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Jane D.</td>
                                                            <td class="open-view"><span class="label label-info">Work</span>&nbsp;<span class="msgtext">We play, dance and love. Share love all around you.</span></td>
                                                            <td class="open-view"><span class="msg_time">28 Feb</span></td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">John Smith</td>
                                                            <td class="open-view"><span class="label label-info">Work</span>&nbsp;<span class="msgtext">Hello, hope you having a great day ahead.</span></td>
                                                            <td class="open-view"><span class="msg_time">25 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_8">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Laura Willson</td>
                                                            <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span></td>
                                                            <td class="open-view"><span class="msg_time">25 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_9">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Jane D.</td>
                                                            <td class="open-view"><span class="msgtext">We play, dance and love. Share love all around you.</span></td>
                                                            <td class="open-view"><span class="msg_time">25 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_10">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">John Smith</td>
                                                            <td class="open-view"><span class="label label-success">IMP</span>&nbsp;<span class="msgtext">Hello, hope you having a great day ahead.</span></td>
                                                            <td class="open-view"><span class="msg_time">25 Feb</span></td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Laura Willson</td>
                                                            <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span></td>
                                                            <td class="open-view"><span class="msg_time">21 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_12">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Jane D.</td>
                                                            <td class="open-view"><span class="msgtext">We play, dance and love. Share love all around you.</span></td>
                                                            <td class="open-view"><span class="msg_time">21 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_13">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">John Smith</td>
                                                            <td class="open-view"><span class="label label-success">IMP</span>&nbsp;<span class="msgtext">Hello, hope you having a great day ahead.</span></td>
                                                            <td class="open-view"><span class="msg_time">21 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_14">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Laura Willson</td>
                                                            <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span></td>
                                                            <td class="open-view"><span class="msg_time">21 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_15">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Jane D.</td>
                                                            <td class="open-view"><span class="msgtext">We play, dance and love. Share love all around you.</span></td>
                                                            <td class="open-view"><span class="msg_time">21 Feb</span></td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">John Smith</td>
                                                            <td class="open-view"><span class="label label-info">Work</span>&nbsp;<span class="msgtext">Hello, hope you having a great day ahead.</span></td>
                                                            <td class="open-view"><span class="msg_time">17 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_17">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Laura Willson</td>
                                                            <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span></td>
                                                            <td class="open-view"><span class="msg_time">17 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_18">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Jane D.</td>
                                                            <td class="open-view"><span class="msgtext">We play, dance and love. Share love all around you.</span></td>
                                                            <td class="open-view"><span class="msg_time">17 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_19">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">John Smith</td>
                                                            <td class="open-view"><span class="label label-danger">Urgent</span>&nbsp;<span class="msgtext">Hello, hope you having a great day ahead.</span></td>
                                                            <td class="open-view"><span class="msg_time">17 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_20">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Laura Willson</td>
                                                            <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span></td>
                                                            <td class="open-view"><span class="msg_time">17 Feb</span></td>
                                                        </tr>
                                                        <tr class="unread">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Jane D.</td>
                                                            <td class="open-view"><span class="msgtext">We play, dance and love. Share love all around you.</span></td>
                                                            <td class="open-view"><span class="msg_time">16 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_22">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">John Smith</td>
                                                            <td class="open-view"><span class="label label-primary">Family</span>&nbsp;<span class="msgtext">Hello, hope you having a great day ahead.</span></td>
                                                            <td class="open-view"><span class="msg_time">16 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_23">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Laura Willson</td>
                                                            <td class="open-view"><span class="msgtext">Your product seems amazingly smart and elegant to use.</span></td>
                                                            <td class="open-view"><span class="msg_time">16 Feb</span></td>
                                                        </tr>
                                                        <tr id="mail_msg_24">
                                                            <td class=""><input class="iCheck" type="checkbox"></td>
                                                            <td class=""><div class="star"><i class='fa fa-star-o icon-xs icon-orange'></i></div></td>
                                                            <td class="open-view">Jane D.</td>
                                                            <td class="open-view"><span class="msgtext">We play, dance and love. Share love all around you.</span></td>
                                                            <td class="open-view"><span class="msg_time">16 Feb</span></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section></div>


                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
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
        <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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
</html>



