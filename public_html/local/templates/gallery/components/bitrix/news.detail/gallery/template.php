<?$item = $arResult;?>

<div class="gallery">
    <? foreach($item['PROPERTIES']['IMAGES']['VALUE'] as $image):?>
    <div class="gallery__item" style="background: url(<?=CFile::GetPath($image)?>)"></div>
    <?endforeach;?>
</div>
