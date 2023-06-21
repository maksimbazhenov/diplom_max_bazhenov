<?php require 'public/header.php' ?>
<div class="slider_area" style="height: 350px; padding: 0 0 -10px 0">
  <div class="single_slider  d-flex align-items-center slider_bg_1" style="height: 350px; margin: 0 0 -10px 0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-6">
          <div class="slider_text">
            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Консультация</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
    <img src="img/banner/const.jpg" alt="" width="550" height="350">
  </div>
</div>
<section class="container mt-5">

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4" style="color:#007bff; "> <strong>Комплексная</strong> консультация</h1>
    <p class="lead">
      Наша компания предлагает комплексную консультацию по веб-разработке, SMM (социальные медиа-маркетинг) и SEO
      (оптимизация для поисковых систем), чтобы помочь вашему бизнесу процветать в онлайн-мире. Мы предоставляем
      экспертные знания и практические рекомендации, чтобы вы могли создать эффективный веб-сайт, привлечь больше
      посетителей через социальные сети и повысить видимость вашего бренда в поисковых системах.</P>
    <p>
      Наша команда опытных специалистов будет работать с вами, чтобы понять ваши цели и потребности, разработать
      стратегию и предложить наилучшие решения для вашего бизнеса. Мы поможем оптимизировать ваш веб-сайт, улучшить его
      пользовательский опыт, создать привлекательный контент и провести необходимые маркетинговые кампании в социальных
      сетях.</p>
    <p>
      Комплексная консультация по веб-разработке, SMM и SEO поможет вам улучшить вашу онлайн-присутствие, привлечь
      больше потенциальных клиентов и увеличить конверсию. Мы готовы поделиться нашими знаниями и опытом, чтобы помочь
      вам достичь бизнес-успеха в онлайн-мире.</p>
    <div class="container">

      <div class="pricing-header px-3 py-3  pb-md-4 mx-auto text-center">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Оставить заявку на сайт
        </button>
      </div>
    </div>
  </div>


</section>

<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
  data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Заявка на создание сайта</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        </button>
      </div>
      <div class="modal-body">
        <!-- Содержимое модального окна -->
        <form action="/admin/application/aplocation_new.php" method="POST" enctype="multipart/form-data" class="">

          <div class="form-group">
            <div class="form-group">
              <label for="exampleInputName">Имя</label>
              <input type="name" name="name" class="form-control" id="exampleInputName" placeholder="Имя">
            </div>
            <div class="form-group">
              <label for="exampleInputTel">Номер телефона</label>
              <input type="tell" name="tell" class="form-control" id="exampleInputTel" placeholder="Номер телевона">
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Emall адрес</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Emall адрес">
            <small id="emailHelp" class="form-text text-muted">Мы никогда не будем делиться вашей электронной почтой с
              кем-либо еще..</small>
          </div>
         
          <div class="form-group">
            <button type="submit" class="btn btn-primary form-control">Отправить</button>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<style>
  .modal {
    z-index: 311212000;
    /* Или другое значение, если необходимо */
  }
</style>


<?php require 'public/footer.php' ?>