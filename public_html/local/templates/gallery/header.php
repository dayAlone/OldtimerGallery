<!DOCTYPE html><html lang='ru'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <?
  $APPLICATION->SetAdditionalCSS("/layout/css/frontend.css", true);
  $APPLICATION->AddHeadScript('/layout/js/frontend.js');
  global $CITY;
  ?>
  <title><?php
    $rsSites = CSite::GetByID(SITE_ID);
    $arSite  = $rsSites->Fetch();
    if($APPLICATION->GetCurDir() != '/' && $APPLICATION->GetCurDir() != "/eng/") {
      $APPLICATION->ShowTitle();

      echo ' | ' . $arSite['NAME'];
    }
    else echo $arSite['NAME'];
    ?></title>
  <?
    $APPLICATION->ShowHead();
  ?>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <script src="./layout/js/background_size_emu.js"></script>
  <![endif]-->
</head><body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="toolbar">
  <div class="row">
    <div class="col-xs-3"><a href="#" class="nav-trigger"></a></div>
    <div class="col-xs-6 center">
      <div class="logo"><a href="/" class="logo__image"></a></div>
    </div>
    <div class="col-xs-3 right">
      <div class="logo">
        <div class="logo__text"></div>
      </div>
    </div>
  </div>
</div>
<div class="sidebar">
  <div class="sidebar__content"><a href="/" class="back">На главную</a><a href="#" class="close"></a>
    <div class="logo"><a href="/" class="logo__image"></a>
      <div class="logo__text"></div>
    </div>
    <?php
          $APPLICATION->IncludeComponent("bitrix:menu", "sidebar",
          array(
              "ALLOW_MULTI_SELECT" => "Y",
              "MENU_CACHE_TYPE"    => "A",
              "ROOT_MENU_TYPE"     => "left",
              "MAX_LEVEL"          => "1",
              ),
          false);
      ?>
    <footer class="sidebar__footer"><a href="/buy/" class="buy">купить билет</a>
      <div class="sidebar__social">
          <a href="http://oldtimer-ru.livejournal.com" target="_blank" class="social social--lj"></a>
          <a href="https://www.facebook.com/oldtimer.ru" target="_blank" class="social social--fb"></a>
          <a href="https://twitter.com/ru_oldtimer" target="_blank" class="social social--tw"></a>
          <a href="https://vk.com/club50218982" target="_blank" class="social social--vk"></a>
          <a href="http://ok.ru/group52509993730118" target="_blank" class="social social--ok"></a>
          <a href="https://www.youtube.com/channel/UCnzr5MbXxV9zrt7_lZJaeMg" target="_blank" class="social social--yt"></a>
      </div>
      <a href="http://radia.ru" target="_blank" class="copyright">Сделано в RADIA Interactive</a>
    </footer>
  </div>
</div>
<div class="page">
