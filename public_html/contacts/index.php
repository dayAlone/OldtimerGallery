<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Будем рады вас видеть!");
?>  <div style="background-image:url(/layout/images/tickets-bg-new.jpg);background-size: cover;" class="page__block page__block--promo">
    <h2 class="page__title">БУДЕМ РАДЫ ВАС ВИДЕТЬ!</h2>
    <div class="page__divider"></div>
    <div class="row text">
      <div class="col-lg-4 col-sm-5 col-md-4">
        <h4>Билеты</h4>
        <p>
            <?if(strtotime('17.09.2015 10:00') > time()):?>
            В кассах во время выставки – 700 рублей<br>
            Предварительная <a href="/buy/">on-line</a> продажа – 500 рублей<br>
            <a data-toggle="modal" data-target="#Price" href="#Price">Скидки и льготы</a>
            <?else:?>
            Полный – 700 руб<br>
            <a data-toggle="modal" data-target="#Price" href="#Price">Льготный</a> – 500 руб<br>
            <a data-toggle="modal" data-target="#Price" href="#Price">Семейный</a> – 2000 руб<br>
            Дошкольники – бесплатно
            <?endif;?>
        </p>
      </div>
      <div class="col-lg-4 col-sm-6">
        <h4>Время работы</h4>
        <p>17 сентября с 10:00 до 19:00<br>18 сентября с 10:00 до 19:00<br>19 сентября с 10:00 до 19:00<br>20 сентября с 10:00 до 17:00</p>
      </div>
      <div class="col-sm-12 visible-sm visible-md"></div>
      <div class="col-lg-4 col-sm-6">
        <h4 class="place">Место проведения</h4>
        <p>КВЦ «Сокольники», пав.2
          <nobr>и Фестивальная площадь</nobr><br><a data-toggle="modal" data-target="#Scheme" href="#Scheme">Схема выставочного центра с парковками </a><br>Сокольники находятся недалеко от центра города – до выставки легко добраться и на <a data-toggle="modal" data-target="#Metro" href="#Metro">метро</a>, и на <a data-toggle="modal" data-target="#Car" href="#Car">автомобиле</a>
        </p>
      </div>
      <div class="left xxl-margin-top col-xs-12 col-lg-offset-4"><a href="/buy/" class="button">купить билет онлайн</a></div>
    </div>
  </div>
</div>
<div id="Scheme" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center">СХЕМА ВЫСТАВОЧНОГО ЦЕНТРА С ПАРКОВКАМИ</h3>
      <div class="center">
        <p>Выставочный центр предоставляет посетителям около 2000 паковочных машиномест. <br>Стоимость въезда на территорию КВЦ "Сокольники" и парковки – 250 руб.</p><img src="/layout/images/auto.jpg">
      </div>
    </div>
  </div>
</div>
<div id="Metro" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center">КАК ДОБРАТЬСЯ НА МЕТРО</h3>
      <div class="center">
        <p>Выставочный центр располагается на территории парка «Сокольники», <br>в 10 минутах ходьбы от станции метро «Сокольники».</p><img src="/layout/images/metro.jpg">
      </div>
    </div>
  </div>
</div>
<div id="Car" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center">СХЕМА ВЫСТАВОЧНОГО ЦЕНТРА С ПАРКОВКАМИ</h3>
      <div class="center">
        <p>Выставочный центр предоставляет посетителям около 2000 паковочных машиномест.<br>Стоимость въезда на территорию КВЦ "Сокольники" и парковки – 250 руб.</p><img src="/layout/images/auto.jpg">
      </div>
    </div>
  </div>
</div>
<div id="Price" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center">СТОИМОСТЬ БИЛЕТОВ</h3>
      <p><b>В кассах в дни работы выставки:</b></p>
      <p><b>700 руб </b>	ПОЛНЫЙ БИЛЕТ</p>
      <p><b>500 руб </b>	ЛЬГОТНЫЙ БИЛЕТ<br>(с подтверждающим документом) <br>школьники, студенты, инвалиды, пенсионеры, члены многодетных семей</p>
      <p><b>2000 руб </b>	СЕМЕЙНЫЙ БИЛЕТ<br>(2 взрослых + 3 детей)</p>
      <p><b>БЕСПЛАТНО </b>- дошкольники</p>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
