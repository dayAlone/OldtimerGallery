<div class="articles">
  <div class="row">
    <?foreach ($arResult['ITEMS'] as $key=>$item):?>
        <div class="col-lg-3 col-sm-4">
          <div class="article article--first">
            <div class="row">
              <div class="col-xs-5 col-sm-12"><a data-url="<?=$item['PROPERTIES']['LINK']['VALUE']?>" href="#Modal" data-toggle="modal" style="background-image:url(<?=$item['PREVIEW_PICTURE']['SRC']?>);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$item['PREVIEW_PICTURE']['SRC']?>', sizingMethod='scale');-ms-filter: &quot;progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?=$item['PREVIEW_PICTURE']['SRC']?>', sizingMethod='scale')&quot;;" class="article__image"></a></div>
              <div class="col-xs-7 col-sm-12"><a data-url="<?=$item['PROPERTIES']['LINK']['VALUE']?>" href="#Modal" data-toggle="modal" class="article__title"><?=$item['NAME']?></a>
                <div class="page__divider"></div>
                <p class="article__text"><?=$item['PREVIEW_TEXT']?></p>
              </div>
            </div>
          </div>
        </div>
        <? if($key%3==0 && $key!=0):?>
        <div class="col-sm-12 visible-md visible-sm"></div>
        <?endif;?>
    <?endforeach?>
    </div>
</div>
