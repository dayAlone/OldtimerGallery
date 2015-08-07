<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Заезды");
?>
  <div style="background-image:url(/layout/images/zaezd-bg-inside.jpg)" class="page__block page__block--promo page__block--black"><img src="/layout/images/person-zaezd.png" class="page__image">
    <div class="page__content">
      <h1 class="page__title">Заезды</h1>
      <div class="page__divider"></div>
      <p>Эпоха, когда пространство и время покорялись людской воле! Эпоха скорости! Эпоха рекордов! Гоночные суперкары тех великих лет считались утраченными навсегда. Энтузиасты отыскали их, восстановили специально к Фестивалю, доставили в Москву из других городов и стран для участия в уникальных звёздных заездах. Они - стиль и сталь легендарной эпохи. Рёв их прямоточных выхлопов заставит сердца учащённо забиться. Это будет незабываемое зрелище - чёрно-белая кинохроника оживёт на Ваших глазах.</p><a href="#articles" class="button">программа</a>
    </div><a href="#Map" data-toggle="modal" class="map map--rally">
      <div class="map__text"><span>где увидеть:<br></span>КВЦ Сокольники<br>павильон 2</div>
      <div class="map__frame">
        <div href="#Map" data-toggle="modal" class="map__zoom"></div>
      </div></a>
  </div>
  <div id="articles" class="page__block page__block--red">
    <div class="center md-left">
      <h2 class="page__title">расписание зaeздов</h2>
      <div class="page__divider"></div>
    </div>
    <div class="center xxl-margin-top xxl-padding-top"><a href="/buy.html" class="button">насладиться зрелищем</a></div>
  </div>
</div>
<div id="Map" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center no-margin-bottom">Зона проведения</h3>
      <div class="center"><img src="/layout/images/scheme-rally.jpg"></div>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
