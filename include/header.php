 <!-- Header Container  -->
 <header id="header" class=" typeheader-1">

    <!-- Header Top -->
    <div class="header-top hidden-compact"> 
        <div class="container">
            <div class="row">
                <div class="header-top-left col-lg-3 col-md-4 col-sm-5 hidden-xs">           
                    <div class="telephone " >
                        <ul class="socials">
                            <li class="facebook"><a href="javascript:void(0);" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="javascript:void(0);" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="google_plus"><a href="javascript:void(0);" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li class="instagram"><a href="javascript:void(0);" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li class="linkedin"><a href="javascript:void(0);" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>             


                </div>
                <div class="header-top-right col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <ul class="top-link list-inline lang-curr">
                        <li class="currency">
                         Made With <i class="fa fa-heart"></i> in India
                     </li>   
                 </ul>
                 <ul class="top-log list-inline">  
                    <li><a href="javascript:void(0);">Track By Order</a> / </li>                        
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
                    <a href="index.php"><img src="image/catalog/logo.svg" title="Your Store" alt="Your Store" /></a>
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

                                <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search by Part Number/Name" name="search">
                                
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
                            </div>
                        </a>
                    </div>
                </div>

                <div class="wishlist hidden-md hidden-sm hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Wish List (0) "><i class="fa fa-heart"></i></a></div>

            </div>
        </div>
    </div>
</div>
</header>
    <!-- //Header Container  -->