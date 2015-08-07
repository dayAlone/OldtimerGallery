<? $this->setFrameMode(true);?>
<nav class="sidebar__nav nav">
    <div class="sidebar__divider no-margin-top"></div>
    <?foreach ($arResult as $key=>$item):?>
        <a href="<?=$item['LINK']?>" class="nav__item <?=($item['SELECTED']?'nav__item--active':'')?> <?=($item['PARAMS']['BIG']?'nav__item--big':'')?>"><?=$item['TEXT']?></a><br>
        <?if($item['PARAMS']['BIG'] && !$arResult[$key+1]['PARAMS']['BIG']):?>
        <div class="nav__divider"></div>
        <?endif;?>
    <?endforeach;?>
    <div class="sidebar__divider no-margin-bottom"></div>
</nav>
