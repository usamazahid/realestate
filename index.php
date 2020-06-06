<?php 
$pgtitle = "Home";
include('header.php');
?>



    <!--start-slider-section-->
    <section class="slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                    $i = 1;
                    $slistmt = mysql_query('SELECT img, stext FROM slider_home ORDER BY RAND()');
                    while($slider = mysql_fetch_array($slistmt)){
                        $pic = $fronturl . '/slider/' . $slider[0];
                ?>
                <div class="item<?php echo ($i==1)?' active':''; ?>">
                    <img src="<?php echo $pic; ?>" alt="slider-img">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="banner-content">
                                <div class="container">
                                    <div class="row">
                                        <?php echo $slider[1]; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++;} ?>
                <!-- Controls -->
                <a class="left carousel-control1" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control2" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!--end-slider-section-->

    <!--start about section-->
    <section class="about-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading">
                        <h2>about<span>us</span></h2>
                        <div class="head-img">
                            <img src="asset/images/header.png" alt="header-img">
                        </div>
                    </div>
                    <div class="about-content">
                        <p>
                            <?php echo $about['text']; ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="about-img padding-top">
                        <img  src="asset/images/about.jpg" alt="about-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end about section-->

    <!--start feature section-->
    <section class="feature-section">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="section-heading">
                       
                    </div>
                    <div class="section-wrapper">
                        <?php
                            $featstmt = mysql_query('SELECT name, stext, icon FROM features ORDER BY RAND() LIMIT 4');
                            while($feature = mysql_fetch_array($featstmt)){
                        ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <div class="feature-icon"><i class="fa <?php echo $feature[2]; ?>" aria-hidden="true"></i></div>
                                <h3><?php echo $feature[0]; ?></h3>
                                <p><?php echo $feature[1]; ?></p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end feature section-->

    <!--start service section-->
    <section class="service-section section-padding">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                    <h2>our<span>projects</span></h2>
                    <div class="head-img">
                        <img src="asset/images/header.png" alt="header-img">
                    </div>
                </div>
                <div class="section-wrapper">

                    <?php
                        $serstmt = mysql_query('SELECT name, stext, icon FROM services ORDER BY RAND() LIMIT 6');
                        while($service = mysql_fetch_array($serstmt)){
                    ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-item">
                            <div class="service-icon"><i class="fa <?php echo $service[2]; ?>" aria-hidden="true"></i></div>
                            <h3><?php echo $service[0]; ?></h3>
                            <p><?php echo $service[1]; ?> </p>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
    <!--end service section-->


  

<?php 
include('footer.php');
?>