<?$item = $arResult;?>

<div class="gallery">
    <? foreach($item['PROPERTIES']['BUTTONS']['VALUE'] as $image):?>
    <div class="gallery__item" style="background: url(<?=CFile::GetPath($image)?>)"></div>
    <?endforeach;?>
</div>
