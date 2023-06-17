<?php require 'public/header.php' ?>
    <!-- header-end -->
    
    <!-- bradcam_area  -->
    <div class="slider_area" style="height: 350px; padding: 0 0 -10px 0">
    <div class="single_slider  d-flex align-items-center slider_bg_1" style="height: 350px; margin: 0 0 -10px 0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 col-md-6">
            <div class="slider_text">
              <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Оставить отзыв</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s"
      data-wow-delay=".2s">
      <img src="img/banner/contact.png" alt="">
    </div>
  </div>
    <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      


      <div class="row">
        
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите сообщение'" placeholder = 'Введите собщение'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите ваше Имя'" placeholder = 'Введите ваше Имя'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введите вашу почту'" placeholder = 'Введите вашу почту'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Тема отзыва'" placeholder = 'Тема отзыва'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4 boxed-btn">Отправить отзыв</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Центральная азия</h3>
              <p></p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+996 005 131</h3>
              <p>Пон-Пят 9:00-17:00>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>MaxVel@gmail.com</h3>
              <p>Пишите в любое время</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
    <!-- footer start -->
  <?php require 'public/footer.php' ?>