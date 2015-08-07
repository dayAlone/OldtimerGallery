<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("12 причин посетить");
?>
  <div id="articles" class="page__block page__block--violet">
    <div class="xs-center md-left">
      <h2 class="page__title">12 причин посетить</h2>
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
                'SECTION_CODE'         => 'reasons',
				'PROPERTY_CODE'        => array('LINK'),
				"SET_TITLE"            => "N"
			),
			false
		);
	?>
    <div class="center xxl-margin-top xxl-padding-top"><a href="/buy/" class="button">купить билет онлайн</a></div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
