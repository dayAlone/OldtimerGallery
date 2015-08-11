<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Заезды");
    $APPLICATION->IncludeComponent("bitrix:news.detail", "main", Array(
      "IBLOCK_ID"     => 42,
      "ELEMENT_CODE"  => 'rally',
      "CHECK_DATES"   => "N",
      "IBLOCK_TYPE"   => "gallery2015",
      "SET_TITLE"     => "Y",
      "CACHE_TYPE"    => "A",
      "FIELD_CODE"    => array('PREVIEW_PICTURE'),
      "PROPERTY_CODE" => array("CLASS", 'BG', 'BUTTONS', 'WHERE')

    ));
?>
    <div id="articles" class="page__block page__block--red2">
      <div class="center md-left">
        <h2 class="page__title">расписание зaeздов</h2>
        <div class="page__divider"></div>
      </div>
      <div class="shedule row">
        <div class="col-md-6">
          <div class="shedule__day">
            <div class="shedule__date">17 сентября, четверг</div>
            <div class="shedule__event">
              <div class="shedule__time">14:30</div>
              <div class="shedule__name">демонстрация фрагментов фильма "Погоня за скоростью"</div>
            </div>
            <div class="shedule__event">
              <div class="shedule__time">15:00</div>
              <div class="shedule__name">черлидинг-шоу</div>
            </div>
            <div class="shedule__event">
              <div class="shedule__time">15:15 </div>
              <div class="shedule__name">показательные заезды по окончании - представление пилотов, автограф-сессия (ведущий - Марк Подольский)</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="shedule__day">
            <div class="shedule__date">18 сентября, четверг</div>
            <div class="shedule__event">
              <div class="shedule__time">14:30</div>
              <div class="shedule__name">демонстрация фрагментов фильма "Погоня за скоростью"</div>
            </div>
            <div class="shedule__event">
              <div class="shedule__time">15:00</div>
              <div class="shedule__name">черлидинг-шоу</div>
            </div>
            <div class="shedule__event">
              <div class="shedule__time">15:15 </div>
              <div class="shedule__name">показательные заезды по окончании - представление пилотов, автограф-сессия (ведущий - Марк Подольский)</div>
            </div>
          </div>
        </div>
        <div class="col-md-12 visible-md visible-lg"></div>
        <div class="col-md-6">
          <div class="shedule__day">
            <div class="shedule__date">19 сентября, четверг</div>
            <div class="shedule__event">
              <div class="shedule__time">14:30</div>
              <div class="shedule__name">демонстрация фрагментов фильма "Погоня за скоростью"</div>
            </div>
            <div class="shedule__event">
              <div class="shedule__time">15:00</div>
              <div class="shedule__name">черлидинг-шоу</div>
            </div>
            <div class="shedule__event">
              <div class="shedule__time">15:15 </div>
              <div class="shedule__name">показательные заезды по окончании - представление пилотов, автограф-сессия (ведущий - Андрей Леонтьев)</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="shedule__day">
            <div class="shedule__date">20 сентября, четверг</div>
            <div class="shedule__event">
              <div class="shedule__time">12:30</div>
              <div class="shedule__name">демонстрация фрагментов фильма "Погоня за скоростью"</div>
            </div>
            <div class="shedule__event">
              <div class="shedule__time">13:00</div>
              <div class="shedule__name">черлидинг-шоу</div>
            </div>
            <div class="shedule__event">
              <div class="shedule__time">13:15 </div>
              <div class="shedule__name">показательные заезды по окончании - представление пилотов, автограф-сессия (ведущий - Андрей Леонтьев)</div>
            </div>
          </div>
        </div>
      </div>
      <div class="center xxl-margin-top xxl-padding-top"><a href="/buy.html" class="button">насладиться зрелищем</a></div>
    </div>
    <div id="video" style="background-image:url(/layout/images/bg-rally.jpg)" class="page__block page__block--black">
      <video autoplay="autoplay" loop="" class="video">
        <source src="/layout/video/oldtimer2015.mp4" type="video/mp4">
        <source src="/layout/video/oldtimer2015.ogv" type="video/ogg">
        <source src="/layout/video/oldtimer2015.webm" type="video/webm">
      </video>
      <div class="center md-left">
        <h2 class="page__title">атмосфера</h2>
        <div class="page__divider"></div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p class="big">Юбилеям советского автомобильного спорта посвящается…</p>
          <p class="big"> <strong> <span class="red">75 лет </span>– Всесоюзным рекордам скорости,</strong>поставленным на рекордно-гоночных автомобилях ГЛ-1 и ЗИС-101 "Спорт".</p>
          <p class="big"> <strong> <span class="red">65 лет </span>– первым Всесоюзным соревнованиям по автомобильному спорту,</strong>создание спортивных версий автомобилей "Победа" и "Москвич", постройка рекордного болида "Звезда-3М".</p>
          <p class="big"> <strong> <span class="red">60 лет </span>– первым кольцевым гонкам в СССР и первому ралли в СССР,</strong>тогда же, в 1955 году, был построен самый результативный советский болид "Харьков-Л2" и гоночный "Москвич-Г1".</p>
        </div>
        <div class="col-md-6">
          <p>Когда-то они были триумфаторами ралли и марафонов, победителями гонок и рекордных заездов, гордостью отечественного спорта. Созданные талантливыми конструкторами и построенные коллективами энтузиастов, советские спорткары зачастую ничем не уступали своим зарубежным аналогам.</p>
          <p>Сейчас их имена известны лишь поисковикам и реставраторам: «Харьков», «Лорент», «Звезда», «Киев-Спорт», «Астрада», «Эстония», «Тарту»… Многие считались навсегда утраченными и увидеть их можно было только на фотографиях. Благодаря стараниям энтузиастов-реставраторов стальные герои прошлого возвращаются из небытия – это несколько десятков гоночных, раллийных и кроссовых автомобилей.</p>
          <p>Появление некоторых из них в паддоке будет неожиданностью даже для специалистов, а участие в показательных заездах станет сенсацией. Многими автомобилями-ветеранами будут управлять пилоты-ветераны – живые легенды советского спорта. И это историческое событие вы сможете увидеть собственными глазами!</p>
        </div>
      </div>
    </div>

</div>
<div id="Map" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center no-margin-bottom">Территория фестиваля</h3>
      <div class="center"><img src="/layout/images/scheme-drive.jpg"></div>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
