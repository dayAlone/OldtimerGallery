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
  <div id="articles" class="page__block page__block--red">
    <div class="center md-left">
      <h2 class="page__title">расписание зaeздов</h2>
      <div class="page__divider"></div>
    </div>
    <div class="center xxl-margin-top xxl-padding-top"><a href="/buy/" class="button">насладиться зрелищем</a></div>
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
