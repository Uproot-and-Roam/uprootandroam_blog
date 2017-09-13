<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<!-- Polo Theme Content -->
<section id="page-content">
    <div class="container">
        <!-- post content -->

        <!-- Page title -->
        <div class="page-title">
            <h1>Welcome to Uproot & Roam</h1>
            <div class="breadcrumb float-left">
                <ul>
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">Blog</a> </li>
                    <li class="active"><a href="#">Two Columns</a> </li>
                </ul>
            </div>
        </div>
        <!-- end: Page title -->


            <?php
            $a = new Area('Main');
            $a->enableGridContainer();
            $a->display($c);

            $a = new Area('Page Footer');
            $a->enableGridContainer();
            $a->display($c);
            ?>


        <!-- Blog -->
        <div id="blog" class="grid-layout post-2-columns m-b-30" data-item="post-item">

            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-image"> <a href="#"> <img alt="" src="<?php echo $view->getThemePath()?>/images/blog/12.jpg"> </a> <span class="post-meta-category"><a href="">Lifestyle</a></span> </div>
                    <div class="post-item-description"> <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                        <h2><a href="#">Lighthouse, standard post with a single image </a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a> </div>
                </div>
            </div>
            <!-- end: Post item-->

            <!-- Post item-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-slider">
                        <div class="carousel dots-inside arrows-visible arrows-only" data-items="1" data-loop="true" data-autoplay="true" data-lightbox="gallery"> <a href="<?php echo $view->getThemePath()?>/images/blog/11.jpg" data-lightbox="gallery-item"> <img alt="" src="<?php echo $view->getThemePath()?>/images/blog/16.jpg"> </a> <a href="images/blog/16.jpg" data-lightbox="gallery-item"> <img alt="" src="<?php echo $view->getThemePath()?>/images/blog/11.jpg"> </a> </div>
                        <span class="post-meta-category"><a href="">Technology</a></span> </div>
                    <div class="post-item-description"> <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                        <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a> </div>
                </div>
            </div>
            <!-- end: Post item-->

            <!-- Post item YouTube-->
            <div class="post-item border">
                <div class="post-item-wrap">
                    <div class="post-video">
                        <iframe width="560" height="376" src="https://www.youtube.com/embed/dA8Smj5tZOQ" frameborder="0" allowfullscreen></iframe>
                        <span class="post-meta-category"><a href="">Video</a></span> </div>
                    <div class="post-item-description"> <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span> <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                        <h2><a href="#">This is a example post with YouTube</a></h2>
                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                        <a href="#" class="item-link">Read More </a> </div>
                </div>
            </div>
            <!-- end: Post item YouTube-->

        </div>
        <!-- end: Blog -->

        <!-- Pagination -->
        <div class="pagination pagination-simple">
            <ul>
                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a> </li>
                <li><a href="#">1</a> </li>
                <li><a href="#">2</a> </li>
                <li class="active"><a href="#">3</a> </li>
                <li><a href="#">4</a> </li>
                <li><a href="#">5</a> </li>
                <li> <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a> </li>
            </ul>
        </div>
        <!-- end: Pagination -->

    </div>
    <!-- end: post content -->

</section>
<!-- end: Polo Theme Content -->

<?php $this->inc('elements/footer.php'); ?>
