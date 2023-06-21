<?php require 'public/header.php' ?>






  <div class="slider_area" style="height: 350px; padding: 50px 0 -10px 0">
    <div class="single_slider  d-flex align-items-center slider_bg_1" style="height: 350px;  width:100%;margin: 0 0 -10px 0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-23">
            <div class="slider_text bt-5" style="margin-top:50px;">
              <form action="admin/admin_open.php" method="post" class=" form-signin mt-3" role="form">
                <h1 class=" form-signin-heading mt-3 ">Войти в админу</h1>
                <input type="text" name="login" class="form-control mb-3 " placeholder="Введите логин">
                <input type="password" name="password" class="form-control mb-3" placeholder="Введите пароль">

                <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s"
      data-wow-delay=".2s">
      <img src="img/banner/admin.png" alt="">
    </div>
  </div>
  






<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php require 'public/footer.php' ?>