 <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        
        <!-- Header Top -->
        <div class="header-top hidden-compact"> 
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-3 col-md-4 col-sm-5 hidden-xs">           
                        <div class="telephone " >
                            <ul class="socials">
                                <li class="facebook"><a href="https://www.facebook.com/smartaddons.page" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="google_plus"><a href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li class="pinterest"><a href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="instagram"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>             
                        
                        
                    </div>
                    <div class="header-top-right col-lg-9 col-md-8 col-sm-7 col-xs-12">
                        <ul class="top-link list-inline lang-curr">
                            <li class="currency">
                                <div class="btn-group currencies-block">
                                    <form action="index.php" method="post" enctype="multipart/form-data" id="currency">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span> $ US Dollar  <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu btn-xs">
                                            <li> <a href="#">(€)&nbsp;Euro</a></li>
                                            <li> <a href="#">(£)&nbsp;Pounds    </a></li>
                                            <li> <a href="#">($)&nbsp;US Dollar </a></li>
                                        </ul>
                                    </form>
                                </div>
                            </li>   
                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <form action="index.php" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <img src="image/catalog/flags/gb.png" alt="English" title="English">
                                            <span class="eng">English</span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.php"><img class="image_flag" src="image/catalog/flags/gb.png" alt="English" title="English" /> English </a></li>
                                            <li> <a href="html_with_RTL/index.php"> <img class="image_flag" src="image/catalog/flags/ar.png" alt="Arabic" title="Arabic" /> Arabic </a> </li>
                                        </ul>
                                    </form>
                                </div>
                                
                            </li>
                        </ul>
                        <ul class="top-log list-inline">                          
                            <li><i class="fa fa-lock"></i><a href="login.php">Login</a> / </li><li><a href="register.php">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>      
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">           
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="index.php"><img src="image/catalog/logo.png" title="Your Store" alt="Your Store" /></a>
                        </div>
                        
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 middle-right">
                        <div class="search-header-w">
                            <div class="icon-search hidden-lg hidden-md"><i class="fa fa-search"></i></div>                                
                              
                            <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="index.php">
                                    <div id="search0" class="search input-group form-group">
                                        <div class="select_category filter_type  icon-select hidden-sm hidden-xs">
                                            <select class="no-border" name="category_id">
                                                <option value="0">All Categories</option>
                                                <option value="78">Apparel</option>
                                                <option value="77">Cables &amp; Connectors</option>
                                                <option value="82">Cameras &amp; Photo</option>
                                                <option value="80">Flashlights &amp; Lamps</option>
                                                <option value="81">Mobile Accessories</option>
                                                <option value="79">Video Games</option>
                                                <option value="20">Jewelry &amp; Watches</option>
                                                <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earings</option>
                                                <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wedding Rings</option>
                                                <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Men Watches</option>
                                            </select>
                                        </div>

                                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Keyword here..." name="search">
                                
                                        <button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
                                    
                                    </div>
                                    <input type="hidden" name="route" value="product/search" />
                                </form>
                            </div>
                        </div>

                        <div class="shopping_cart">
                            <div id="cart" class="btn-shopping-cart">

                                <a href="javascript:void(0)" data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="shopcart">
                                        <span class="icon-c">
                                            <i class="fa fa-shopping-basket"></i>
                                        </span>
                                        <div class="shopcart-inner">
                                            <p class="text-shopping-cart">
                                                My cart
                                            </p>

                                            <span class="total-shopping-cart cart-total-full">
                                            <span class="items_cart">02</span><span class="items_cart2"> item(s)</span><span class="items_carts">$162.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>

                                <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="width:70px">
                                                        <a href="product.php">
                                                            <img src="image/catalog/demo/product/80/1.jpg" style="width:70px" alt="Yutculpa ullamcon" title="Yutculpa ullamco" class="preview">
                                                        </a>
                                                    </td>
                                                    <td class="text-left"> <a class="cart_product_name" href="product.php">Yutculpa ullamco</a> 
                                                    </td>
                                                    <td class="text-center">x1</td>
                                                    <td class="text-center">$80.00</td>
                                                    <td class="text-right">
                                                        <a href="product.php" class="fa fa-edit"></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width:70px">
                                                        <a href="product.php">
                                                            <img src="image/catalog/demo/product/80/2.jpg" style="width:70px" alt="Xancetta bresao" title="Xancetta bresao" class="preview">
                                                        </a>
                                                    </td>
                                                    <td class="text-left"> <a class="cart_product_name" href="product.php">Xancetta bresao</a> 
                                                    </td>
                                                    <td class="text-center">x1</td>
                                                    <td class="text-center">$60.00</td>
                                                    <td class="text-right">
                                                        <a href="product.php" class="fa fa-edit"></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><strong>Sub-Total</strong>
                                                        </td>
                                                        <td class="text-right">$140.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                                        </td>
                                                        <td class="text-right">$2.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>VAT (20%)</strong>
                                                        </td>
                                                        <td class="text-right">$20.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong>Total</strong>
                                                        </td>
                                                        <td class="text-right">$162.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="text-right"> <a class="btn view-cart" href="cart.php"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.php"><i class="fa fa-share"></i>Checkout</a> 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="wishlist hidden-md hidden-sm hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Wish List (0) "><i class="fa fa-heart"></i></a></div>
                                         
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom hidden-compact"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="menu-vertical-w">   
                            <div class="responsive so-megamenu megamenu-style-dev ">
                                <div class="so-vertical-menu ">
                                    <nav class="navbar-default">    
                                        
                                        <div class="container-megamenu vertical">
                                            <div id="menuHeading">
                                                <div class="megamenuToogle-wrapper">
                                                    <div class="megamenuToogle-pattern">
                                                        <div class="container">
                                                            <div>
                                                                <span></span>
                                                                <span></span>
                                                                <span></span>
                                                            </div>
                                                            All Categories                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                            <div class="navbar-header">
                                                <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">      
                                                    <i class="fa fa-bars"></i>
                                                    <span>  All Categories     </span>
                                                </button>
                                            </div>
                                            <div class="vertical-wrapper" >
                                                <span id="remove-verticalmenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container-mega">
                                                        <ul class="megamenu">
                                                            <li class="item-vertical  with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                    
                                                                    <span>Lighting</span>
                                                                    <b class="fa-angle-right"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="60"  >
                                                                    <div class="content" >
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"  class="main-menu">Apparel</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#" >Accessories for Tablet PC</a></li>
                                                                                                        <li><a href="#" >Accessories for i Pad</a></li>
                                                                                                        <li><a  href="#" >Accessories for iPhone</a></li>
                                                                                                        <li><a href="#" >Bags, Holiday Supplies</a></li>
                                                                                                        <li><a href="#" >Car Alarms and Security</a></li>
                                                                                                        <li><a href="#" >Car Audio &amp; Speakers</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"  class="main-menu">Cables &amp; Connectors</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#" >Cameras &amp; Photo</a></li>
                                                                                                        <li><a href="#" >Electronics</a></li>
                                                                                                        <li><a href="#" >Outdoor &amp; Traveling</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"  class="main-menu">Camping &amp; Hiking</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#" >Earings</a></li>
                                                                                                        <li><a href="#" >Shaving &amp; Hair Removal</a></li>
                                                                                                        <li><a href="#" >Salon &amp; Spa Equipment</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Smartphone &amp; Tablets</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#" >Sports &amp; Outdoors</a></li>
                                                                                                        <li><a href="#" >Bath &amp; Body</a></li>
                                                                                                        <li><a href="#" >Gadgets &amp; Auto Parts</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"  class="main-menu">Bags, Holiday Supplies</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#" onclick="window.location = '18_46';">Battereries &amp; Chargers</a></li>
                                                                                                        <li><a href="#" onclick="window.location = '24_64';">Bath &amp; Body</a></li>
                                                                                                        <li><a href="#" onclick="window.location = '18_45';">Headphones, Headsets</a></li>
                                                                                                        <li><a href="#" onclick="window.location = '18_30';">Home Audio</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                   
                                                                    <span>Oil Fluids</span>                                                                    
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical  style1 with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <span class="label"></span>                                                                    
                                                                    <span>Smart Devices</span>                                                                     
                                                                    <b class="fa-angle-right"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="40" >
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <div class="col-md-12 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li><a href="#" class="main-menu">Smartphone</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Esdipiscing</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Scanners</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Apple</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Dell</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Scanners</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li><a href="#" class="main-menu">Electronics</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#">Asdipiscing</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Diam sit</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Labore et</a>
                                                                                                        </li>
                                                                                                        <li><a href="#">Monitors</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="row banner">
                                                                                    <a href="#">
                                                                                        <img src="image/catalog/menu/megabanner/vbanner1.png" alt="banner1">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            <li class="item-vertical with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                    
                                                                    <span>Paintworks</span>
                                                                    <b class="fa-angle-right"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="60" >
                                                                    <div class="content" >
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="row">
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Car Alarms and Security</a>
                                                                                                    <ul>
                                                                                                        <li><a href="#" >Car Audio &amp; Speakers</a></li>
                                                                                                        <li><a href="#" >Gadgets &amp; Auto Parts</a></li>
                                                                                                        <li><a href="#" >Gadgets &amp; Auto Parts</a></li>
                                                                                                        <li><a href="#" >Headphones, Headsets</a></li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="24" onclick="window.location = '24';" class="main-menu">Health &amp; Beauty</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#" >Home Audio</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Helicopters &amp; Parts</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Outdoor &amp; Traveling</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Toys &amp; Hobbies</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#"  class="main-menu">Electronics</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#">Earings</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Salon &amp; Spa Equipment</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Shaving &amp; Hair Removal</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#">Smartphone &amp; Tablets</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#"  class="main-menu">Sports &amp; Outdoors</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#" >Flashlights &amp; Lamps</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Fragrances</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Fishing</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >FPV System &amp; Parts</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">More Car Accessories</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#" >Lighter &amp; Cigar Supplies</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Mp3 Players &amp; Accessories</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Men Watches</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Mobile Accessories</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Gadgets &amp; Auto Parts</a>
                                                                                                    <ul>
                                                                                                        <li>
                                                                                                            <a href="#" >Gift &amp; Lifestyle Gadgets</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Gift for Man</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Gift for Woman</a>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <a href="#" >Gift for Woman</a>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item-vertical css-menu with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                                                                                    
                                                                    <span>Replacement Parts</span>
                                                                    <b class="fa-angle-right"></b>
                                                                </a>
                                                                <div class="sub-menu" data-subwidth="20">
                                                                    <div class="content" >
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-sm-12 hover-menu">
                                                                                        <div class="menu">
                                                                                            <ul>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Headphones, Headsets</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Home Audio</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Health &amp; Beauty</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Helicopters &amp; Parts</a>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <a href="#" class="main-menu">Helicopters &amp; Parts</a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                    
                                                                    <span>Tool & equipments</span>                                                                    
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                    
                                                                    <span>Wheels & Tires</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                    
                                                                    <span>Car Parts</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" >
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                    
                                                                    <span>Gaming Toys</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" >
                                                                <p class="close-menu"></p>                                                                
                                                                <a href="#" class="clearfix">
                                                                    <span>Baby Car Seats</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                    
                                                                    <span>Motobike Care</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                     
                                                                    <span>Jewelry &amp; Watches</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                    
                                                                    <span>Home &amp; Lights</span>
                                                                </a>
                                                            </li>
                                                            <li class="item-vertical" style="display: none;">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">                                                                    
                                                                    <span>Metallurgy</span>
                                                                </a>
                                                            </li>
                                                           
                                                            <!-- <li class="loadmore">
                                                                <i class="fa fa-plus-square-o"></i>
                                                                <span class="more-view">More Categories</span>
                                                            </li> -->
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </nav>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
                        <div class="main-menu-w">
                            <div class="responsive so-megamenu megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal open ">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        
                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                        <li class="home hover">
                                                            <a href="index.php">Home</a>
                                                            <div class="sub-menu" style="width:100%;" >
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="index.php" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home1.jpg" alt="image">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - (Default)</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home2.php" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home2.jpg" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 2</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home3.php" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home3.jpg" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 3</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home4.php" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home4.jpg" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 4</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home5.php" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home5.jpg" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 5</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home6.php" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home6.jpg" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 6</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home7.php" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home7.jpg" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 7</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="home8.php" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/home8.jpg" alt="image">
                                                                                   
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - Layout 8</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="html_with_RTL/index.php" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/catalog/menu/rtl.jpg" alt="image">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Home page - RTL</h3> 
                                                                            </a> 
                                                                            
                                                                        </div>
                                                                        
                                                                        <!-- <div class="col-md-15">
                                                                            <a href="#" class="image-link"> 
                                                                                <span class="thumbnail">
                                                                                    <img class="img-responsive img-border" src="image/demo/feature/comming-soon.png" alt="">
                                                                                    
                                                                                </span> 
                                                                                <h3 class="figcaption">Comming soon</h3> 
                                                                            </a> 
                                                                            
                                                                        </div> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Features</strong>                                                                
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; right: auto;">
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">Listing pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="category.php">Category Page 1 </a></li>
                                                                                        <li><a href="category-v2.php">Category Page 2</a></li>
                                                                                        <li><a href="category-v3.php">Category Page 3</a></li>
                                                                                    </ul>
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">Product pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="product.php">Product page 1</a></li>
                                                                                        <li><a href="product-v2.php">Product page 2</a></li>
                                                                                        <!-- <li><a href="product-v3.php">Image size - small</a></li> -->
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">Shopping pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="cart.php">Shopping Cart Page</a></li>
                                                                                        <li><a href="checkout.php">Checkout Page</a></li>
                                                                                        <li><a href="compare.php">Compare Page</a></li>
                                                                                        <li><a href="wishlist.php">Wishlist Page</a></li>
                                                                                    
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="column">
                                                                                <a href="#" class="title-submenu">My Account pages</a>
                                                                                <div>
                                                                                    <ul class="row-list">
                                                                                        <li><a href="login.php">Login Page</a></li>
                                                                                        <li><a href="register.php">Register Page</a></li>
                                                                                        <li><a href="my-account.php">My Account</a></li>
                                                                                        <li><a href="order-history.php">Order History</a></li>
                                                                                        <li><a href="order-information.php">Order Information</a></li>
                                                                                        <li><a href="return.php">Product Returns</a></li>
                                                                                        <li><a href="gift-voucher.php">Gift Voucher</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Pages</strong>
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 40%; ">
                                                                <div class="content" >
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="faq.php">FAQ</a></li>
                                                                                
                                                                                <li><a class="subcategory_item" href="sitemap.php">Site Map</a></li>
                                                                                <li><a class="subcategory_item" href="contact.php">Contact us</a></li>
                                                                                <li><a class="subcategory_item" href="banner-effect.php">Banner Effect</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <ul class="row-list">
                                                                                <li><a class="subcategory_item" href="about-us.php">About Us 1</a></li>
                                                                                <li><a class="subcategory_item" href="about-us-2.php">About Us 2</a></li>
                                                                                <li><a class="subcategory_item" href="about-us-3.php">About Us 3</a></li>
                                                                                <li><a class="subcategory_item" href="about-us-4.php">About Us 4</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Categories</strong>                                                             
                                                      
                                                                <b class="caret"></b>
                                                            </a>
                                                            <div class="sub-menu" style="width: 100%; display: none;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-md-3 img img1">
                                                                                    <a href="#"><img src="image/catalog/menu/megabanner/image-1.jpg" alt="banner1"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img2">
                                                                                    <a href="#"><img src="image/catalog/menu/megabanner/image-2.jpg" alt="banner2"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img3">
                                                                                    <a href="#"><img src="image/catalog/menu/megabanner/image-3.jpg" alt="banner3"></a>
                                                                                </div>
                                                                                <div class="col-md-3 img img4">
                                                                                    <a href="#"><img src="image/catalog/menu/megabanner/image-4.jpg" alt="banner4"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Automotive</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Car Alarms and Security</a></li>
                                                                                            <li><a href="#"  class="main-menu">Car Audio &amp; Speakers</a></li>
                                                                                            <li><a href="#"  class="main-menu">Gadgets &amp; Auto Parts</a></li>
                                                                                            <li><a href="#"  class="main-menu">More Car Accessories</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Funitures</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Bathroom</a></li>
                                                                                            <li><a href="#"  class="main-menu">Bedroom</a></li>
                                                                                            <li><a href="#"  class="main-menu">Decor</a></li>
                                                                                            <li><a href="#"  class="main-menu">Living room</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Jewelry &amp; Watches</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Earings</a></li>
                                                                                            <li><a href="#"  class="main-menu">Wedding Rings</a></li>
                                                                                            <li><a href="#"  class="main-menu">Men Watches</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <a href="#" class="title-submenu">Electronics</a>
                                                                            <div class="row">
                                                                                <div class="col-md-12 hover-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li><a href="#"  class="main-menu">Computer</a></li>
                                                                                            <li><a href="#"  class="main-menu">Smartphone</a></li>
                                                                                            <li><a href="#"  class="main-menu">Tablets</a></li>
                                                                                            <li><a href="#"  class="main-menu">Monitors</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="#" class="clearfix">
                                                                <strong>Accessories</strong>
                                             
                                                            </a>
                                                
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="blog-page.php" class="clearfix">
                                                                <strong>Blog</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                        
                                                        
                                                    </ul>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

        </div>

    </header>
    <!-- //Header Container  -->