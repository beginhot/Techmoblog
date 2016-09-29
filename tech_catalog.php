<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Techmoblog</title>

     <link rel="shortcut icon" type="image/ico" href="favicon.ico" />

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <link href="news_css.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/jquery.js"></script>

    <script src="assets/jquery-ui/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/metisMenu/dist/metisMenu.min.js"></script>
</head>
<body>
<script>
    $(function() {

    $('#side-menu').metisMenu();

});

</script>

<style>
.sidebar {
        
    width: 182px;
}
.sidebar .sidebar-nav.navbar-collapse {
    padding-right: 0;
    padding-left: 0;
}

.sidebar .sidebar-search {
    padding: 15px;
}

.sidebar ul li {
    /*border-bottom: 1px solid #e7e7e7;*/
}

.sidebar ul li a.active {
    background-color: #eee;
}

.sidebar .arrow {
    float: right;
}

.sidebar .fa.arrow:before {
    content: "\f104";
}

.sidebar .active>a>.fa.arrow:before {
    content: "\f107";
}

.sidebar .nav-second-level li,
.sidebar .nav-third-level li {
    border-bottom: 0!important;
    background-color: #ffffff;
}

.sidebar .nav-second-level ul,
.sidebar .nav-third-level ul {
    border-bottom: 0!important;
    background-color: #ffffff;    
}

.sidebar .nav-second-level li a {
    padding-left: 37px;
    padding: 3px 25px;
    margin-right: 0px;   
    color: #000000;
    font-size: 11px;
    font-family: 'Prompt', sans-serif;
}

.sidebar .nav-third-level li a {
    padding-left: 52px;
    padding: 3px 25px;
    margin-right: 0px;   
    color: #000000;
    font-size: 11px;
    font-family: 'Prompt', sans-serif;

}

.navbar-top-links .dropdown-messages,
.navbar-top-links .dropdown-tasks,
.navbar-top-links .dropdown-alerts {
    margin-left: auto;
}
#side-menu.nav>li {
    margin-top: 1px;
    background-color: #eaf7fb;
}

#side-menu.nav>li>a {
    position: relative;
    display: block;
    padding: 10px 10px;
    margin-right: 0px;   
    color: #000000;
}

#side-menu.nav>li>a:hover {
    text-decoration: none;
    background-color: #eee;
}

.table-news>tbody>tr{
    border-bottom: 1px solid #cccccc;
    font-family: 'Prompt', sans-serif;
}
.table-news>tbody>tr>td:first-child{
    padding-left:10px; 
}

</style>

    <!-- ============= Mian Page ================-->
    <div class="main_body">
        <!--============ Top Brand Logo ======================-->
        <div class="top_brand container hidden-xs">
            <div class="div_panel_index" style="padding-top:20px;">
                <div class="pull-left">
                <img src="img/menu_mobile.png" alt="">
                <img src="img/brand_techmo.png" alt="">
                <img src="img/tech_your_life.png" alt="">
                </div>
                <div class="pull-right">
                    <div class="div_search_ground">
                        <div class="div_icon_search"><img src="img/search.png" alt=""></div>
                        <input type="text" name="input_search_index" />
                    </div>
                </div>
            </div>
        </div><!--============End Top Brand Logo ======================-->

        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #000000;min-height:20px;margin-bottom:0px;">
          <div class="container" style="width:100%">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>         
            </div>
            <div id="navbar" class="navbar-collapse collapse div_panel_index">
              <ul class="nav navbar-nav">
                <li><a href="#"><img src="img/home.png" alt="" ></a></li>
                <li><a href="#about"><img src="img/news.png" alt="" ></a></li>
                <li><a href="#contact"><img src="img/price.png" alt="" ></a></li>
                <li><a href="#"><img src="img/catalog.png" alt="" ></a></li>
                <li><a href="#about"><img src="img/review.png" alt="" ></a></li>
                <li><a href="#contact"><img src="img/application.png" alt="" ></a></li>
              </ul>     
              <div class="pull-right hidden-xs" style="text-align:right;padding-top:10px;">
                    <img src="img/stay_connected.png" alt="">
                    <img src="img/facebook.png" alt="">
                    <img src="img/twitter.png" alt="">
                    <img src="img/google_plus.png" alt="">
                    <img src="img/feed.png" alt="">             
                </div>
            </div><!--/.nav-collapse -->
          </div>
        </nav><!--============== End Static navbar ==================-->
        

        <div class="container" style="width:100%;padding:0px;margin:0px;">

            <!--================= Banner Left ===============-->
            <div style="float:left;width:120px;" class="hidden-xs hidden-sm hidden-md">
                <img src="img/pic/banner_left.png" alt="">
            </div>

            <!--================= Body Content ===============-->
            <div style="float:left;" class="div_panel_index">
                <!--=============== Hot Tags =================-->
                <div class="top_tags" style="width:100%;background-color:#ffffff;height:48px;">
                    <div style="padding-top:5px;">
                        <div style="float:left"><img src="img/hot_tags.png" alt=""></div>
                        <div class="div_hot_tags">Pokemon Go</div>
                        <div class="div_hot_tags">Pokemon Go Update</div>
                        <div class="div_hot_tags">Pokemon Go Latest News</div>
                    </div>
                </div><!-- ======== End Hot Tags ===============-->

                <!-- ============== Big Banner Top And Price =====================-->
                <div class="container" style="width:100%;padding:0px;margin:0px;">
                    <div class="row">
                        
                        <div class="col-md-9" style="max-width:700px;text-align:center;margin-bottom:20px;">
                            
                            <!--=========== Big Banner ============-->
                            <div class="container hidden-xs" style="width:100%">
                                <img src="img/pic/big_banner.png" alt="" style="float: right;">
                            </div><!--=========== End Big Banner ============-->

                        </div>

                        <div class="col-md-4 layout_right">

                            <!-- ============= Price And Sale ===============-->
                            <div class="container" style="width:100%;padding:10px;margin-bottom:20px;">
                                 <!-- Nav tabs -->
                                <ul class="nav nav-tabs" style="margin-bottom:0px;">
                                    <li class="active">
                                        <a href="#highlight" data-toggle="tab" style="padding-top:12px;font-weight:bold;">
                                            <img src="img/price_recommend.png" alt="" class="img-responsive">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#article" data-toggle="tab" style="padding-top: 0px;"> <img src="img/sale_price.png" alt="" class="img-responsive"></span></a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content" style="border: 1px solid #ddd;border-top: none;padding:0px;">
                                    <div class="tab-pane fade in active" id="highlight">                                    
                                        <table class="table-news" style="font-size: 14px;">
                                            <tr>
                                                <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">Samsung Note7</span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>                                            
                                            </tr>  
                                             <tr>
                                               <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">iPhone7 </span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>   
                                            </tr>  
                                             <tr>
                                                <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">Samsung Note7</span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>                                            
                                            </tr>  
                                             <tr>
                                               <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">iPhone7 </span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>   
                                            </tr>  
                                             <tr>
                                                <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">Samsung Note7</span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>                                            
                                            </tr>  
                                             <tr>
                                               <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">iPhone7 </span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>   
                                            </tr> 
                                             <tr>
                                                <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">Samsung Note7</span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>                                            
                                            </tr>  
                                                                            
                                        </table>  
                                    </div>
                                    <div class="tab-pane fade" id="article">
                                        <table class="table-news">
                                           <tr>
                                                <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">Samsung Note7</span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>                                            
                                            </tr>  
                                             <tr>
                                               <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">iPhone7 </span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>   
                                            </tr>  
                                             <tr>
                                                <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">Samsung Note7</span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>                                            
                                            </tr>  
                                             <tr>
                                               <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">iPhone7 </span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>   
                                            </tr>  
                                             <tr>
                                                <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">Samsung Note7</span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>                                            
                                            </tr>  
                                             <tr>
                                               <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">iPhone7 </span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>   
                                            </tr>        
                                             <tr>
                                                <td><img src="img/icon/phone_price.png" alt=""></td>
                                                <td><a href="#"><span style="color:#000000;float:left;font-weight: normal;">Samsung Note7</span> <span style="color:#ff0000;float:right;">28,900 บาท</span></a></td>                                            
                                            </tr>                                 
                                        </table>                                   
                                    </div>
                                </div>
                            </div><!--=========== End Price And Sale ============-->

                        </div>
                    </div>

                    <!-- ============== Name Menu And Social =====================-->  
                    <div class="row">
                        
                        <div class="col-md-9" style="max-width:700px;text-align:center;margin-bottom:20px;">
                            <div class="container" style="width: 100%;text-align: left;">
                                <div style="float:left;"><img src="img/icon/icon_search_phone.png" alt=""></div>
                                <div style="float:left;line-height: 1.2;padding-top: 5px;">
                                    <div style="font-size: 19px;font-weight: bold;">แค๊ตตาล็อก มือถือ สมาร์ทโฟน//Catalog Smartphone//รวมทุกยี่ห้อ</div>
                                    <div style="font-size: 12px;">ตอนนี้คุณอยู่ที่>>หน้าแรก>>Catalog Smartphone>>รวมทุกยี่ห้อ</div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-4 layout_right">
                            <div class="container" style="width: 100%;">
                                <div style="width: 75px;line-height: 1;float: left;">
                                    <span style="color:#1995bc;font-size: 32px;font-weight: bolder">625</span>
                                    <img src="img/btn/shares.png" alt="">
                                </div>
                                <a href=""><img src="img/icon/facebook_icon.png" alt=""></a>
                                <a href=""><img src="img/icon/twitter_icon.png" alt=""></a>
                                <a href=""><img src="img/icon/google_plus_icon.png" alt=""></a>
                            </div>
                        </div>
                    </div><!-- ============== End Name Menu And Social =====================-->              

                </div><!-- ============== End Big Banner Top And Price =====================-->   

              
                <div class="row" style="margin:auto;">
                    <div class="col-md-3" style="max-width: 190px;">
   
                        <div><img src="img/icon/catalog_smartphone.png" alt=""></div>      
    
                        <div class="navbar-default sidebar" role="navigation" style="background-color: #ffffff;">
                            <div class="sidebar-nav navbar-collapse">
                                <ul class="nav" id="side-menu">                        
                                    <li>
                                        <a href="#"><img src="img/sidebar_star.png" alt=""><span style="font-weight: bold;font-size: 12px;margin-left: 2px;font-family: 'Prompt', sans-serif;color:#0d4c60;">ราคาตามหมวดยอดนิยม</span><span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="#"><i class="fa fa-circle" aria-hidden="true" style="color:#cccccc;font-size: 8px;"></i> <span style="margin-left:2px;">Apple - iPad</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-circle" aria-hidden="true" style="color:#cccccc;font-size: 8px;"></i> <span style="margin-left:2px;">Apple - iPhone</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-circle" aria-hidden="true" style="color:#cccccc;font-size: 8px;"></i> <span style="margin-left:2px;">Andriod Tablet</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-circle" aria-hidden="true" style="color:#cccccc;font-size: 8px;"></i> <span style="margin-left:2px;">Andriod Phone</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/sidebar_tablet.png" alt=""><span style="font-weight: bold;font-size: 12px;margin-left: 2px;font-family: 'Prompt', sans-serif;color:#0d4c60;">ราคา Tablet ตามยี่ห้อ</span><span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="flot.html">Flot Charts</a>
                                            </li>
                                            <li>
                                                <a href="morris.html">Morris.js Charts</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/sidebar_phone.png" alt=""><span style="font-weight: bold;font-size: 12px;margin-left: 5px;font-family: 'Prompt', sans-serif;color:#0d4c60;">ราคามือถือตามยี่ห้อ</span><span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="flot.html">Flot Charts</a>
                                            </li>
                                            <li>
                                                <a href="morris.html">Morris.js Charts</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/sidebar_android.png" alt=""><span style="font-weight: bold;font-size: 12px;margin-left: 5px;font-family: 'Prompt', sans-serif;color:#0d4c60;">ราคามือถือ Andriod</span><span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="flot.html">Flot Charts</a>
                                            </li>
                                            <li>
                                                <a href="morris.html">Morris.js Charts</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/sidebar_window.png" alt=""><span style="font-weight: bold;font-size: 12px;margin-left: 5px;font-family: 'Prompt', sans-serif;color:#0d4c60;">ราคามือถือ Windows</span><span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="flot.html">Flot Charts</a>
                                            </li>
                                            <li>
                                                <a href="morris.html">Morris.js Charts</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/sidebar_price.png" alt=""><span style="font-weight: bold;font-size: 12px;margin-left: 5px;font-family: 'Prompt', sans-serif;color:#0d4c60;">ราคามือถือแบ่งตามราคา</span><span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="flot.html">Flot Charts</a>
                                            </li>
                                            <li>
                                                <a href="morris.html">Morris.js Charts</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                    <li>
                                        <a href="#"><img src="img/sidebar_tablet_price.png" alt=""><span style="font-weight: bold;font-size: 12px;margin-left: 5px;font-family: 'Prompt', sans-serif;color:#0d4c60;">Tablet ตามราคา</span><span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="flot.html">Flot Charts</a>
                                            </li>
                                            <li>
                                                <a href="morris.html">Morris.js Charts</a>
                                            </li>
                                        </ul>
                                        <!-- /.nav-second-level -->
                                    </li>
                                    
                                </ul>
                            </div>
                            <!-- /.sidebar-collapse -->
                        </div>
                         <!-- /.navbar-static-side -->
           
                    </div>
                    <div class="col-md-10" style="max-width: 820px;">

                        <!-- Tab Search And Banner -->
                        <div class="container" style="width:100%;padding: 0px;">
                            <div class="col-md-7" style="padding: 0px;">
                                <div style="background-image: url('img/background/background_search.png');background-repeat: no-repeat;width: 100%">

                                    <div class="container" style="width:100%;padding-top: 15px;">
                                         <span style="float: left;margin-right:15px;"><img src="img/icon/input_brand.png" alt=""></span>
                                         <select class="form-control" style="float: left;max-width: 290px;">
                                          <option>เลือกดูทุกยี่ห้อ</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                    </div>
                     
                                    <div class="container" style="width: 100%;padding-top: 10px;">
                                        <span style="float: left;margin-right: 10px;"><img src="img/icon/budget.png" alt=""></span>
                                        <select class="form-control" style="float: left;max-width: 130px;">
                                          <option>ตั้งแต่ 0 บาท</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                        <span style="float: left;"><img src="img/icon/to.png" alt=""></span>
                                        <select class="form-control" style="float: left;max-width: 130px;">
                                          <option>ไม่จำกัด บาท</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                    </div>

                                    <div class="container" style="width: 100%;padding-top: 20px;">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <a href="#"><img src="img/icon/search_by.png" alt=""></a>
                                            <span style="font-size: 11px;">[ค้นหาจากทั้งหมด 540 รุ่น]</span>
                                        </div>
                                    </div>
                                    <div class="container" style="width: 100%;padding-top: 20px;padding-bottom:20px;">
                                        <div class="col-sm-10 col-sm-offset-2" style="padding: 5px;">
                                            <a href="#"><img src="img/tab_menu/apple.png" alt=""></a>
                                            <a href="#"><img src="img/tab_menu/samsung.png" alt=""></a>
                                            <a href="#"><img src="img/tab_menu/htc.png" alt=""></a>
                                            <a href="#"><img src="img/tab_menu/nokia.png" alt=""></a>
                                            <a href="#"><img src="img/tab_menu/acer.png" alt=""></a>
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-2" style="padding: 5px 5px 25px 5px;">
                                            <a href="#"><img src="img/tab_menu/sony.png" alt=""></a>
                                            <a href="#"><img src="img/tab_menu/oppo.png" alt=""></a>
                                            <a href="#"><img src="img/tab_menu/lenovo.png" alt=""></a>
                                            <a href="#"><img src="img/tab_menu/vivo.png" alt=""></a>
                                            <a href="#"><img src="img/tab_menu/microsoft.png" alt=""></a>
                                        </div>
                                    </div>
                                   

                                </div>
                            </div>                     
                            <div class="col-md-5">
                                <img src="img/tab_menu/tab_banner.png" class="img-responsive" alt="">
                            </div>                     
                        </div><!-- End Tab Search And Banner -->

                        <!-- Product Price By Lazada -->
                        <div class="container" style="width:100%;padding: 0px;border: 1px solid #cccccc;margin-top: 15px;">
                            <div style="width: 100%;background-color:#183544 ">
                                <img src="img/tab_menu/hot_product_lazada.png" class="img-responsive" alt="">
                            </div>

                            <div class="container" style="width:100%;padding: 10px;">

                                <div class="row" style="margin:auto;">
                                    <div class="col-md-3">
                                         <div style="width:176px;height: 248px;border: 1px solid #cccccc;">
                                             <div style="text-align: center;margin:auto;">
                                                 <div style="max-width: 125px;max-height: 115px;margin: auto;"><img src="img/pic/price_phone.png" alt="" ></div>
                                                 <label>Apple iPhone6</label>
                                             </div>
                                             <div style="width:100%;background-color: #f8f7f7;padding: 5px;">
                                                 <div style="font-size: 12px;padding: 10px;">ราคา 4,9900 บาท <span style="color:#ffffff;background-color: #ff0000;padding: 5px;font-weight: bold;">-20%</span></div>
                                                 <div style="font-size: 16px;padding-left: 10px;color:#ff0000;font-weight: bold;">ราคา 5,800 บาท</div>
                                                 <div style="margin-top: 10px;"><a href="#"><img src="img/btn/btn_price_lazada.png" alt=""></a></div>
                                             </div>
                                         </div>                                         
                                    </div>
                                    <div class="col-md-3">
                                         <div style="width:176px;height: 248px;border: 1px solid #cccccc;">
                                             <div style="text-align: center;margin:auto;">
                                                 <div style="max-width: 125px;max-height: 115px;margin: auto;"><img src="img/pic/price_phone.png" alt="" ></div>
                                                 <label>Apple iPhone6</label>
                                             </div>
                                             <div style="width:100%;background-color: #f8f7f7;padding: 5px;">
                                                 <div style="font-size: 12px;padding: 10px;">ราคา 4,9900 บาท <span style="color:#ffffff;background-color: #ff0000;padding: 5px;font-weight: bold;">-20%</span></div>
                                                 <div style="font-size: 16px;padding-left: 10px;color:#ff0000;font-weight: bold;">ราคา 5,800 บาท</div>
                                                 <div style="margin-top: 10px;"><a href="#"><img src="img/btn/btn_price_lazada.png" alt=""></a></div>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="col-md-3">
                                         <div style="width:176px;height: 248px;border: 1px solid #cccccc;">
                                             <div style="text-align: center;margin:auto;">
                                                 <div style="max-width: 125px;max-height: 115px;margin: auto;"><img src="img/pic/price_phone.png" alt="" ></div>
                                                 <label>Apple iPhone6</label>
                                             </div>
                                             <div style="width:100%;background-color: #f8f7f7;padding: 5px;">
                                                 <div style="font-size: 12px;padding: 10px;">ราคา 4,9900 บาท <span style="color:#ffffff;background-color: #ff0000;padding: 5px;font-weight: bold;">-20%</span></div>
                                                 <div style="font-size: 16px;padding-left: 10px;color:#ff0000;font-weight: bold;">ราคา 5,800 บาท</div>
                                                 <div style="margin-top: 10px;"><a href="#"><img src="img/btn/btn_price_lazada.png" alt=""></a></div>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="col-md-3">
                                         <div style="width:176px;height: 248px;border: 1px solid #cccccc;">
                                             <div style="text-align: center;margin:auto;">
                                                 <div style="max-width: 125px;max-height: 115px;margin: auto;"><img src="img/pic/price_phone.png" alt="" ></div>
                                                 <label>Apple iPhone6</label>
                                             </div>
                                             <div style="width:100%;background-color: #f8f7f7;padding: 5px;">
                                                 <div style="font-size: 12px;padding: 10px;">ราคา 4,9900 บาท <span style="color:#ffffff;background-color: #ff0000;padding: 5px;font-weight: bold;">-20%</span></div>
                                                 <div style="font-size: 16px;padding-left: 10px;color:#ff0000;font-weight: bold;">ราคา 5,800 บาท</div>
                                                 <div style="margin-top: 10px;"><a href="#"><img src="img/btn/btn_price_lazada.png" alt=""></a></div>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                
                               
                                
                            </div>
                        </div><!-- End Product Price By Lazada -->

                        <!--  ===== Banner ===== -->
                        <div class="container" style="width:100%;margin: 15px;">                            
                                <img src="img/tab_menu/tab_banner_full.png" class="img-responsive" alt="">
                        </div><!--  ===== End Banner ===== -->

                        <!-- Price Catalog SmartPhone -->
                        <div class="container" style="width:100%;padding: 0px;border: 1px solid #cccccc;">
                            <div style="width: 100%;background-color:#26add8 ">
                                <img src="img/tab_menu/tab_catalog.png" class="img-responsive" alt="">
                            </div>

                            <div class="container" style="width:100%;padding: 10px;">

                                <div class="row" style="margin:auto;">
                                    <div class="col-md-3">
                                         <div style="width:176px;min-height: 248px;border: 1px solid #cccccc;text-align: center;">
                                             <div style="margin:auto;">
                                                 <div><a href="#"><img src="img/pic/pic_phone_asus.png" alt=""></a></div>
                                                 <span><img src="img/icon/android_price.png" alt=""></span>
                                                 <span><img src="img/icon/asus_brand.png" alt=""></span>
                                             </div>
                                             <div style="width:100%;background-color: #f8f7f7;padding: 5px;text-align: left;line-height: 1;">
                                                 <p style="font-weight: bold;font-size: 12px;">Samsung Galaxy J1 </p>
                                                 <p style="font-weight: bold;font-size: 11px;">CPU: ชิปเซ็ต Snapra... </p>
                                                 <p style="font-weight: bold;font-size: 11px;">GPU: Mali-400 GPU </p>
                                                 <p style="font-weight: bold;font-size: 11px;">Ram: 1GB </p>
                                                 <p style="font-weight: bold;font-size: 12px;color:#ff0000;">ราคา 23,000 </p>
                                                 <p style="font-size: 12px;">[2016-09-27]</p>
                                             </div>
                                             <div style="margin-top: 10px;">
                                                 <a href="#"><img src="img/btn/detail_spec.png" alt=""></a>
                                             </div>
                                             <div style="margin-top: 5px;margin-bottom: 10px;">
                                                 <a href="#"><img src="img/btn/compare.png" alt=""></a>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div style="width:176px;min-height: 248px;border: 1px solid #cccccc;text-align: center;">
                                             <div style="margin:auto;">
                                                 <div><a href="#"><img src="img/pic/pic_phone_asus.png" alt=""></a></div>
                                                 <span><img src="img/icon/android_price.png" alt=""></span>
                                                 <span><img src="img/icon/asus_brand.png" alt=""></span>
                                             </div>
                                             <div style="width:100%;background-color: #f8f7f7;padding: 5px;text-align: left;line-height: 1;">
                                                 <p style="font-weight: bold;font-size: 12px;">Samsung Galaxy J1 </p>
                                                 <p style="font-weight: bold;font-size: 11px;">CPU: ชิปเซ็ต Snapra... </p>
                                                 <p style="font-weight: bold;font-size: 11px;">GPU: Mali-400 GPU </p>
                                                 <p style="font-weight: bold;font-size: 11px;">Ram: 1GB </p>
                                                 <p style="font-weight: bold;font-size: 12px;color:#ff0000;">ราคา 23,000 </p>
                                                 <p style="font-size: 12px;">[2016-09-27]</p>
                                             </div>
                                             <div style="margin-top: 10px;">
                                                 <a href="#"><img src="img/btn/detail_spec.png" alt=""></a>
                                             </div>
                                             <div style="margin-top: 5px;margin-bottom: 10px;">
                                                 <a href="#"><img src="img/btn/compare.png" alt=""></a>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="col-md-3">
                                         <div style="width:176px;min-height: 248px;border: 1px solid #cccccc;text-align: center;">
                                             <div style="margin:auto;">
                                                 <div><a href="#"><img src="img/pic/pic_phone_asus.png" alt=""></a></div>
                                                 <span><img src="img/icon/android_price.png" alt=""></span>
                                                 <span><img src="img/icon/asus_brand.png" alt=""></span>
                                             </div>
                                             <div style="width:100%;background-color: #f8f7f7;padding: 5px;text-align: left;line-height: 1;">
                                                 <p style="font-weight: bold;font-size: 12px;">Samsung Galaxy J1 </p>
                                                 <p style="font-weight: bold;font-size: 11px;">CPU: ชิปเซ็ต Snapra... </p>
                                                 <p style="font-weight: bold;font-size: 11px;">GPU: Mali-400 GPU </p>
                                                 <p style="font-weight: bold;font-size: 11px;">Ram: 1GB </p>
                                                 <p style="font-weight: bold;font-size: 12px;color:#ff0000;">ราคา 23,000 </p>
                                                 <p style="font-size: 12px;">[2016-09-27]</p>
                                             </div>
                                             <div style="margin-top: 10px;">
                                                 <a href="#"><img src="img/btn/detail_spec.png" alt=""></a>
                                             </div>
                                             <div style="margin-top: 5px;margin-bottom: 10px;">
                                                 <a href="#"><img src="img/btn/compare.png" alt=""></a>
                                             </div>
                                         </div>
                                    </div>
                                    <div class="col-md-3">
                                         <div style="width:176px;min-height: 248px;border: 1px solid #cccccc;text-align: center;">
                                             <div style="margin:auto;">
                                                 <div><a href="#"><img src="img/pic/pic_phone_asus.png" alt=""></a></div>
                                                 <span><img src="img/icon/android_price.png" alt=""></span>
                                                 <span><img src="img/icon/asus_brand.png" alt=""></span>
                                             </div>
                                             <div style="width:100%;background-color: #f8f7f7;padding: 5px;text-align: left;line-height: 1;">
                                                 <p style="font-weight: bold;font-size: 12px;">Samsung Galaxy J1 </p>
                                                 <p style="font-weight: bold;font-size: 11px;">CPU: ชิปเซ็ต Snapra... </p>
                                                 <p style="font-weight: bold;font-size: 11px;">GPU: Mali-400 GPU </p>
                                                 <p style="font-weight: bold;font-size: 11px;">Ram: 1GB </p>
                                                 <p style="font-weight: bold;font-size: 12px;color:#ff0000;">ราคา 23,000 </p>
                                                 <p style="font-size: 12px;">[2016-09-27]</p>
                                             </div>
                                             <div style="margin-top: 10px;">
                                                 <a href="#"><img src="img/btn/detail_spec.png" alt=""></a>
                                             </div>
                                             <div style="margin-top: 5px;margin-bottom: 10px;">
                                                 <a href="#"><img src="img/btn/compare.png" alt=""></a>
                                             </div>
                                         </div>
                                    </div>
                                </div>
                
                               
                                
                            </div>
                        </div><!-- End Catalog SmartPhone -->

                        <div style="height: 20px;margin-bottom: 30px;"></div>

                    </div>
                </div>

            </div><!--================= End Body Content ===============-->
            
           
            <div style="float:right;width:120px;" class="hidden-xs hidden-sm hidden-md">
                <img src="img/pic/banner_left.png" alt="">
            </div>
            
        </div>

        
        <!-- ===================================== Footer =============================================-->
        <div class="container" style="width: 100%;padding: 0px;margin-top: 5px;">

            <div class="hidden-xs" style="background: #252525;width: 100%;color:#FFFFFF;padding: 10px;font-size: 10px;">
                <table style="width: 100%;max-width: 1200px;margin: auto;">
                    <tr>
                        <td style="vertical-align: text-top;">
                            <h4>หน้าแรก (Home)</h4>
                            <ul style="padding: 0px;list-style: none;color: #7c7c7c;font-size: 11px;">
                                <li>อัพเดทราคา iPhone, iPad, iPad Air และ iPad Mini</li>
                                <li>รวมข่าว Tablet ราคา Tablet</li>
                                <li>iPhone 5s iPhone 6 ข่าว ไอโฟน ล่าสุด</li>
                                <li>ข่าว Android คนรัก แอนดรอยด์</li>
                                <li>รวมบทความ Review Tablet</li>
                                <li>รวมบทความ Review มือถือ Smartphone</li>
                                <li>รวมบทความ Review Notebook และ Gadget ที่น่าสนใจ</li>
                            </ul>
                        </td>
                        <td style="vertical-align: text-top;">
                            <h4>(สินค้า IT) ออกใหม่</h4>
                            <ul style="padding: 0px;list-style: none;color: #7c7c7c;font-size: 11px;">
                                <li>Catalog Tablet</li>
                                <li>Catalog มือถือ Smartphone</li>
                                <li>ราคา Tablet</li>
                                <li>ราคา มือถือ Smartphone</li>
                            </ul>
                        </td>
                        <td style="vertical-align: text-top;">
                            <h4>บทความเด่นในเว็บไซต์</h4>
                            <ul style="padding: 0px;list-style: none;color: #7c7c7c;font-size: 11px;">
                                <li>แอนดรอยด์คืออะไร (What is Android ?)</li>
                                <li>รวมข่าวอัพเดทเกี่ยวกับ iPhone 5S</li>
                                <li>รวมข่าวอัพเดทเกี่ยวกับ Samsung Galaxy Note 3 </li>
                                <li>รวมข่าวอัพเดทเกี่ยวกับ Apple Smart Watch (iWatch)</li>
                                <li>รีวิว Samsung Galaxy S4 (ซัมซุง กาแล็กซี่ เอส 4)</li>
                                <li>รีวิว iPad Mini 2 (with Retina Display)</li>
                                <li>ราคา iPad ในไทยทั้ง iPad Air, iPad 2 และ iPad 4 (ไอแพด)</li>
                            </ul>
                        </td>
                        <td style="vertical-align: text-top;color: #7c7c7c;font-weight: bolder;">
                            <h4>FOLLOW US</h4>
                            <div><img src="images/button/facebook_medium.png" alt=""> FACEBOOK</div>
                            <div><img src="images/button/twitter_medium.png" alt=""> TWITTER</div>
                            <div><img src="images/button/rss.png" alt=""> RSS</div>
                            <div><img src="images/button/youtube_medium.png" alt=""> YOUTUBE</div>
                            <div style="margin-top: 10px;"><img src="images/adver.png" class="img-responsive center-block" alt=""></div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="tab-footer hidden-xs" style="background-color:#1e1e1e;">
                <table style="width: 100%;max-width: 1200px;margin: auto;">
                    <tr>
                        <td style="width: 50%">
                            © Copyright 2009 Techmoblog.com All rights reserved. Contact us | Term of services
                        </td>
                        <td style="width: 50%;text-align: right;padding-right: 50px;">
                            WWW.TECHMOBLOG.COM Tech your life ....
                        </td>
                    </tr>
                </table>
            </div>

            <div class="container tab-footer hidden-md hidden-sm hidden-lg" style="text-align:center;background-color:#1e1e1e;">
              <div class="row" style="width:100%;">
                <div class="col-md-8">
                  © Copyright 2009 Techmoblog.com All rights reserved. Contact us | Term of services
                </div>
                <div class="col-md-4">
                  WWW.TECHMOBLOG.COM Tech your life ....
                </div>
              </div>
            </div>

        </div>
        <!-- ===================================== End  Footer =========================================-->

    </div>


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.7&appId=963402367100201";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>