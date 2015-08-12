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
                'PARENT_SECTION_CODE'  => 'gallery',
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
      <h2 class="page__title">Звёзды говорят</h2>
      <div class="page__divider"></div>
    </div>
    <?
		$APPLICATION->IncludeComponent("bitrix:news.list", "quotes",
			array(
				"IBLOCK_ID"            => 41,
				"NEWS_COUNT"           => "1000",
				"SORT_BY1"             => "SORT",
				"SORT_ORDER1"          => "ASC",
				"CACHE_TYPE"           => "A",
				'PROPERTY_CODE'        => array('ABOUT', 'BORDER', 'BG'),
				"SET_TITLE"            => "N"
			),
			false
		);
	?>

    <div class="center xxl-margin-top xxl-padding-top"><a href="/buy.html" class="button">увидеть своими глазами</a></div>
  </div>
  <div id="years" class="page__block page__block--brown">
    <div class="center md-left">
      <h2 class="page__title">14 лет успеха</h2>
      <div class="page__divider"></div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p>
                Олдтаймер-Галерея – единственная в России и крупнейшая в Восточной Европе выставка старинных автомобилей и технического антиквариата.
            </p>
        </div>
        <div class="col-md-4">
            <p>
                Олдтаймер-Галерея проводится с 2002 года дважды в году – весной и осенью – в крупнейших выставочных центрах Москвы: Сокольниках, Экспоцентре и Крокус-Экспо.
            </p>
        </div>
        <div class="col-md-4">
            <p>
                Олдтаймер-Галерея – место, где можно приятно и полезно провести семейные выходные. Посетителей любого возраста здесь ждёт много интересного.
            </p>
        </div>
    </div>
    <div class="center xxl-margin-top xxl-padding-top"><a href="/buy/" class="button">посетить выставку</a></div>
  </div>
</div>
<div id="Map" tabindex="-1" role="dialog" aria-hidden="true" data-parsley-validate class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content"><a data-dismiss="modal" href="#" class="close"></a>
      <h3 class="center no-margin-bottom">Территория фестиваля</h3>
      <div class="center"><img src="/layout/images/scheme-exhibition.jpg"></div>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
