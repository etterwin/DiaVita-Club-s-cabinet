$('article.item-in-stock span.item-status').addClass('status-in-stock');
$('article.item-en-route span.item-status').addClass('status-en-route');
$('article.item-ended span.item-status').addClass('status-ended');

$(document).ready(function() {

        let country = navigator.language||navigator.browserLanguage;

        if (country === 'th') {

            $('h2.overlay-caption').text('กำลังโหลด, โปรด, รอ');

            $('span.status-in-stock').text('มีสินค้า');
            $('span.status-en-route').text('ที่คาดหวัง');
            $('span.status-ended').text('สุด');

            $('article.item-in-stock div.item__checkout').append('<a href="#" class="item-btn-link"><span class="item-btn">เช็คเอาท์</span></a>');
            $('article.item-en-route div.item__checkout').append('<p class="item-btn-link--none"><span class="item-btn--none">เช็คเอาท์</span></p>');
            $('article.item-ended div.item__checkout').append('<p class="item-btn-link--none"><span class="item-btn--none">เช็คเอาท์</span></p>');

        } else {

            $('h2.overlay-caption').text('Loading, please, wait');

            $('span.status-in-stock').text('In stock');
            $('span.status-en-route').text('En route');
            $('span.status-ended').text('Ended');

            $('article.item-in-stock div.item__checkout').append('<a href="#" class="item-btn-link"><span class="item-btn">Checkout</span></a>');
            $('article.item-en-route div.item__checkout').append('<p class="item-btn-link--none"><span class="item-btn--none">Checkout</span></p>');
            $('article.item-ended div.item__checkout').append('<p class="item-btn-link--none"><span class="item-btn--none">Checkout</span></p>');

        }
});





