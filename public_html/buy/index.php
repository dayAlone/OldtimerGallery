<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Купить билет онлайн");
?>
  <div style="background-color: #4d64a6; background-image:url(/layout/images/bg-buy.jpg);background-size: cover;" class="page__block page__block--promo page__block--padding page__block--back">
    <h2 class="page__title">купить билет онлайн</h2>
    <div class="page__divider"></div>
    <div class="center xxl-margin-top xxl-padding-top">
      <div class="visible-xs">
        <h4>оплата банковской картой</h4><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=41001232198506&quickpay=small&any-card-payment-type=on&button-text=02&button-size=xl&button-color=white&targets=%D0%92%D1%85%D0%BE%D0%B4%D0%BD%D0%BE%D0%B9+%D0%B1%D0%B8%D0%BB%D0%B5%D1%82+%D0%BD%D0%B0+%D0%9E%D0%BB%D0%B4%D1%82%D0%B0%D0%B9%D0%BC%D0%B5%D1%80-%D0%93%D0%B0%D0%BB%D0%B5%D1%80%D0%B5%D1%8E%2C+%D0%A4%D0%B5%D1%81%D1%82%D0%B8%D0%B2%D0%B0%D0%BB%D1%8C+%D0%A1%D1%82%D0%B8%D0%BB%D1%8F+%D0%B8+%D0%A1%D0%BA%D0%BE%D1%80%D0%BE%D1%81&default-sum=500&fio=on&mail=on&successURL=" width="240" height="54"></iframe>
        <div class="xxl-margin-top xxl-padding-top">
          <h4>оплата яндекс.деньгами</h4><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=41001232198506&quickpay=small&yamoney-payment-type=on&button-text=02&button-size=xl&button-color=white&targets=%D0%92%D1%85%D0%BE%D0%B4%D0%BD%D0%BE%D0%B9+%D0%B1%D0%B8%D0%BB%D0%B5%D1%82+%D0%BD%D0%B0+%D0%9E%D0%BB%D0%B4%D1%82%D0%B0%D0%B9%D0%BC%D0%B5%D1%80-%D0%93%D0%B0%D0%BB%D0%B5%D1%80%D0%B5%D1%8E%2C+%D0%A4%D0%B5%D1%81%D1%82%D0%B8%D0%B2%D0%B0%D0%BB%D1%8C+%D0%A1%D1%82%D0%B8%D0%BB%D1%8F+%D0%B8+%D0%A1%D0%BA%D0%BE%D1%80%D0%BE%D1%81&default-sum=500&fio=on&mail=on&successURL=" width="240" height="54"></iframe>
        </div>
      </div>
      <div class="hidden-xs"><iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=41001232198506&quickpay=shop&payment-type-choice=on&writer=seller&targets=%D0%92%D1%85%D0%BE%D0%B4%D0%BD%D0%BE%D0%B9+%D0%B1%D0%B8%D0%BB%D0%B5%D1%82+%D0%BD%D0%B0+%D0%9E%D0%BB%D0%B4%D1%82%D0%B0%D0%B9%D0%BC%D0%B5%D1%80-%D0%93%D0%B0%D0%BB%D0%B5%D1%80%D0%B5%D1%8E%2C+%D0%A4%D0%B5%D1%81%D1%82%D0%B8%D0%B2%D0%B0%D0%BB%D1%8C+%D0%A1%D1%82%D0%B8%D0%BB%D1%8F+%D0%B8+%D0%A1%D0%BA%D0%BE%D1%80%D0%BE%D1%81&default-sum=500&button-text=02&mail=on&successURL=www.oldtimer.ru" width="450" height="211"></iframe></div>
      <div class="center xxl-margin-top xl-line-height">
        <p class="small dib">
          Для покупки нескольких билетов, исправьте сумму на любую, кратную 500 руб.<br>
          Электронные билеты рассылаются в автоматическом режиме в течение 15 минут после оплаты.<br>
          Если оплаченный билет не получен Вами в течение часа, напишите нам на
          <a href="mailto:gallery@oldtimer.ru"> gallery@oldtimer.ru</a>
          <?/*<br> Официальный билетный партнёр <a href="mailto:gallery@oldtimer.ru">RedKassa.ru</a>*/?>
        </p>
      </div>
    </div>
  </div>
</div>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
