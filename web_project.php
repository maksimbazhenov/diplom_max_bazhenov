<?php require 'public/header.php' ?>
<div class="slider_area" style="height: 350px; padding: 0 0 -10px 0">
  <div class="single_slider  d-flex align-items-center slider_bg_1" style="height: 350px; margin: 0 0 -10px 0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-6">
          <div class="slider_text">
            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Наши проеты</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
    <img src="img/banner/web_project.jpg" alt="">
  </div>
</div>

<div class="container mt-5">

    <div class="row">
      
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <h3 class="m-3">Профессиональный лицей №14</h3>
          <img src="img/project/PL14.jpg" alt="">

          <div class="card-body">
            <p class="card-text ">Много страничный сайт с хоро промисаной семантикой и чётко составленной структурой. На данный момент является действуюшим.
              И уже не раз был признан актуальным членами не завасимой Акредитации
            </p>
            <div class="d-flex justify-content-between align-items-center">
              <a href="https://karakolpl14.kg/"> <button class="btn btn-success">Посетить</button> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <h3 class="m-3">Туристическая фима "Neofit"</h3>
          <img src="img/project/Neofit.jpg" alt="">

          <div class="card-body">
            <p class="card-text ">Отличный турестический сайт для ознакомления с основными направлениями данной туристической фирмы.
              Имеет мобильную версию и 2 языка для представителей из за рубежа
            <div class="d-flex justify-content-between align-items-center">
              <a href="https://neofit.kg/"> <button class="btn btn-success">Посетить</button> </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

 



<!-- Модальное окно -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" id="myModalLabel">Оставить заявку</h4>
      </div>
      <div class="modal-body">
        <form method="post" action='admin/application/aplocation_new.php'>
          <div class="form-group">
          <div class="form-group">
            <label for="exampleInputName">Имя</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Имя">
          </div>
          <div class="form-group">
            <label for="exampleInputSite">Ссылка на ваш сайт</label>
            <input type="site" name="site" class="form-control" id="exampleInputSite" placeholder="Ссылка на сайт">
          </div>
            <label for="exampleInputEmail1">Emall адрес</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Emall адрес">
            <small id="emailHelp" class="form-text text-muted">Мы никогда не будем делиться вашей электронной почтой с кем-либо еще..</small>
          </div>
          <div class="form-group">
            <label for="exampleInputTell">Телефон</label>
            <input type="tell" name="tell" class="form-control" id="exampleInputTell" placeholder="Телфон">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Опишите ваше желание</label>
            <input type="text" name="comment" class="form-control" id="exampleInputComment" placeholder="Ваше желание">
          </div>
          
          <button type="submit" class="btn btn-primary">Отправить</button>
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