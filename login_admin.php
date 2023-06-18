<?php require 'public/header.php' ?>

<body>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-471ETHFK21"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-471ETHFK21');
  </script>

  <!-- Yandex.Metrika counter -->
  <script
    type="text/javascript"> (function (m, e, t, r, i, k, a) { m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) }; m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a) })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(39705265, "init", { clickmap: true, trackLinks: true, accurateTrackBounce: true }); </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript> <!-- /Yandex.Metrika counter -->
  <!-- Yandex.RTB -->
  <script>window.yaContextCb = window.yaContextCb || []</script>
  <script src="https://yandex.ru/ads/system/context.js" async></script>

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8588635311388465"
    crossorigin="anonymous"></script>


  <div class="container mt-4">

    <div class="slider_area" style="height: 350px; padding: 50px 0 -10px 0">
      <div class="single_slider  d-flex align-items-center slider_bg_1" style="height: 350px; margin: 0 0 -10px 0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5 col-md-23">
              <div class="slider_text  ">
                <form action="admin/admin_open.php" method="post" class=" form-signin mt-3" role="form">
        <h1 class=" form-signin-heading mt-3">Войти в админу</h1>
                  <input type="text" name="login" class="form-control mb-3 " placeholder="Введите логин" >
                  <input type="password" name="password" class="form-control mb-3" placeholder="Введите пароль" >

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


   

  </div> <!-- /container -->


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <?php require 'public/footer.php' ?>