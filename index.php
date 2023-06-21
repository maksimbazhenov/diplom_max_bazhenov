<?php require  'public/header.php' ?>
<?php require_once 'connect/connect.php';?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Max Vel</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s">Интернет – это наша площадка, твой успех – это наша цель!</p>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">Мы верим, что силой онлайн-присутствия можно добиться 
                                неограниченных возможностей для развития бизнеса. Наша команда опытных специалистов по цифровому маркетингу готова разработать
                                 и реализовать индивидуальный продукт адаптированный к вашим уникальным потребностям и целям.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
            <img src="img/banner/baner.avif" alt="" width="550" height="350">
        </div>
    </div>
    <!-- slider_area_end -->

    

    <!-- popular_catagory_area_start  -->
    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-40">
                        <h3>Наши услуги</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="\web_dew.php"><h4>Разработка сайтов</h4></a>
                        <p>от <span>15 000</span>с</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="seo.php"><h4>SEO оптимизация</h4></a>
                        <p> от <span>19 000</span>сом/мес</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="jobs.html"><h4>SMM-продвижение</h4></a>
                        <p> <span>Широкий</span> спектр г</p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="consalt.php"><h4>Консультация</h4></a> 
                        <p> <span>В удобное время</span> </p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- popular_catagory_area_end  -->

    <!-- job_listing_area_start  -->
    
    <!-- job_listing_area_end  -->

    <!-- featured_candidates_area_start  -->
    <div class="featured_candidates_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Наша команда</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
                    <?php $sql = $pdo->prepare("SELECT * FROM `work`");
                    $sql->execute();
                    while ($res = $sql->fetch(PDO::FETCH_OBJ)): ?>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="img/job/<?php echo $res->filename ?>" alt="">
                            </div>
                            <a href="#"><h4><?php echo $res->name ?></h4></a>
                            <p><h4><?php echo $res->job_title ?></p>
                        </div>
                    <?php endwhile ?>  
                       
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured_candidates_area_end  -->

    

    <!-- job_searcing_wrap  -->
   
    <!-- job_searcing_wrap end  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Отзывы</h3>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                    <?php $sql = $pdo->prepare("SELECT * FROM `subject`");
                    $sql->execute();
                    while ($res = $sql->fetch(PDO::FETCH_OBJ)): ?>
                        <div class="single_carousel">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="img/user/<?php echo $res->filename ?>" alt="" ;>
                                            <div class="quote_icon">
                                                <i class="Flaticon flaticon-quote"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <p><?php echo $res->message ?> <br></p>
                                            <span><?php echo $res->name ?> <br></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <?php require 'public/footer.php' ?>

    <!-- footer start -->
    