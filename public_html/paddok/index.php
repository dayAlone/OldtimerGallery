<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Паддок");
    $APPLICATION->IncludeComponent("bitrix:news.detail", "main", Array(
      "IBLOCK_ID"     => 42,
      "ELEMENT_CODE"  => 'paddok',
      "CHECK_DATES"   => "N",
      "IBLOCK_TYPE"   => "gallery2015",
      "SET_TITLE"     => "Y",
      "CACHE_TYPE"    => "A",
      "FIELD_CODE"    => array('PREVIEW_PICTURE'),
      "PROPERTY_CODE" => array("CLASS", 'BG', 'BUTTONS', 'WHERE')

    ));
?>
  <div id="articles" class="page__block page__block--blue">
    <div class="center md-left">
      <h2 class="page__title">ПРЕМЬЕРЫ
        <nobr>И СЕНСАЦИИ</nobr>
      </h2>
      <div class="page__divider"></div>
    </div>
    <div class="articles">
      <div class="row">
        <div class="col-lg-3 col-sm-4">
          <div class="article article--first">
            <div class="row">
              <div class="col-xs-5 col-sm-12"><a href="#Modal" data-toggle="modal" style="background-image:url(/layout/images/gallery-img-1.jpg)" class="article__image"></a></div>
              <div class="col-xs-7 col-sm-12"><a href="#Modal" data-toggle="modal" class="article__title">Название экспоната в две строки</a>
                <div class="page__divider"></div>
                <p class="article__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="article">
            <div class="row">
              <div class="col-xs-5 col-sm-12"><a href="#Modal" data-toggle="modal" style="background-image:url(/layout/images/gallery-img-2.jpg)" class="article__image"></a></div>
              <div class="col-xs-7 col-sm-12"><a href="#Modal" data-toggle="modal" class="article__title">Другое название экспоната</a>
                <div class="page__divider"></div>
                <p class="article__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время.  </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="article">
            <div class="row">
              <div class="col-xs-5 col-sm-12"><a href="#Modal" data-toggle="modal" style="background-image:url(/layout/images/gallery-img-3.jpg)" class="article__image"></a></div>
              <div class="col-xs-7 col-sm-12"><a href="#Modal" data-toggle="modal" class="article__title">Или что-то еще тут может быть</a>
                <div class="page__divider"></div>
                <p class="article__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 visible-sm visible-md"></div>
        <div class="col-lg-3 col-sm-4">
          <div class="article">
            <div class="row">
              <div class="col-xs-5 col-sm-12"><a href="#Modal" data-toggle="modal" style="background-image:url(/layout/images/gallery-img-4.jpg)" class="article__image"></a></div>
              <div class="col-xs-7 col-sm-12"><a href="#Modal" data-toggle="modal" class="article__title">В общем, вариантов много</a>
                <div class="page__divider"></div>
                <p class="article__text">«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="center xxl-margin-top xxl-padding-top"><a href="/buy.html" class="button">ЗАЙТИ В ПАДДОК</a></div>
  </div>
</div>
<div id="Map" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center no-margin-bottom">Зона проведения</h3>
      <div class="center"><img src="/layout/images/scheme-paddok.jpg"></div>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
