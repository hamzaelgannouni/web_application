
     <!-- 
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 1.0
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Interactive Google Map</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">  <!-- For iPhone -->
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
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->


    <!-- END HEAD -->

    <!-- BEGIN BODY -->
  <!-- START TOPBAR -->
        
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">
          Interactive Google Map (Advanced)</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">Google Map with Search : <?=$fils["Nom_enfant"]?>  <?=$fils["Prenom_enfant"]?> </h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="">
                                          
                                        <form class="form-inline" action="index.php?action=suivezfils&id=<?=$_GET["id"]?>" method="POST">
                                            <div class="form-group">
                                            <label class="btn btn-primary active">determine la date :</label>
                                    <input type="date" value="" name="date" class="form-control datepickers">
                                       &nbsp; &nbsp;  <input type="submit" name="ok" class="btn btn-primary active">
                                        </div>
                                       </form>
                                   </div>
                                       <?php
                                        if(count($point)!=0){
                                        
                                           
                                        }else{
                                         ?>
                                         <div class="alert alert-error alert-dismissible fade in">
                                         erreur les points n'existe pas !!
                                         </div>
                                      
                                      <?php   
                                        }

                                       ?>

                                        <div class="clearfix"></div><br>

                                        <div class="gmap full-page-google-map">
                                            <div id="map-1">
                                                

                                            </div>
                                        </div>


                                        <!-- start -->
                                        <div class="clearfix"></div><br>
                                        <div class="map-toolbar">
                                            <div class="row">

                                                <div class="col-sm-8 text-right">

                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-warning" id="map-unzoom">-</button>
                                                        <button type="button" class="btn btn-warning" id="map-resetzoom">Reset</button>
                                                        <button type="button" class="btn btn-warning" id="map-zoom">+</button>
                                                    </div>

       

    
                                                    &nbsp;

                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end -->

                                </div>
                            </div>
             



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


</div>    
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArv9ALhBv6ihfhABHEAkFg0-JHywhtgjM&sensor=false"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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








<script type="text/javascript">
    jQuery(document).ready(function($)
    {
        var map;
        var geocoder = new google.maps.Geocoder();

        var markers = [];
        var iterator = 0;
   


        var neighborhoods=[
               <?php 
         $resulta=$point;
         foreach($resulta as $item){
            ?>
        new google.maps.LatLng(<?=$item["X"]?>,<?=$item["Y"]?>),  
                           <?php   } ?> ];
         var initialize1=neighborhoods[0];
        
        function initialize()
        {
            var mapOptions = {
                zoom: 14,
                center: initialize1
            };

            // Calculate Height
            var el = document.getElementById('map-1'),
                    doc_height =
                    $(document).height() - 10 -
                    $(".main-content > .user-info-navbar").outerHeight() -
                    $(".main-content > .page-title").outerHeight() -
                    $(".google-map-env .map-toolbar").outerHeight();

            // Adjust map height to fit the document contianer
            el.style.height = doc_height + 'px';

            map = new google.maps.Map(el, mapOptions);
        

            for (var i = 0; i < neighborhoods.length; i++)
            { 
                setTimeout(function() {
                    addMarker();
                }, i * 200 + 200);
            }

            // Stockholm Marker
            new google.maps.Marker({
                map: map,
                position: sefrou,
                draggable: true
            });
        }

        function addMarker(str)
        {

            var marker= new google.maps.Marker({
                position: neighborhoods[iterator],
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP
            });
            




        <?php   $time1=gettimepoint($point[0]["Id_point"])->fetch();?>
            var contentString = "C'était ici  a <?=$time1["time"]?>";

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
        markers.push(marker);


            iterator++;
    
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        // Toolbar
        $("#go-sthlm").on('click', function(ev)
        {
            ev.preventDefault();

            map.panTo(sefrou);
        });

        $("#go-bln").on('click', function(ev)
        {
            ev.preventDefault();

            map.panTo(fes);
        });

        $("#map-unzoom").on('click', function(ev)
        {
            ev.preventDefault();

            map.setZoom(map.getZoom() - 1);
        });

        $("#map-resetzoom").on('click', function(ev)
        {
            ev.preventDefault();

            map.setZoom(12);
        });

        $("#map-zoom").on('click', function(ev)
        {
            ev.preventDefault();

            map.setZoom(map.getZoom() + 1);
        });

        $("#address-search").submit(function(ev)
        {
            ev.preventDefault();

            var $inp = $(this).find('.form-control'),
                    address = $inp.val().trim();

            $inp.prev().find('i').addClass('fa-spinner fa-spin');

            if (address.length != 0)
            {
                geocoder.geocode({'address': address}, function(results, status)
                {
                    $inp.prev().find('i').removeClass('fa-spinner fa-spin');

                    if (status == google.maps.GeocoderStatus.OK)
                    {
                        map.setCenter(results[0].geometry.location);

                        var marker = new google.maps.Marker({
                            map: map,
                            position: results[0].geometry.location,
                            draggable: true
                        });

                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }
        });
    });
</script>
