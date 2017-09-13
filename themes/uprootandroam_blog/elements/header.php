<?php defined('C5_EXECUTE') or die("Access Denied."); 

$this->inc('elements/header_top.php'); ?>

<!--<header class="header-bar">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="header-brand col-med-4 col-sm-5 col-xs-10">-->
<!--				--><?php
//				$a = new GlobalArea('Header Site Title');
//				$a->display();
//				?>
<!--			</div>-->
<!--			<div class="header-nav col-md-5 col-sm-7 col-xs-2">-->
<!--				--><?php
//				$a = new GlobalArea('Header Navigation');
//				$a->display();
//				?>
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</header>-->

<!-- Polo Theme Header -->
<header id="header">
    <div id="header-wrap">
        <div class="container"> <!--Logo-->
            <div id="logo"> <a href="index.html" class="logo" data-dark-logo="<?php echo $view->getThemePath()?>/images/ur_logo-dark.png"> <img src="<?php echo $view->getThemePath()?>/images/ur_logo.png" alt="Uproot & Roam"> </a> </div>
            <!--End: Logo-->

            <!--Top Search Form-->
            <div id="top-search">
                <form action="search-results-page.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                </form>
            </div>
            <!--end: Top Search Form-->

            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        <!--top search-->
                        <a id="top-search-trigger" href="#" class="toggle-item">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-close"></i>
                        </a>
                        <!--end: top search-->
                    </li>
<!--                    <li class="hidden-xs">-->
<!--                        <!--shopping cart-->
<!--                        <div id="shopping-cart">-->
<!--                            <a href="shop-cart.html">-->
<!--                                <span class="shopping-cart-items">8</span>-->
<!--                                <i class="fa fa-shopping-cart"></i></a>-->
<!--                        </div>-->
<!--                        <!--end: shopping cart-->
<!--                    </li>-->
                </ul>
            </div>
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul><li><a href="index.html">Home</a></li>



                             <li class="dropdown mega-menu-item"> <a href="#">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-2-5">
                                                <ul>
                                                    <li class="mega-menu-title">Masonry</li>
                                                    <li> <a href="blog-masonry-2.html">Two Columns</a> </li>
                                                    <li> <a href="blog-masonry-3.html">Three Columns<span class="label label-danger">HOT</span></a> </li>
                                                    <li> <a href="blog-masonry-4.html">Four Columns</a> </li>
                                                    <li> <a href="blog-masonry-sidebar.html">Sidebar version</a> </li>
                                                    <li> <a href="blog-masonry-no-page-title.html">No page title</a> </li>
                                                    <li> <a href="blog-masonry-wide.html">Wide version</a> </li>
                                                    <li> <a href="blog-masonry-load-more.html">Load More</a> </li>
                                                    <li> <a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a> </li>
                                                    <li> <a href="blog-masonry-filter.html">Filter Categories</a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!--END: NAVIGATION-->
        </div>
    </div>
</header>
<!-- end: Polo Theme Header -->