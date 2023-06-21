<?php require 'public/header.php' ?>
<div class="slider_area" style="height: 350px; padding: 0 0 -10px 0">
  <div class="single_slider  d-flex align-items-center slider_bg_1" style="height: 350px; margin: 0 0 -10px 0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-6">
          <div class="slider_text">
            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Разработка сайтов</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
    <img src="img/banner/web_dew.jpg" alt="" width="550" height="350">
  </div>
</div>
<section class="container mt-5">

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4" style="color:#007bff; "> <strong>Направление веб разработки</strong></h1>
    <p class="lead">Здесь представлен виды сайтов которые мы готовы сделать для вас</p>
  </div>


  <div class="card-deck  text-center">
    <div class="card mb-4 shadow-sm border border-primary rounded-end">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><strong>Сайт-визитка</strong></h4> <br>
      </div>
      <div class="card-body">
        <img src="img/svg_icon/usl1.svg" alt="">
        <ul class="list-unstyled mt-1 mb-1">
          <li>Ваша визитка в интернете,
            цель которой рассказать о
            существовании Вашей
            компании</li>
          <br>
          <li style="border: 2px solid #ffd7e5"><i><b>15 000c</b> </i> </li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 shadow-sm border border-primary rounded-end">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><strong> Landing Page</strong></h4><br>
      </div>
      <div class="card-body">
        <img src="img/svg_icon/usl2.svg" alt="">
        <ul class="list-unstyled mt-1 mb-1 ">
          <li>Одностраничный
            продающий сайт, с
            формами заявок и
            обратного звонка</li>
          <br><br>
          <li style="border: 2px solid #ffd7e5"><i><b>15 000c</b> </i> </li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 shadow-sm border border-primary rounded-end">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <strong> Сайт-каталог</strong></h4><br>
      </div>
      <div class="card-body">
        <img src="img/svg_icon/usl3.svg" alt="">
        <ul class="list-unstyled mt-1 mb-1 ">
          <li>Идеальное решение, если
            необходимо показать
            клиентам всю Вашу
            продукцию</li>

          <li style="border: 2px solid #ffd7e5"><i><b>45 000c</b></i> </li>
        </ul>

      </div>
    </div>
    <div class="card mb-4 shadow-sm border border-primary rounded-end">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><strong> Корпоративный сайт</strong></h4>
      </div>
      <div class="card-body">
        <img src="img/svg_icon/usl4.svg" alt="">
        <ul class="list-unstyled mt-1 mb-1">
          <li>Сайт с подробной
            информацией о Вашей
            компании и системай управления</li>
          <br>

          <li style="border: 2px solid #ffd7e5"><i><b>60 000c</b> </i></li>
        </ul>

      </div>
    </div>
    <div class="card mb-4 shadow-sm border border-primary rounded-end">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><strong>Интернет магазин</strong></h4> <br>
      </div>
      <div class="card-body">
        <img src="img/svg_icon/usl4.svg" alt="">
        <ul class="list-unstyled mt-1 mb-1">
          <li>Сайт, Вашей личной
            торговой площадки</li>
          <br><br><br><br>
          <li style="border: 2px solid #ffd7e5"><i><b>50 000c</b> </i></li>
        </ul>

      </div>
    </div>
  </div>
</section>

<div class="container">

  <div class="pricing-header px-3 py-3  pb-md-4 mx-auto text-center">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
      Оставить заявку на сайт
    </button>
  </div>
</div>



<!-- Модальное окно -->
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
            <select size="1" name="categories" class="form-group">
              <option value="Сайт-визитка">Сайт-визитка</option>
              <option value="Landing Page">Landing Page</option>
              <option value="Сайт-каталог">Сайт-каталог</option>
              <option value="Корпоративный сайт">Корпоративный сайт</option>
              <option value="Интернет магазин">Интернет магазин</option>
              <option value="Другое">Другое</option>
            </select>
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