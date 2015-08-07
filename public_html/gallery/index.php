<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Выставка");
    $APPLICATION->IncludeComponent("bitrix:news.detail", "main", Array(
      "IBLOCK_ID"     => 42,
      "ELEMENT_CODE"  => 'gallery',
      "CHECK_DATES"   => "N",
      "IBLOCK_TYPE"   => "gallery2015",
      "SET_TITLE"     => "Y",
      "CACHE_TYPE"    => "A",
      "FIELD_CODE"    => array('PREVIEW_PICTURE'),
      "PROPERTY_CODE" => array("CLASS", 'BG', 'BUTTONS', 'WHERE')

    ));
?>

  <div id="articles" class="page__block page__block--brown">
    <div class="center md-left">
      <h2 class="page__title">лучшие экспонаты</h2>
      <div class="page__divider"></div>
    </div>
    <?
		$APPLICATION->IncludeComponent("bitrix:news.list", "articles",
			array(
				"IBLOCK_ID"            => 40,
				"NEWS_COUNT"           => "1000",
				"SORT_BY1"             => "SORT",
				"SORT_ORDER1"          => "ASC",
				"CACHE_TYPE"           => "A",
                'SECTION_CODE'         => 'gallery',
				'PROPERTY_CODE'        => array('LINK'),
				"SET_TITLE"            => "N"
			),
			false
		);
	?>
    <div class="center xxl-margin-top xxl-padding-top"><a href="/buy/" class="button">посетить выставку</a></div>
  </div>
  <div id="reviews" class="page__block page__block--orange">
    <div class="center md-left">
      <h2 class="page__title">отзывы</h2>
      <div class="page__divider"></div>
    </div>
    <div class="quotes">
      <div data-bg="#d27700" data-border="#ffc000" class="quote">
        <div class="quote__frame">
          <div class="quote__arrow"><svg width="55" height="42" viewBox="0 0 55 42" xmlns="http://www.w3.org/2000/svg"><g id="Page-1" fill="none" fill-rule="evenodd"><g id="corner"><path d="M5.5 42c0-1.11 1.054-3.252 2.188-4.124L48.524 6.484l5.83-4.482H7.002C6.172 2.002 5.5 1.332 5.5 0H0v42h5.5z" id="bg"/><path d="M5.5 42c0-1.11 1.054-3.252 2.188-4.124L48.524 6.484l5.83-4.482H7.002C6.172 2.002 5.5 1.332 5.5 0h-5c0 4.093 2.91 7.002 6.502 7.002H39.5L4.64 33.912C2.275 35.732.5 39.337.5 42h5z" id="arrow"/></g></g></svg>
          </div>
          <p>«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</p>
        </div>
        <div class="quote__author">
          <div style="background-url(/layout/images/pic.jpg)" class="quote__image"></div>
          <div class="quote__name">Леонид Ярмольник</div>
          <div class="quote__info">актер</div>
        </div>
      </div>
      <div data-bg="#d9916b" data-border="#a6001a" class="quote">
        <div class="quote__frame">
          <div class="quote__arrow"><svg width="55" height="42" viewBox="0 0 55 42" xmlns="http://www.w3.org/2000/svg"><g id="Page-1" fill="none" fill-rule="evenodd"><g id="corner"><path d="M5.5 42c0-1.11 1.054-3.252 2.188-4.124L48.524 6.484l5.83-4.482H7.002C6.172 2.002 5.5 1.332 5.5 0H0v42h5.5z" id="bg"/><path d="M5.5 42c0-1.11 1.054-3.252 2.188-4.124L48.524 6.484l5.83-4.482H7.002C6.172 2.002 5.5 1.332 5.5 0h-5c0 4.093 2.91 7.002 6.502 7.002H39.5L4.64 33.912C2.275 35.732.5 39.337.5 42h5z" id="arrow"/></g></g></svg>
          </div>
          <p>«Посетив Олдтаймер-Галерею, я понял, что автомобили середины двадцатого века — самые любопытные с точки зрения человеческого таланта изобретать, совершенствовать и удивлять. Есть такие образцы, в которых остановилось и отразилось время, как свидетельство человеческого гения и вкуса. Это как старинное вино — надо его уметь отличать, чувствовать и наслаждаться»</p>
        </div>
        <div class="quote__author">
          <div style="background-url(/layout/images/pic.jpg)" class="quote__image"></div>
          <div class="quote__name">Леонид Ярмольник</div>
          <div class="quote__info">актер</div>
        </div>
      </div>
    </div>
    <div class="center xxl-margin-top xxl-padding-top"><a href="/buy.html" class="button">увидеть своими глазами</a></div>
  </div>
</div>
<div id="Map" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center no-margin-bottom">Зона проведения</h3>
      <div class="center"><img src="/layout/images/scheme-gallery.jpg"></div>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
