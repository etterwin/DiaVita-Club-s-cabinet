<?
use yii\web\View;

$this->registerJsFile('/modules/admin/cabinet_assets/js/appendItemShop.js', ['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/overlay.js', ['position' => View::POS_END]);
?>
<!-- overlay -->
<div id="overlay" class="shop-overlay">

    <div class="overlay-wrapper">

        <h2 class="overlay-caption"></h2>

        <div class="progress-container" data-value="100">

            <svg class="progress-bar" id="svg" width="120" height="120" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">

                <linearGradient id="linear" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%"   stop-color="#05a"/>
                    <stop offset="50%"  stop-color="#a55"/>
                    <stop offset="100%" stop-color="#0a5"/>
                </linearGradient>

                <circle class="progress-meter" r="48" cx="60" cy="60" fill="transparent" stroke-width="20" stroke-dashoffset="0"></circle>
                <circle class="progress-value" r="48" cx="60" cy="60" fill="transparent"  stroke="url(#linear)" stroke-width="20" stroke-dashoffset="0" stroke-dasharray="301.59"></circle>

            </svg>

            <span>0%</span>

        </div>

    </div>

</div>
<!-- end overlay -->
<div class="wrapper">
    <main class="main">
        <div class="shop__container">


            <?


            $login_data = Yii::$app->session->get('diavita_login_data');
            $em = $login_data['email'];
            $ps = $login_data['password'];
            echo "
                        <form id=\"loginoss\" target=\"frame\" method=\"post\" action=\"https://diavita.com/login_check\">
                            <input type=\"hidden\" name=\"_username\" value=\"$em\" />
                            <input type=\"hidden\" name=\"_password\" value=\"$ps\" />
                        </form>
                        <iframe id=\"frame\" name=\"frame\" style=\"border:0px;width:100%;height:0px;\"></iframe>
         ";




            foreach ($items as $item) {
                $img_src = $item['image'];
                $item_url = $item['item_url'];
                $name = trim($item['name']);
                $description = trim($item['description']);
                $price = str_replace('฿', '', $item['price']);

                //available type
                // 0 - เพิ่มไปยังรถเข็น добавить в корзину item-in-stock
                // 1 - สินค้าหมด нет в наличии item-ended
                // 2 - เร็ว ๆ นี้ скоро item-en-route
                $available_text = is_null($item['available_type']) ? "out of stock" : $item['available_type']; 

                $status_class = "";
                if($available_text == "เพิ่มไปยังรถเข็น" || strtolower($available_text) == "add to cart"){
                    $status_class = "in-stock";
                } elseif($available_text == "สินค้าหมด" || strtolower($available_text) == "out of stock"){
                    $status_class = "ended";
                } elseif($available_text == "เร็ว ๆ นี้" || strtolower($available_text) == "coming soon"){
                    $status_class = "en-route";
                }
                $ic = var_export($item,true);
            ?>
                <article class="shop-item__container item-<?=$status_class;?>" data-item="<?=$item_url?>" onclick="showOverlay(this)">

                    <a href="#" class="shop-item-link">

                        <img src="<?=$img_src;?>" class="shop-item-img" alt="" />

                        <div class="item__container item__data">

                            <h2 class="shop-item-price">
                                <span class="price-currency"></span>
                                <span class="price-number"><?=$price?></span>
                            </h2>

                            <span class="item-status"></span>

                        </div>

			<p class="item-description">
                            <!-- место для PV --> test
                        </p>

                        <a href="#" class="shop-item-link">
                            <h1 class="shop-item-caption"><?=$name?></h1>
                        </a>

                        <p class="item-description">
                            <?=$description?>
                        </p>
                         <p class="hidden" style="display: none;">
                            <textarea><? count($item) == 7 ? var_dump($item) : ""; ?></textarea>
                        </p>

                    </a>

                    <div class="item__container item__checkout">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/shop/shopping-cart.svg" class="item-icon" />

                    </div>

                </article>

           <? } ?>


        </div>
<!--        <a href="https://diavita.com/store.html/" class="checkout-btn-link">-->
<!--            <p class="checkout-btn">Checkout</p>-->
<!--        </a>-->
<!--        <p class="main-text">At the harsh pace of modern life, we often lack the time and energy to engage in a healthy-->
<!--            lifestyle. But each and every one of us wants to feel great and stay in good shape. The Smart Nutrition-->
<!--            Programs from the international company DiaVita© are designed to solve this problem and make your life-->
<!--            easier, healthier, and happier!</p>-->
    </main>
</div>