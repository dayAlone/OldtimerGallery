<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Купить билет онлайн");
$srt = urlencode("Билет на Олдтаймер-Галерею, Фестиваль Стиля и Скорости");
?>  <div style="background-color: #4d64a6; background-image:url(/layout/images/bg-buy.jpg);background-size: cover;" class="page__block page__block--promo page__block--padding page__block--back">
    <h2 class="page__title">купить билет онлайн</h2>
    <div class="page__divider"></div>
    <div class="center xxl-margin-top xxl-padding-top">
      <div class="visible-xs">
        <h4>оплата банковской картой</h4><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=41001232198506&quickpay=small&any-card-payment-type=on&button-text=02&button-size=xl&button-color=white&targets=<?=$srt?>&default-sum=500&fio=on&mail=on&comment=on&hint=%D0%92%D0%B2%D0%B5%D0%B4%D0%B8%D1%82%D0%B5+%D0%BF%D1%80%D0%BE%D0%BC%D0%BE+%D0%BA%D0%BE%D0%B4&successURL=" width="195" height="54"></iframe>
        <div class="xxl-margin-top xxl-padding-top">
          <h4>оплата яндекс.деньгами</h4><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=41001232198506&quickpay=small&yamoney-payment-type=on&button-text=02&button-size=xl&button-color=white&targets=<?=$srt?>&default-sum=500&fio=on&mail=on&comment=on&hint=%D0%92%D0%B2%D0%B5%D0%B4%D0%B8%D1%82%D0%B5+%D0%BF%D1%80%D0%BE%D0%BC%D0%BE+%D0%BA%D0%BE%D0%B4&successURL=" width="195" height="54"></iframe>
        </div>
      </div>
      <div class="hidden-xs"><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=41001232198506&quickpay=shop&payment-type-choice=on&writer=seller&targets=<?=$srt?>&default-sum=500&button-text=02&mail=on&successURL=42.oldtimer.ru/buy/&comment=on&hint=%D0%92%D0%B2%D0%B5%D0%B4%D0%B8%D1%82%D0%B5+%D0%BF%D1%80%D0%BE%D0%BC%D0%BE+%D0%BA%D0%BE%D0%B4" width="450" height="280"></iframe></div>
      <div class="center xxl-margin-top ">
        <p class="small dib lh">
          On-line продажа билетов со скидкой прекращается 17 сентября в 10:00.<br>
          Для покупки нескольких билетов исправьте сумму на любую, кратную 500 руб.<br>
          Электронные билеты рассылаются в автоматическом режиме в течение 15 минут после оплаты.<br>
          Если оплаченный билет не получен Вами в течение часа, напишите нам на
          <a href="mailto:gallery@oldtimer.ru"> gallery@oldtimer.ru</a>
          <br><br>Официальный билетный партнёр <a href="http://www.redkassa.ru" target="_blank">RedKassa.ru</a>
        </p>
      </div>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
