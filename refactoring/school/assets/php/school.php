<?php

$lng = 'en';
$lng_list = ['en','th'];
if(in_array(Yii::$app->language,$lng_list)) {
    $lng = Yii::$app->language;
}

use yii\web\View;

$this->registerCssFile('/modules/admin/cabinet_assets/css/media480.css');
$this->registerCssFile('/modules/admin/cabinet_assets/css/mediaMax400.css');
$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media320.css');
$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media480.css');
$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media768.css');
$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media992.css');
$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media1200.css');

$this->registerJsFile('/modules/admin/cabinet_assets/js/accordion.js', ['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/coopGraphic.js', ['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/dropdownmenu.js', ['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/scrolldown.js', ['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/schoolTabs.js', ['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/schoolTabsMobil.js', ['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/rain.js', ['position' => View::POS_END]);
?>
<div class="wrapper-school">

    <nav class="school__navigation">

        <ul class="school-nav-list">
            <li class="school-nav-item">
                <a href="#introduction" class="school-nav-item-link school-nav-item-link--active">
                    <?= Yii::t('lessons', 'Introduction'); ?>
                </a>
            </li>
            <li class="school-nav-item">
                <a href="#online-promotion" class="school-nav-item-link">
                    <?= Yii::t('lessons', 'Online promotion'); ?>
                </a>
            </li>
            <li class="school-nav-item">
                <a href="#offline-promotion" class="school-nav-item-link">
                    <?= Yii::t('lessons', 'Offline promotion'); ?>
                </a>
            </li>
            <li class="school-nav-item">
                <a href="#business-creating" class="school-nav-item-link">
                    <?= Yii::t('lessons', 'Business creation'); ?>
                </a>
            </li>
            <li class="school-nav-item">
                <a href="#increase-in-sales" class="school-nav-item-link">
                    <?= Yii::t('lessons', 'Increase in sales'); ?>
                </a>
            </li>
            <li class="school-nav-item">
                <a href="#negotiation" class="school-nav-item-link">
                    <?= Yii::t('lessons', 'Negotiation'); ?>
                </a>
            </li>
        </ul>

    </nav>

    <div id="introduction" class="school__body introduction show show-mob">

        <div class="school-accordion">

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'First lesson'); ?></h1>
            <div class="school-accordion__container first-lesson">

                <div class="lesson-header">

                    <h1 class="lesson-header-caption"><?= Yii::t('lessons', 'Who we are?'); ?></h1>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/firstlesson/groupleaf.svg"
                         class="first-lesson-img--leaf"
                         alt="">
                    <img src="/modules/admin/cabinet_assets/pictures/svg/firstlesson/greeting.svg"
                         class="lesson-header-img first-lesson-pandafix" alt="">

                </div>

                <div class="lesson__container--white">

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/medal.svg" class="lesson-block-icon"
                             alt="">
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'We are one of the most innovative network companies in the
                            world.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking.svg"
                             class="lesson-block-icon"
                             alt="">
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'We offer excellent opportunities for doing business for
                            everyone.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/presentation.svg"
                             class="lesson-block-icon"
                             alt="">
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'We teach to build effective marketing plans and effectively use
                            modern digital technologies.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/like.svg" class="lesson-block-icon"
                             alt="">
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'What\'s important is that you will not need any material
                            investment.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/online-shop.svg"
                             class="lesson-block-icon"
                             alt="">
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'In addition, if you become a part of our team, then you will be
                            able to purchase products from the company with very good discounts.'); ?></p>

                    </div>

                </div>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'For whom are we?'); ?></h2>

                    <div class="lesson__block--two">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/handshake.svg"
                             class="lesson-block-icon--two"
                             alt="">
                        <p class="lesson-block-text--two--white"><?= Yii::t('lessons', 'If you dream of your own business, but you do not have seed
                            capital, then we will help you realize your dream!'); ?></p>

                    </div>

                    <div class="lesson__block--two">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/user.svg"
                             class="lesson-block-icon--two" alt="">
                        <p class="lesson-block-text--two--white"><?= Yii::t('lessons', 'You can safely call yourself a single-minded person and you
                            are not afraid of changes in your life? We are waiting for you!'); ?></p>

                    </div>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'What do we offer?'); ?></h2>

                <div class="lesson__container--white">

                    <div class="first-lesson-wrapper">

                        <div class="first-lesson__container">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/currency.svg"
                                 class="first-lesson-icon" alt="">
                            <p class="first-lesson-text"><?= Yii::t('lessons', 'Lack of costs. You do not have to borrow or invest a lot to
                                start your own business.'); ?></p>

                        </div>

                        <div class="first-lesson__container">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/certeficate%20-%201.svg"
                                 class="first-lesson-icon"
                                 alt="">
                            <p class="first-lesson-text"><?= Yii::t('lessons', 'You will learn the secrets of successful business conduct:
                                trainings, master classes, webinars and much more.'); ?></p>

                        </div>

                        <div class="first-lesson__container">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/laptop-and-rocket.svg"
                                 class="first-lesson-icon"
                                 alt="">
                            <p class="first-lesson-text"><?= Yii::t('lessons', 'Innovative IT solutions for attracting new customers and
                                business development.'); ?></p>

                        </div>

                        <div class="first-lesson__container">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/progress.svg"
                                 class="first-lesson-icon" alt="">
                            <p class="first-lesson-text"><?= Yii::t('lessons', 'Opportunities for rapid career growth.'); ?></p>

                        </div>

                        <div class="first-lesson__container">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/three.svg"
                                 class="first-lesson-icon" alt="">
                            <p class="first-lesson-text"><?= Yii::t('lessons', 'You will find a friendly team and constant acquaintance with
                                successful people.'); ?></p>

                        </div>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/firstlesson/sit.svg"
                         class="first-lesson-img--right" alt="">

                </div>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Second lesson'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h1 class="lesson-header-caption"><?= Yii::t('lessons', 'Why should I become a SBL* (Senior Business Leader)?'); ?></h1>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/secondlesson/together.svg"
                         class="lesson-header-img" alt="">

                </div>

                <div class="second-lesson__container">

                    <p class="second-lesson-text--border"><?= Yii::t('lessons', 'Show as a comparison of an ordinary partner and SBL. Start
                        with the fact that there are two friends. One is a Partner and another is SBL. And just compare
                        them with each other.
                        An ordinary partner has only a 12% discount for a product and has no structure.
                        <br/>SBL for real is a luxury and he has a 30% discount. And accordingly from each downline
                        partner in his structure, he receives income for each sale.'); ?></p>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/secondlesson/hint.svg"
                         class="second-lesson-img--right" alt="">

                </div>

                <div class="lesson__container">

                    <div class="second-lesson__container">

                        <p class="second-lesson-container-text"><?= Yii::t('lessons', 'Our Partner has no structure because he is lazy and
                            looks for a pretext.
                            Although his friend SBL visited all familiar, link up the Instagram and FB for promotion and
                            grew to SBL.
                            From each partner he receives 18% from each sale
                            SP (Senior Partner) brings 10%
                            MP (Master PArtner) brings 5%
                            Moreover he gets 7% of the volume of his structure in addition.'); ?></p>

                        <img src="/modules/admin/cabinet_assets/pictures/svg/secondlesson/success-winner.svg"
                             class="second-lesson-container-img" alt="">

                    </div>

                    <div class="second-lesson__container">

                        <p class="second-lesson-container-text"><?= Yii::t('lessons', 'Our Partner constantly worries about the personal volume
                            of 60 PV (Personal Volume) that needs to be fulfilled. He could have become SBL but he is
                            lazy.
                            SBL does not need to worry about whether people will buy a product from him or not. He grows
                            partners, SP and MP, who also build a structure under themselves, thereby enriching our
                            SBL.'); ?></p>

                        <img src="/modules/admin/cabinet_assets/pictures/svg/secondlesson/success-loser.svg"
                             class="second-lesson-container-img" alt="">

                    </div>

                </div>

                <div class="second-lesson__container">

                    <p class="second-lesson-text--border"><?= Yii::t('lessons', 'Our Partner does not even try to spend a little time and offer
                        DiaVita goods to friends and family. And so he earns little money.
                        SBL always has in the structure his own BL (Business Leader), whom Partner, SP and MP obey. And
                        from them he also receives 7% of their common turnover.'); ?></p>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/secondlesson/about-loser.svg"
                         class="second-lesson-img--right"
                         alt="">

                </div>

                <div class="second-lesson__container">

                    <p class="second-lesson-text--border"><?= Yii::t('lessons', 'Our Partner knows other members of the DiaVita Club only a
                        little, because he does not try and generally blames others for his problems.
                        At that time SBL is known in the DiaVita Club, he is as an example and everyone wants to be
                        friends with him.'); ?></p>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/secondlesson/pandas.svg"
                         class="second-lesson-img--right"
                         alt="">

                </div>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'Make the right choice, become SBL!'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerSecondLesson-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt="">
                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Third lesson'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h1 class="lesson-header-caption"><?= Yii::t('lessons', 'Why do you need to team up and share information?'); ?></h1>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/thirdlesson/header.svg"
                         class="lesson-header-img" alt="">

                </div>

                <div class="third-lesson__container">

                    <p class="third-lesson-container-text"><?= Yii::t('lessons', 'The first is afraid of partnership, because he thinks that
                        the partner takes customers from him, so he acts independently. He always has a lot of things
                        that he can not finish on time. He does not share information, because he thinks that no one
                        will guess before his information.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/thirdlesson/pandabusy.svg"
                         class="third-lesson-container-img"
                         alt="">

                </div>

                <div class="third-lesson__container--gradient">

                    <p class="third-lesson-container-text--white"><?= Yii::t('lessons', 'The second is sharing information with his partners. He
                        disseminates information about the methods of searching for customers, and partners share with
                        him. As a result, the exchange of information is much faster: the best ways to attract appear
                        faster than those who work alone.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/thirdlesson/presentation.svg"
                         class="third-lesson-container-img"
                         alt="">

                </div>

                <div class="third-lesson__container">

                    <p class="third-lesson-container-text"><?= Yii::t('lessons', 'The first collects information himself, and all his
                        activities are not as effective as the second. The second actively contacts his partners, he
                        shares information at the forums, and he already stands on the higher position and became a MP.
                        Very soon he will rise again on the career ladder.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/thirdlesson/laptop.svg"
                         class="third-lesson-container-img"
                         alt="">

                </div>

                <div class="third-lesson__container--gradient">

                    <p class="third-lesson-container-text--white"><?= Yii::t('lessons', 'The second and his colleagues joined together for a common
                        goal and they reached the position of BL. Only thanks to their commitment and diligence they
                        came to success. They always interact with each other, which is why their productivity is
                        high.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/thirdlesson/talking.svg"
                         class="third-lesson-container-img"
                         alt="">

                </div>

                <div class="third-lesson__container">

                    <p class="third-lesson-container-text"><?= Yii::t('lessons', 'One in the field is not a warrior. The first has loaded on
                        his shoulders a load with which he will cope alone or not. However, when you are not alone, they
                        are all a team and it is always easier for them to overcome all difficulties!'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/thirdlesson/alone.svg"
                         class="third-lesson-container-img"
                         alt="">

                </div>

                <div class="third-lesson__container--gradient">

                    <p class="third-lesson-container-text--white"><?= Yii::t('lessons', 'The first has reached the status of MP, but for a very long
                        period of time. At this time, the second and his comrades became SBL, they have their own
                        structure and big income.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/thirdlesson/mountain.svg"
                         class="third-lesson-container-img"
                         alt="">

                </div>

                <div class="third-lesson__container">

                    <div class="third-lesson-container__content">

                        <p class="third-lesson-container-content-text"><?= Yii::t('lessons', 'No one knows the first panda: he does not
                            participate in discussions at the forum and does not take the initiative. The second panda
                            has a VIP status on the forum, because it supports discussions, shares information, answers
                            questions and makes new acquaintances. Everyone wants to be friends with him.'); ?></p>
                        <p class="third-lesson-container-content-text"><?= Yii::t('lessons', 'It is necessary to unite in teams, because
                            teamwork leads to success. This is the fastest way to become successful!'); ?></p>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/thirdlesson/together.svg"
                         class="third-lesson-container-img"
                         alt="">

                </div>


            </div>

        </div>

    </div>

    <div id="online-promotion" class="school__body online-promotion hide hide-mob">

        <div class="school-accordion">

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Basic course of promotion in Instagram'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Basic course of promotion in Instagram'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/insta-panda.svg"
                         class="lesson-header-img lesson-header-img--320" alt="">

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'One of the easiest ways to promote - it\'s personal account Instagram.'); ?></p>

                <p class="lesson-text"><?= Yii::t('lessons', 'In fact, you can register in Instagram only through the official mobile
                    application. You can log into an existing instagram account on your computer only via a browser.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'To register in this social network and create your own page, install the official
                    application on your mobile phone, here are the download links:'); ?></p>

                <div class="basic-inst-links__container">

                    <div class="basic-inst__link">

                        <div class="android__container">
                            <a href="https://play.google.com/store/apps/details?id=com.instagram.android&hl=en">

                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/android-logo.svg"
                                     class="android-img" alt=""/>
                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/black-circle.svg"
                                     class="android-icon--left" alt=""/>
                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/black-circle.svg"
                                     class="android-icon--right" alt=""/>

                            </a>
                        </div>

                        <p class="basic-inst-link-text"><?= Yii::t('lessons', 'For Android'); ?></p>

                    </div>

                    <div class="basic-inst__link">

                        <a href="#"><img src="/modules/admin/cabinet_assets/pictures/svg/icons/apple-logo.svg"
                                         class="basic-inst-link-img" alt=""/></a>
                        <p class="basic-inst-link-text"><?= Yii::t('lessons', 'For iPhone (iOS)'); ?></p>

                    </div>

                    <div class="basic-inst__link basic-inst__link-rain">

                        <div class="rain"></div>
                        <a href="https://www.microsoft.com/en-us/store/p/instagram/9nblggh5l9xt?SilentAuth=1&wa=wsignin1.0">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/windows-logo.svg"
                                 class="basic-inst-link-img" alt=""/></a>
                        <p class="basic-inst-link-text"><?= Yii::t('lessons', 'For Windows Mobile'); ?></p>

                    </div>

                </div>

                <div class="lesson__container">

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/instagram-icon.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Go to the link above, select in accordance with your phone
                                or go to the application store and download Instagram.'); ?></p>
                        <span class="lesson-block-num--white">1</span>
                    </div>

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/user.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Run the application and select the registration method. You
                                can automatically register via Facebook (if you have an account there)'); ?></p>
                        <span class="lesson-block-num--white">2</span>
                    </div>


                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/send-mail.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'You can register via email or phone number, just switch the
                                tab'); ?></p>
                        <span class="lesson-block-num--white">3</span>
                    </div>


                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/stationery.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Enter your phone number or e-mail.'); ?></p>
                        <span class="lesson-block-num--white">4</span>
                    </div>


                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/contract.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Next, enter your name and surname, login and password.
                                Also, make an avatar photo.'); ?></p>
                        <span class="lesson-block-num--white">5</span>
                    </div>


                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Subscribe to the maximum number of friends. The more of
                                them, the more likely to find buyers among them.'); ?></p>
                        <span class="lesson-block-num--white">6</span>
                    </div>


                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/flag.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'That is all, an account is created, now you should design
                                and set up it.'); ?></p>
                        <span class="lesson-block-num--white">7</span>
                    </div>


                </div>


                <img src="/modules/admin/cabinet_assets/pictures/" class="basic-inst-screenshot" alt=""/>

                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/100-friends-<?=$lng;?>.svg" class="basic-inst-img"
                     alt=""/>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'For successful promotion in Instagram we need at least 100 subscribers.
                    This is not a problem if you start adding your friends. Instagram very often suggests you to add
                    friends from a notebook, or from other social networks.'); ?></p>

                <div class="basic-inst__icons">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/flask.svg" class="basic-inst-icon"
                         alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/info.svg" class="basic-inst-icon"
                         alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/check-symbol.svg" class="basic-inst-icon"
                         alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'To start promoting goods of the company DV, it is enough to post you have
                    found a product Vita Energy that is very good at helping people to lose weight.
                    <br/> You write its advantages and place a photo with Vita Energy. In most cases people start writing
                    and asking about the product and how to buy it. This is the easiest way of distributing a product of
                    DV in social network Instagram.'); ?></p>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'More detailed methodology, with private and secret techniques of fast
                            sales through Instagram you can read in our advanced lessons. Access to them is possible after
                            receiving the SP status.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerBasicInst-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Basic course of promotion on Facebook'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Basic course of promotion on Facebook'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/fb-panda.svg"
                         class="lesson-header-img lesson-header-img--320" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Facebook takes the 1st place in the world by users who visit the resource
                    daily. This is the largest platform, where you can sell your goods and services, covering the
                    maximum number of users.
                    It is the most effective way to build your business and sales in the social network Facebook,
                    because there is the largest audience.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'The first thing to do is to download the official Facebook application. Users of
                    the iPhone, devices based on Android and Windows Phone can find it in the App Store, Google Play
                    Store and Windows Phone Store, accordingly.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'If you already have a working account in social networks, you just need to log in
                    to the installed program. If you have not used Facebook before, you will be registered.'); ?></p>

                <div class="lesson__container">

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/fb-logo.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Launch installed on your smartphone Facebook.'); ?></p>
                        <span class="lesson-block-num--white">1</span>
                    </div>


                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/check-symbol.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', '"Push" the inscription "Register on Facebook", and then -
                                "Start".'); ?></p>
                        <span class="lesson-block-num--white">2</span>
                    </div>

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/list.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Enter your real e-mail, as well as a mobile phone number to
                                which you have access.'); ?></p>
                        <span class="lesson-block-num--white">3</span>
                    </div>

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/shield.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Enter your personal data: name and surname, place of
                                residence / study / work, date of birth, and then come up with a reliable password (and
                                be sure to remember it).'); ?></p>
                        <span class="lesson-block-num--white">4</span>
                    </div>


                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'After all the required information is specified, the system will send a
                    confirmation code to your e-mail or number, which you will need to enter in the application to
                    complete the registration.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'Then you fill out the questionnaire and start looking for friends. The
                    more friends you add, the better for sales.'); ?></p>

                <div class="base-fb__icons">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking-1.svg" class="base-fb-icon"
                         alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/coin.svg" class="base-fb-icon" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/progress.svg" class="base-fb-icon"
                         alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Promotion in facebook is very similar to promotion in Instagram. Your
                    account should be as full as possible. So your friends will trust you.'); ?></p>

                <img src="/modules/admin/cabinet_assets/pictures/" class="base-fb-screenshot" alt=""/>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'In the future you need to post about VE (Vite Energy). Then you tell a
                    story about this product and attach a photo. The better quality of the post, the more responses you
                    will receive.'); ?></p>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'More detailed information on the promotion on FB you will find in our
                        next lessons. There we will talk about the rapid growth of the popularity of your page, secret
                        techniques that increase the flow of customers and the flow of sales.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerBasicFb-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>


            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Use of other resources and sites'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Use of other resources and sites'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/line-panda.svg"
                         class="lesson-header-img lesson-header-img--320" alt="">

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'In our previous DiaVita Club lessons we learned how effectively use sites like
                    Facebook and Instagram for your sales. In this lesson we will talk about another well-known social
                    network which can and should be used to promote your product and business: Line.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'We\'ll answer 3 main questions: what is Line, how to work with Line, how
                    to sell in Line. So, let\'s go.'); ?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'What is Line?'); ?></h2>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'If explained easily and briefly Line is a messenger. And a messenger
                        is, as you know, a special app for communication between users. Of course, you can use Line to
                        simply text in chats, send emojis and stickers and also media files.'); ?></p>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'In addition, Line allows you to make free calls from one account to
                        another whenever users are. Line also has news feed which helps to look through all updates on
                        friends\' accounts.'); ?></p>

                    <img src="/modules/admin/cabinet_assets/pictures/img/line-chat-demo.png" class="line-img" alt=""/>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'How to work with Line?'); ?></h2>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Currently, Line is available for both PCs and cell phones. So there are
                    plenty ways of how to get it on your device:'); ?></p>

                <div class="lesson__container--small">

                    <div class="lesson__block--four">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/itunes-googleplay.svg"
                             class="lesson-block-icon--four" alt=""/>
                        <p class="lesson-block-text--four"><?= Yii::t('lessons', 'official iTunes and Google Play'); ?></p>

                    </div>

                    <div class="lesson__block--four">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/shop.svg"
                             class="lesson-block-icon--four" alt=""/>
                        <p class="lesson-block-text--four"><?= Yii::t('lessons', 'internal stores of supported OS'); ?></p>

                    </div>

                    <div class="lesson__block--four">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/site.svg"
                             class="lesson-block-icon--four" alt=""/>
                        <p class="lesson-block-text--four"><?= Yii::t('lessons', 'official product website'); ?></p>

                    </div>

                    <div class="lesson__block--four">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/internet.svg"
                             class="lesson-block-icon--four" alt=""/>
                        <p class="lesson-block-text--four"><?= Yii::t('lessons', 'also numerous third-party sites in the Internet'); ?></p>

                    </div>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'You can log in only via cell phone. You\'ll need to write your phone number and
                    then you\'ll receive a special access code. This code is put in the Line textbox and you can start.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'After creating an account you will have all options available: adding
                    contacts (via phone numbers), writing private messages, creating group chats, making video calls and,
                    of course, maintaining your personal page or your own news feed, in other words.'); ?></p>


                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/add-friend.svg" class="lesson-block-icon"
                         alt=""/>

                    <div class="lesson-block__container">
                        <span class="lesson-block-container-text--bold--black"><?= Yii::t('lessons', 'ADD FRIENDS.'); ?></span>
                        <span class="lesson-block-container-text--black"><?= Yii::t('lessons', 'To add
                            friends just enter a phone number and if your friend is already logged in the app will
                            immediately find him or her and add to your friends. If a person isn\'t logged in yet then
                            you can send him or her an invitation with a link to download.'); ?></span>
                    </div>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/chat-trio.svg" class="lesson-block-icon"
                         alt=""/>

                    <div class="lesson-block__container">
                        <span class="lesson-block-container-text--bold--black"><?= Yii::t('lessons', 'CREATE GROUP CHAT.'); ?></span>
                        <span class="lesson-block-container-text--black"><?= Yii::t('lessons', ' In
                            order to create a group chat you need to choose "Create group" function and add right people
                            from your contacts.'); ?></span>
                    </div>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/resume.svg" class="lesson-block-icon"
                         alt=""/>

                    <div class="lesson-block__container">
                        <span class="lesson-block-container-text--bold--black"><?= Yii::t('lessons', 'PERSONAL PAGE.'); ?></span>
                        <span class="lesson-block-container-text--black"><?= Yii::t('lessons', ' As for
                            personal page maintaining you can put absolutely any content: text, graphics or videos.'); ?></span>
                    </div>

                </div>


                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'How to sell via Line?'); ?></h2>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'Your sales in Line depend on your ability to communicate and persuade
                        people. To sell successfully in the messenger you need to do 4 important steps:'); ?></p>

                    <div class="line__container--border">

                        <div class="line__container--horizontal">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/icon-one.svg"
                                 class="line-num-icon" alt=""/>

                            <div class="lesson-block__container">
                                <b class="lesson-block-container-text--bold"><?= Yii::t('lessons', 'Establishing a contact.'); ?></b>
                                <p class="lesson-block-container-text"><?= Yii::t('lessons', 'Add your friends, their friends, subscribers of pages similar with what you\'re offering.
                                Expand your social network in the messenger, communicate with your virtual friends and
                                establish trustful friendships.'); ?></p>
                            </div>

                        </div>

                        <div class="line__container--horizontal">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/icon-two.svg"
                                 class="line-num-icon" alt=""/>

                            <div class="lesson-block__container">
                                <b class="lesson-block-container-text--bold"><?= Yii::t('lessons', 'Identifying needs. '); ?></b>
                                <p class="lesson-block-container-text"><?= Yii::t('lessons', 'In order for a potential buyer to become your client you need to foresee and feel his
                                desires. What\'s the point of selling a product to a person if he doesn\'t need the product?
                                Of course, you may try to convince him that he needs a product but you need to do this
                                very carefully. And later we\'ll talk about how to do this.'); ?></p>
                            </div>

                        </div>

                        <div class="line__container--horizontal">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/icon-three.svg"
                                 class="line-num-icon" alt=""/>

                            <div class="lesson-block__container">
                                <b class="lesson-block-container-text--bold"><?= Yii::t('lessons', 'Product presentation. '); ?></b>
                                <p class="lesson-block-container-text"><?= Yii::t('lessons', 'After you saw a person need the product or you convinced him you need to present the
                                product in a right way. Be sure to point out positive aspects of your offer starting
                                from quality to prices and possibilities. What to do with minuses? Turn them into pluses!
                                For example, a high price becomes a plus if you mention low flow of the product and higher
                                quality in comparison with analogues.'); ?></p>
                            </div>

                        </div>

                    </div>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'Vita Energy is a new generation product, wholly natural and has a
                        wide range of flavors. It is the icon of a healthy diet. Such volume will allow you to buy and
                        forget about a need to purchase more. It\'s worth it!'); ?></p>

                    <div class="line__container--border">

                        <div class="line__container--horizontal">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/icon-four.svg"
                                 class="line-num-icon" alt=""/>

                            <div class="lesson-block__container">
                                <b class="lesson-block-container-text--bold"><?= Yii::t('lessons', 'Working with arguments against. '); ?></b>
                                <p class="lesson-block-container-text"><?= Yii::t('lessons', 'We will pay a special attention to this step since it is the closing stage of a transaction.
                                So what are the arguments against?'); ?></p>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- First block -->

                <div class="lesson-caption__container">

                    <span class="lesson-caption--yellow">4.1</span>
                    <span class="lesson-caption--black"><?= Yii::t('lessons', 'Arguments against because of errors at establishing a contact stage'); ?></span>

                </div>

                <h3 class="lesson-caption--darkblue"><?= Yii::t('lessons', 'Case 1. A client refuses to talk'); ?></h3>
                <p class="lesson-text"><?= Yii::t('lessons', 'Perhaps a client hasn\'t decided yet and wants to study the catalog in more
                        detail, compare prices, etc. That\'s why his answer when you suggest to discuss a deal in chat is
                        “No” or silence. You need to interest him so that a dialogue continues. Here is an example of a
                        "working" dialogue in a similar situation:'); ?></p>
                <img src="/modules/admin/cabinet_assets/pictures/img/chat-1-<?=$lng;?>.png" class="line-chat-img" alt=""/>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'A dialogue is revived. Now your task is to do a nice presentation and
                        convince a potential buyer to purchase the goods.'); ?></p>

                <h3 class="lesson-caption--darkblue"><?= Yii::t('lessons', 'Case 2. A client expresses distrust.'); ?></h3>
                <p class="lesson-text"><?= Yii::t('lessons', 'Set a friendly tone. Say hello, introduce yourself and refer to a client by
                        name. During  conversation make compliments, jokes, agree and thank him. If it\'s appropriate
                        congratulate on holidays. Express positive emotions, write "I\'m happy / with pleasure". Use
                        emojis and avoid formal tone. Remember: everything should be to the extent.'); ?></p>
                <img src="/modules/admin/cabinet_assets/pictures/img/chat-2-<?=$lng;?>.png" class="line-chat-img" alt=""/>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'A client is interested it means there is no distrust anymore.'); ?></p>

                <!-- Second block -->

                <div class="lesson-caption__container">

                    <span class="lesson-caption--yellow">4.2</span>
                    <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Arguments against because of mismatching needs'); ?></h2>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'A client should always see benefits for him in your offer! Keep this
                        in mind when establishing a contact!'); ?></p>
                <h3 class="lesson-caption--darkblue"><?= Yii::t('lessons', 'Case 1. The client doubts whether to buy the goods.'); ?></h3>
                <p class="lesson-text"><?= Yii::t('lessons', 'When choosing a product a customer can\'t examine it personally. He objects
                        and it\'s natural: no one wants to get pig in a poke. While convincing a client to purchase
                        specify what exactly stops him. Ask open questions which require detailed answers and not just
                        yes or no.'); ?></p>
                <img src="/modules/admin/cabinet_assets/pictures/img/chat-3-<?=$lng;?>.png" class="line-chat-img" alt=""/>

                <!-- Third block -->

                <div class="lesson-caption__container">

                    <span class="lesson-caption--yellow">4.3</span>
                    <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Arguments against because of incomplete presentation.'); ?></h2>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Your task is to offer a product that meet the requirements of a
                        client. Let\'s look through main arguments against at this stage.'); ?></p>
                <h3 class="lesson-caption--darkblue"><?= Yii::t('lessons', 'Case 1. A client doesn\'t understand the benefits.'); ?></h3>
                <p class="lesson-text"><?= Yii::t('lessons', 'Arguments against are well known: it\'s expensive, I get used to what I have
                        now, I\'m not interested, I don\'t see the benefits, etc. Compare your proposal with other less
                        profitable ones this is one of the most correct ways of persuasion.'); ?></p>
                <img src="/modules/admin/cabinet_assets/pictures/img/chat-4-<?=$lng;?>.png" class="line-chat-img" alt=""/>

                <h3 class="lesson-caption--darkblue"><?= Yii::t('lessons', 'Case 2. A client doubts because lack of information.'); ?></h3>
                <p class="lesson-text"><?= Yii::t('lessons', 'This is one of the consequences of the product\'s bad presentation. Try to
                        explain a client again, but in more bright way, using colorful material: photos or videos.'); ?></p>
                <img src="/modules/admin/cabinet_assets/pictures/img/chat-5-<?=$lng;?>.png" class="line-chat-img" alt=""/>

                <!-- end -->

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Remember the main thing: your sales are in your hands. Come up with
                        creative approaches, but don\'t be double-hearted, communicate with your customers and then your
                        sales will only grow up. To increase loyalty you can come up with very interesting and cool
                        methods: meeting with a client in person, showing your product, sharing reviews, multimedia
                        material, etc. It all depends on your imagination! The main thing is LINE will help you to
                        establish a primary contact with a client.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'With LINE you can enjoy comfortable, safe and high-quality
                        communication and, of course, promote your product or business. Messages in the app are sent in
                        an instant. Send videos, photos, various sounds as well as original emojis and stickers, use all
                        possibilities of the messenger and you\'ll be able to draw even more customers.'); ?></p>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Advanced course of promotion in Instagram'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Advanced course of promotion in Instagram'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/insta-panda.svg"
                         class="lesson-header-img lesson-header-img--320" alt="">

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'In the DVC lesson on basic principles of promotion in Instagram you learned about
                    registration in the app, adding friends and posting possibilities.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'In this advanced course you will learn what kind of accounts there are,
                    how to avoid ban, about basic rules of decorating an account and effective posting.'); ?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Question 1. What types of accounts are there?'); ?></h2>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'To begin with, decide what you need Instagram for in order to
                        properly fill out a profile and account in the future. Main types of accounts:'); ?></p>

                    <div class="lesson__block">

                        <div class="lesson__block--five">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/self-avatar.svg"
                                 class="lesson-block-icon--five"/>
                            <p class="lesson-block-text--five--white"><?= Yii::t('lessons', 'personal account'); ?></p>

                        </div>

                        <div class="lesson__block--five">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/group-trio.svg"
                                 class="lesson-block-icon--five"/>
                            <p class="lesson-block-text--five--white"><?= Yii::t('lessons', 'public account'); ?></p>

                        </div>

                        <div class="lesson__block--five">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/online-shop.svg"
                                 class="lesson-block-icon--five"/>
                            <p class="lesson-block-text--five--white"><?= Yii::t('lessons', 'online stores'); ?></p>

                        </div>

                        <div class="lesson__block--five">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking.svg"
                                 class="lesson-block-icon--five"/>
                            <p class="lesson-block-text--five--white"><?= Yii::t('lessons', 'business accounts'); ?></p>

                        </div>

                        <div class="lesson__block--five">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/itunes-googleplay.svg"
                                 class="lesson-block-icon--five"/>
                            <p class="lesson-block-text--five--white"><?= Yii::t('lessons', 'brand account'); ?></p>

                        </div>

                    </div>

                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'When chosen why you create an Instagram account you can choose
                        its type and basic strategy of posting. In case of MLM both (as for sales and for attracting
                        partners) the most optimal variants are personal and business accounts.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Question 2. How to avoid account blocking?'); ?></h2>
                <p class="lesson-text"><?= Yii::t('lessons', 'There are limits for certain user actions in Instagram. Since exceeding these
                    limits may result in ban don\'t skip this section and read it till the end.Relevant limits:'); ?></p>

                <div class="lesson__block">

                    <div class="lesson__block--three">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/like-heart.svg"
                             class="lesson-block-icon--three"/>
                        <p class="lesson-block-text--three"><?= Yii::t('lessons', 'Likes - up to 60 likes per hour.'); ?></p>

                    </div>

                    <div class="lesson__block--three">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/comments.svg"
                             class="lesson-block-icon--three"/>
                        <p class="lesson-block-text--three"><?= Yii::t('lessons', 'Comments - up to 60 comments per hour.'); ?></p>

                    </div>

                    <div class="lesson__block--three">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/new-members.svg"
                             class="lesson-block-icon--three"/>
                        <p class="lesson-block-text--three"><?= Yii::t('lessons', 'Follows and unfollows - up to 60 follows and unfollows
                            per hour.'); ?></p>

                    </div>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'Instagram accounts aren\'t banned manually, but according to some algorithm which
                    is known only by Instagram insiders. But, based on our experience, we\'ve come up with a list of
                    some criteria by which Instagram evaluates suspicious accounts and bans them.'); ?></p>

                <ul class="lesson-list">
                    <li class="lesson-item ">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/close.svg" class="lesson-item-icon"/>
                        <p class="lesson-item-text"><?= Yii::t('lessons', 'The most important criterion is a sharply increased account
                            popularity.'); ?></p>
                    </li>
                    <li class="lesson-item ">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/close.svg" class="lesson-item-icon"/>
                        <p class="lesson-item-text"><?= Yii::t('lessons', 'Secondly, it\'s a frequent IP change.'); ?></p>
                    </li>
                    <li class="lesson-item ">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/close.svg" class="lesson-item-icon"/>
                        <p class="lesson-item-text"><?= Yii::t('lessons', 'Thirdly, it\'s a change of device to which an account is
                            attached.'); ?></p>
                    </li>
                </ul>

                <p class="lesson-text"><?= Yii::t('lessons', 'In order to avoid ban for rules violation, we advise you to carefully read
                    following sections of Instagram rules:'); ?></p>

                <ul class="lesson-list">
                    <li class="lesson-item">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick.svg" class="lesson-item-icon"/>
                        <a href="https://help.instagram.com/478745558852511">
                            <p class="lesson-item-text"><?= Yii::t('lessons', 'Terms of Use'); ?></p>
                        </a>
                    </li>
                    <li class="lesson-item">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick.svg" class="lesson-item-icon"/>
                        <a href="https://help.instagram.com/477434105621119">
                            <p class="lesson-item-text"><?= Yii::t('lessons', 'Community Guidelines'); ?></p>
                        </a>
                    </li>
                </ul>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Question 3. How to design an account?'); ?></h2>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'You should design an account in a way so that a user can
                        immediately answer two main questions: who are you and what are you offering. To do this,
                        focus on main elements: '); ?></p>

                    <img src="/modules/admin/cabinet_assets/pictures/img/adv-inst-screen-1.png"
                         class="advanced-screen"/>

                    <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Photo.'); ?></h3>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'If you have a personal account or you promote yourself in Instagram as a brand, then upload
                        your photo. If your account is aimed at sales, then upload an ideal picture of your product with
                        a light background. A photo should evoke positive emotions, show the very core of what you do
                        and text on a photo should be easy to read.'); ?></p>

                    <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Name.'); ?></h3>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'The basic rule is simplicity. A person should easily remember your name and search for you
                        without efforts. For a personal account and personal brand, name is basically your name and last
                        name. In case you are promoting yourself as a store or brand it\'s name and location. But, of
                        course, personal accounts will allow you not only to sell, but also to search partners for your
                        structure. Keep this in mind.'); ?></p>

                    <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Username.'); ?></h3>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'Username limit is 30 characters. Don\'t duplicate your account name in username, it\'s better
                        to write down connected keywords. Don\'t be afraid to use emojis, but moderately, of course.'); ?></p>

                    <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Bio.'); ?></h3>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'Bio limit is 150 characters. Difficulty of this is that you have to fit the whole essence
                        of your business in a short text. So immediately tell about advantages in order to catch the
                        interest of a person on the other side of a screen. Again, don\'t forget to use emojis as Bio
                        is your chance to \"catch" a potential client or partner.'); ?></p>

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'What 150 characters should include?'); ?></h2>

                    <div class="lesson__block">

                        <div class="lesson__block--four">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/quality.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four--white"><?= Yii::t('lessons', 'Your advantages'); ?></p>

                        </div>

                        <div class="lesson__block--four">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/ringing-phone.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four--white"><?= Yii::t('lessons', 'Information on how to contact you'); ?></p>

                        </div>

                        <div class="lesson__block--four">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/megaphone.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four--white"><?= Yii::t('lessons', 'Call to action'); ?></p>

                        </div>

                        <div class="lesson__block--four">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/user-card.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four--white"><?= Yii::t('lessons', 'Additional Information'); ?></p>

                        </div>

                    </div>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Question 4. What to post?'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'Your account content should be as clear and interesting as possible.
                    Content may be entertaining, informative and selling. Ideal ratio is 30/40/30 respectively.
                    Entertaining content includes various motivating posts, quizes and competitions. Informative is the
                    one that informs your subscriber about your product / service. What is brand\'s core? Assortment?
                    Price? How to buy? And so on. Selling content are posts that stimulate a user to make a purchase.
                    Most often they contain a call to action.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'As for the visual component (photos and video content), we advise you to
                    choose your style and stick to it. A photo should be of high quality and style. Use various
                    placement options, for example, multiple photos in a post or collages.
                    A photo for a post should be 1080 x 1080 px. As for a video, Instagram restriction is 1 minute.
                    You can easily put almost any video content in this size.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'Text as well as photos is the same strong, rich and important part of content.
                    If you write about something important, add a title and don\'t make a photo bright. Be sure to check
                    if you made any mistakes. First, type a text in memo or notepad, or use scheduled posting services.
                    For example <a href="https://kuku.io">https://kuku.io</a> or <a href="https://onlypult.com">https://onlypult.com</a>. There are a lot of such services, you can find
                    the ones with minimum monthly fee.'); ?></p>

                <a href="https://kuku.io">
                    <img src="/modules/admin/cabinet_assets/pictures/img/adv-inst-screen-2.png"
                         class="advanced-screen-link"/>
                </a>
                <a href="https://onlypult.com">
                    <img src="/modules/admin/cabinet_assets/pictures/img/adv-inst-screen-3.png"
                         class="advanced-screen-link"/>
                </a>

                <p class="lesson-text"><?= Yii::t('lessons', 'Remember that Instagram texts have a limited length, they should not exceed 2200
                    characters (and the ideal post length is 800 characters). Selling text is not just a photo
                    description or your story, it\'s also your comments. Encourage users to comment and have a
                    discussion. To engage a person in a conversation you need to put @ before his name and then type it
                    yourself, and only then send a comment. In this case he\'ll receive a notice. '); ?></p>

                <a href="https://onlypult.com">
                    <img src="/modules/admin/cabinet_assets/pictures/img/adv-inst-screen-4.png"
                         class="advanced-screen-link"/>
                </a>

                <p class="lesson-text"><?= Yii::t('lessons', 'At the end of the lesson we offer you some cool goodies that will help you to
                    make visual content of your account stylish:'); ?></p>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Apps for photo editing:'); ?></h2>

                <div class="lesson__block">

                    <div class="lesson__block--four">
                        <a href="https://itunes.apple.com/th/app/vsco/id588013838?l=th&mt=8">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/vsco.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four">VSCO</p>
                        </a>
                    </div>

                    <div class="lesson__block--four">
                        <a href="https://itunes.apple.com/th/app/facetune/id606310581?l=th&mt=8">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/facetune.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four">Facetune</p>
                        </a>
                    </div>

                    <div class="lesson__block--four">
                        <a href="https://itunes.apple.com/th/app/snapseed/id439438619?l=th&mt=8">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/snapspeed.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four">Snapspeed</p>
                        </a>
                    </div>

                    <div class="lesson__block--four">
                        <a href="https://play.google.com/store/apps/details?id=com.pixlr.express">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/pixlr.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four">Pixlr</p>
                        </a>
                    </div>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Apps for video editing:'); ?></h2>

                <div class="lesson__block">

                    <div class="lesson__block--four">
                        <a href="https://itunes.apple.com/th/app/boomerang-from-instagram/id1041596399?l=th&mt=8">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/boomerrang.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four">Boomerang</p>
                        </a>
                    </div>

                    <div class="lesson__block--four">
                        <a href="https://itunes.apple.com/th/app/imovie/id377298193?l=th&mt=8">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/imovie.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four">iMovie</p>
                        </a>
                    </div>

                    <div class="lesson__block--four">
                        <a href="https://itunes.apple.com/th/app/vhs-camcorder/id679454835?l=th&mt=8">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/vhs-camcorder.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four">VHS Camcorder</p>
                        </a>
                    </div>

                    <div class="lesson__block--four">
                        <a href="https://play.google.com/store/apps/details?id=com.quvideo.xiaoying">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/viva-video.svg"
                                 class="lesson-block-icon--four"/>
                            <p class="lesson-block-text--four">VivaVideo</p>
                        </a>
                    </div>

                </div>

                <footer class="lesson-footer">

                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'Instagram is one of the main online tools. Use it at full power! More
                        information about secret methods of Instagram promotion you can read in a private course.
                        Good luck!'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footer-adv-inst-<?=$lng;?>.svg"
                         class="lesson-footer-img"/>

                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Advanced course of promotion on Facebook'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Advanced course of promotion on Facebook'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/fb-panda.svg"
                         class="lesson-header-img lesson-header-img--320" alt=""/>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'In the previous lesson on basic principles of Facebook promotion, we covered
                    process of installing the app and signing up in the network in detail, as well as first steps of
                    using it.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'In the advanced course you\'ll learn how to properly design a page,
                    create thematic groups and make effective posts.'); ?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Question 1. How to design a profile?'); ?></h2>


                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/profile-avatar.svg"
                             class="lesson-block-icon"/>

                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'The first thing you need to take care of is your personal profile photo.
                                Please, choose a good and high-quality profile photo and most importantly choose a photo of
                                yourself. Remember a profile photo has a size of 180 x 180 pixels. You can edit your photo
                                in some photo editor app in advance. In Facebook you can decorate your page with a cover -
                                a  beautiful photo which will be placed at the head of your page.'); ?></p>

                    </div>

                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'You can make an unusual profile picture which will continue
                            the design of a cover. To create such original cover, you may use this:'); ?>
                        <a href="https://www.timelinecoverbanner.com/Facebook-cover-photo-maker/"
                           class="advanced-icon-link">TimeLineCover</a>
                    </p>


                    <p class="lesson-text--white"><?= Yii::t('lessons', 'Animated profile pictures are gaining great popularity and
                            positive responses among subscribers. You can do it as described in the following: '); ?></p>

                    <ul class="lesson-list">
                        <li class="lesson-item">
                            <span class="lesson-item-num--white">1</span>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Log into Facebook app from your mobile device'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <span class="lesson-item-num--white">2</span>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Go to your profile and click on your profile photo'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <span class="lesson-item-num--white">3</span>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Select "Take a Video" or "Upload a Video" option'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <span class="lesson-item-num--white">4</span>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'When you\'re done click "Save"'); ?></p>
                        </li>
                    </ul>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/hobby.svg"
                             class="lesson-block-icon"/>

                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Be sure to fill in a “Describe yourself” section and add your
                                contacts. In this case, if an unknown person clicks on your profile photo, he will
                                immediately see how you can help him.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/user-description.svg"
                             class="lesson-block-icon"/>

                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Try to add as much as possible of personal information. By that you
                                will have more trust of subscribers who are your potential customers or partners.
                                Be sure to come up with beautiful and easy address of your page so you can be easily
                                found.'); ?></p>

                    </div>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Question 2. How to create a group and what to do with it?'); ?></h2>
                <p class="lesson-text"><?= Yii::t('lessons', 'Facebook group is a great way to promote your business, sales and to find
                    new partners. How to create a group?'); ?></p>

                <div class="advanced-fb__screen">

                    <img src="/modules/admin/cabinet_assets/pictures/img/adv-fb-screen-1-<?=$lng;?>.png"
                         class="advanced-fb-screen"/>
                    <p class="advanced-fb-screen-text"><?= Yii::t('lessons', 'Go to your personal Facebook account. Click Down button at the
                        heading of your page and choose Create a Page option. In an opened window choose its type.'); ?></p>

                </div>

                <div class="advanced-fb__screen">

                    <img src="/modules/admin/cabinet_assets/pictures/img/adv-fb-screen-2-<?=$lng;?>.png"
                         class="advanced-fb-screen"/>
                    <p class="advanced-fb-screen-text"><?= Yii::t('lessons', 'Fill in the form with data about your company. Try to briefly and
                        clearly outline its activities, advantages over competitors and don\'t forget to use keywords
                        as Facebook pages are perfectly indexed by search engines.'); ?></p>

                </div>

                <p class="advanced-text"><?= Yii::t('lessons', 'Carefully write down data about your target audience. Facebook will recommend
                    your page to potential subscribers according to these characteristics.'); ?></p>

                <div class="advanced-fb__screen">

                    <img src="/modules/admin/cabinet_assets/pictures/img/adv-fb-screen-3-<?=$lng;?>.png"
                         class="advanced-fb-screen"/>
                    <p class="advanced-fb-screen-text"><?= Yii::t('lessons', 'Create a cover for the page. The cover size is 851 х 315 px. When
                        creating a picture, follow these parameters, and then you won\'t lose any pixel of quality.'); ?></p>

                </div>

                <p class="advanced-text"><?= Yii::t('lessons', 'You created the page, but it\'s too early to promote it. It\'s empty and you have
                    nothing to offer to potential subscribers yet. Now you\'re facing the most troublesome stage of
                    work: a creation of primary content.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'We\'ll talk about how to create beautiful and high-quality content for
                    Facebook group in the next block.'); ?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Question 3. How to create effective content?'); ?></h2>
                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'Facebook  content is as simple as in other social networks.
                        You can post texts, photo and video content and add entire photo albums.'); ?></p>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'We present you 8 really effective tips for creating high-quality
                        Facebook content: '); ?></p>

                    <div class="lesson__block">

                        <div class="lesson-block__container--wide">

                            <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Tip 1. More positivity'); ?></h3>
                            <p class="lesson-text--white"><?= Yii::t('lessons', 'Today we have a trend to divide everything into "fun" and
                                "not fun". Be "fun" and give people happiness and people will reach out to you. People
                                are glad to share positive Facebook posts with their friends.'); ?></p>

                        </div>

                        <span class="lesson-block-num--white ">1</span>

                    </div>

                    <div class="lesson__block">

                        <div class="lesson-block__container--wide">

                            <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Tip 2. Create intrigue'); ?></h3>
                            <p class="lesson-text--white"><?= Yii::t('lessons', 'Most popular posts are those where you offer something
                                interesting, but don\'t reveal it completely. Create an intrigue. Learn to create a lace of
                                unspoken words and a desire of subscribers to wait for more and more new stories.
                                <br/>If you cope with a task of causing an irresistible desire of readers to click on your
                                status and satisfy their curiosity, which grew too strong because of your text, you\'ll
                                assure your success.'); ?></p>

                        </div>

                        <span class="lesson-block-num--white ">2</span>

                    </div>

                    <div class="lesson__block">

                        <div class="lesson-block__container--wide">

                            <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Tip 3. Short links'); ?></h3>
                            <p class="lesson-text--white"><?= Yii::t('lessons', 'If you want to share a link with subscribers in your post, make
                                it short. A perfect help are by services like <a href="https://bitly.com/" class="advanced-icon-link">Bitly.</a>'); ?></p>
                            <p class="lesson-text--white"><?= Yii::t('lessons', 'Don\'t overload a post with unnecessary characters. Brevity is the soul of wit.'); ?></p>

                        </div>

                        <span class="lesson-block-num--white ">3</span>

                    </div>

                    <div class="lesson__block">

                        <div class="lesson-block__container--wide">

                            <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Tip 4. Make images juicy'); ?></h3>
                            <p class="lesson-text--white"><?= Yii::t('lessons', 'Most engaging Facebook posts are those which have a picture.
                                Choose it carefully. Choose a picture according to a post text mood. There is also an
                                optimal size of 800x600 pixels. Try to fit in it and then you won\'t lose quality. If you
                                can make photo content by yourself, use this advantage. Unique photos are always more
                                appreciated.'); ?></p>

                        </div>

                        <span class="lesson-block-num--white ">4</span>

                    </div>

                    <div class="lesson__block">

                        <div class="lesson-block__container--wide">

                            <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Tip 5. Adjust to devices'); ?></h3>
                            <p class="lesson-text--white"><?= Yii::t('lessons', 'Even if you upload posts from PC don\'t forget that most
                                people scroll news feed from mobile devices. Choose appropriate photo content and don\'t
                                make text too long as it\'s hard to read from a mobile device. You can always open your
                                own page from your mobile device and see if your post looks acceptable.'); ?></p>

                        </div>

                        <span class="lesson-block-num--white ">5</span>

                    </div>

                    <div class="lesson__block">

                        <div class="lesson-block__container--wide">

                            <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Tip 6. Involve through dialogue'); ?></h3>
                            <p class="lesson-text--white"><?= Yii::t('lessons', 'Comments and answers also attract your audience\'s attention to
                                Facebook posts. Build relationships with your readers through dialogue. Try to write in
                                easy and simple way and ask questions as if you\'re talking to a real person. Be sure to
                                follow comments and respond to them promptly.'); ?></p>

                        </div>

                        <span class="lesson-block-num--white ">6</span>

                    </div>

                    <div class="lesson__block">

                        <div class="lesson-block__container--wide">

                            <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Tip 7. Maintain prime time'); ?></h3>
                            <p class="lesson-text--white"><?= Yii::t('lessons', 'Prime time is the most appropriate time for posting content
                                when most of target audience can see it. It\'s time when people are scrolling social
                                networks and have spare time to see your posts.'); ?></p>

                        </div>

                        <span class="lesson-block-num--white ">7</span>

                    </div>

                    <div class="lesson__block">

                        <div class="lesson-block__container--wide">

                            <h3 class="lesson-caption--white--small"><?= Yii::t('lessons', 'Tip 8. Use auto posting'); ?></h3>
                            <p class="lesson-text--white"><?= Yii::t('lessons', 'Auto posting, or in other words ability to plan posts and upload
                                them at specific time, is an irreplaceable assistant if you want to well manage a page or a
                                group. You can write a post in advance, set a certain date and time and your work will
                                appear in news feed at appointed time. THere are several auto posting services, for example,'); ?>
                                <a href="https://smmplanner.com/" class="advanced-icon-link">
                                    SMMPlaner.
                                </a>
                            </p>

                        </div>

                        <span class="lesson-block-num--white ">8</span>

                    </div>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'After you have high-quality content in your page and group, don\'t forget
                    about three important things: '); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/time-refresh.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Update content regularly. Give your subscribers a
                        well-times, useful and interesting information'); ?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/comments.svg" class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Communicate with subscribers, make new friends, expand
                        your Facebook circle of contacts'); ?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/quality.svg" class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Always think about your reputation. You need to create
                        solid and confident personal brand in social networks, and then it will turn into a powerful
                        tool for finding customers and partners.'); ?></p>

                </div>

                <footer class="lesson-footer">

                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'In private Facebook promotion course you will learn about your group promotion
                        opportunities, how to promote your own page and quickly attract new subscribers who can easily
                        become your partners or customers.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footer-adv-fb-<?=$lng;?>.svg"
                         class="lesson-footer-img"/>

                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Targeted advertising on Facebook'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Targeted advertising on Facebook'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/panda-darts.svg"
                         class="lesson-header-img" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'In previous lessons you\'ve already learned basic principles of Facebook
                    promotion. It\'s time to learn more about targeted advertising, which will allow you to attract more
                    of your potential customers and partners.'); ?></p>

                <div class="lesson__container--gradient">
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/target-ad-hand-<?=$lng;?>.svg"
                         class="lesson-container-img"/>
                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'Facebook constantly analyzes interests and behavior of users on the site, in the
                    app and outside of both. He "looks" what a person likes, what he writes in news feed, what he is
                    signed up to, what groups / pages he reads, what devices he uses, what places he logs in from.
                    That\'s why it accurately determines, which users fits the targeting parameters you use, and shows
                    ads to these people.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'What you need to do to start using an effective tool like targeted
                    advertising? We suggest using our step-by-step guide:'); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/create-page.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Create a business page for yourself or for your brand. Or make sure that
                        such page already exist. We wrote about how to create a page in Facebook in the previous
                        lesson.'); ?></p>
                    <span class="lesson-block-num">1</span>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/create-ad.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Targeting of Facebook advertising begins in section Adsmanager, where you
                        can go from your personal page. Next, in a right upper corner click "create an ad" and then set
                        up parameters.'); ?></p>
                    <span class="lesson-block-num">2</span>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/target-ad.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Choose a campaign\'s purpose. By choosing a purpose you tell Facebook what
                        kind of result from an advertisement you want to receive. At the moment, there are 3 categories,
                        which include 10 purposes.'); ?></p>
                    <span class="lesson-block-num">3</span>

                </div>

                <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-1-<?=$lng;?>.png"
                     class="target-gb-screen"/>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Let\'s observe them in more detail, so you understand what advertising
                    purpose is best to choose for your campaign.'); ?></p>

                <div class="lesson__container">

                    <div class="target-fb__box">

                        <div class="target-fb__content--small">

                            <h2 class="target-fb-caption--white"><?= Yii::t('lessons', 'Recognition'); ?></h2>
                            <p class="target-fb-text--white"><?= Yii::t('lessons', 'main goal is to increase awareness of your brand, this
                                group is used most often if you have a large budget for advertising.'); ?></p>

                        </div>

                        <img src="/modules/admin/cabinet_assets/pictures/svg/drows/speaker.svg"
                             class="target-fb-img--right"/>

                    </div>

                    <ul class="target-fb-list">
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'Brand recognition - advertising is shown to create a brand
                                image in your target audience.'); ?></p>
                        </li>
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'Reach - allows you to choose how often users will see your
                                ad.'); ?></p>
                        </li>
                    </ul>

                    <div class="target-fb__box">

                        <div class="target-fb__content--alone">

                            <h2 class="target-fb-caption--white"><?= Yii::t('lessons', 'Leads'); ?></h2>
                            <p class="target-fb-text--white"><?= Yii::t('lessons', 'purposes of this group are aimed at involving users to
                                interact with your campaign.'); ?></p>

                        </div>

                    </div>

                    <ul class="target-fb-list">
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'Traffic - allows to show ads to people who are more likely
                                to click on a link in an ad.'); ?></p>
                        </li>
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'Involvement - allows to show ads to people who will interact
                                with your ad: like it, comment, click on links, put "like" to your page.'); ?></p>
                        </li>
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'App settings - shows ads to those who are more likely to
                                install your app.'); ?></p>
                        </li>
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'Watching videos - shows ads to those who are more likely to
                                see your video.'); ?></p>
                        </li>
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'Leads generation - shows ads to people who are more likely
                                to click on ads and fill out an application form on Facebook.'); ?></p>
                        </li>
                    </ul>

                    <div class="target-fb__box">

                        <div class="target-fb__content--small">

                            <h2 class="target-fb-caption--white"><?= Yii::t('lessons', 'Conversion'); ?></h2>
                            <p class="target-fb-text--white"><?= Yii::t('lessons', 'purposes of this group are aimed at getting sales /
                                applications, both from new people and from those who already know your product and
                                brand.'); ?></p>

                        </div>

                        <img src="/modules/admin/cabinet_assets/pictures/svg/drows/cooperation.svg"
                             class="target-fb-img--right"/>

                    </div>

                    <ul class="target-fb-list">
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'Conversions - allows you to show ads to people who are more
                                likely to perform a targeted action: send an application, make a purchase, sign in,
                                etc.'); ?></p>
                        </li>
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'Sales by products catalog - allows you to download a product
                                catalog and show ads depending on a person\'s actions on a site: viewing a product card,
                                adding to a shopping cart, etc.'); ?></p>
                        </li>
                        <li class="target-fb-item">
                            <p class="target-fb-item-text"><?= Yii::t('lessons', 'Visiting points - shows ads to people who can visit your
                                campaign.'); ?></p>
                        </li>
                    </ul>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/head-management.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Write a campaign title. If you click "Split test", you can set up ads
                        testing to find out which one is the most effective.'); ?></p>
                    <span class="lesson-block-num">4</span>

                </div>

                <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-2-<?=$lng;?>.png"
                     class="target-gb-screen"/>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/setting-ad.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Set up your advertising account. You should select country, currency and
                        timezone - ones you need. After that click "Continue".'); ?></p>
                    <span class="lesson-block-num">5</span>

                </div>

                <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-3-<?=$lng;?>.png"
                     class="target-gb-screen"/>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Be sure to choose currency in which you\'ll pay for advertising. After
                    launching of campaign, when it starts being showed to users, you won\'t be able to change it.'); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/setting-ad.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Set up targeting and select an audience to show ads to.'); ?></p>
                    <span class="lesson-block-num">6</span>

                </div>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Basic targeting settings include:'); ?></h2>

                    <ul class="lesson-list">
                        <li class="lesson-item">
                            <img src="/modules/modules/admin/cabinet_assets/pictures/svg/icons/earth-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Geo - allows you to select cities, countries or
                                points on map to show ads.'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/map-mark.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Location - allows you to choose permanent residents
                                of a place, travelers and recent visitors.'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/modules/admin/cabinet_assets/pictures/svg/icons/age-icon.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Age - gives age choice from 13 to 65+ years.'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/gender-icon.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Sex - allows you to choose men, women or both sexes
                                to show ads to.'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/language-icon.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Language - allows to select language which your
                                audience speaks on.'); ?></p>
                        </li>
                    </ul>

                </div>

                <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-4-<?=$lng;?>.png"
                     class="target-gb-screen"/>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Detailed targeting allows you to show ads based on person\'s interests
                    and his behavior on Facebook and beyond it.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'It has 3 categories, each of them includes many subcategories:'); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/demography.svg"
                         class="lesson-block-icon"/>

                    <div class="lesson-block__container">

                        <h3 class="lesson-block-text--bold"><?= Yii::t('lessons', 'Demographic interests:'); ?></h3>
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'education, age mates, life events, marital status and work.'); ?></p>

                    </div>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/interests.svg"
                         class="lesson-block-icon"/>

                    <div class="lesson-block__container">

                        <h3 class="lesson-block-text--bold"><?= Yii::t('lessons', 'Interests:'); ?></h3>
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'business and industry, foods and drinks, shopping and fashion,
                            entertainment, family and relationships, sports and outdoor activities, fitness and healthy
                            lifestyle, hobbies.'); ?></p>

                    </div>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/behavour.svg" class="lesson-block-icon"/>

                    <div class="lesson-block__container">

                        <h3 class="lesson-block-text--bold"><?= Yii::t('lessons', 'Behavior:'); ?></h3>
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'anniversary, online activities, consumer classification,
                            multicultural identity, purchase behavior, mobile device users, travelling, seasonal
                            events, expatriates.'); ?></p>

                    </div>

                </div>

                <div class="target-fb__container--white">

                    <p class="lesson-block-text--border"><?= Yii::t('lessons', 'After choosing targeting you\'ll see audience size found by
                        Facebook.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-5-<?=$lng;?>.png"
                         class="target-fb-screen--right"/>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/setting-ad.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Choose your ad\'s placement'); ?></p>
                    <span class="lesson-block-num">7</span>

                </div>

                <div class="lesson__container">

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'When creating an ad Facebook suggests using auto or manually
                        selected placements (advertising spots).'); ?></p>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'We are interested in the latter. So click on "edit placement".'); ?></p>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'First of all you need to choose where you\'ll show ads:'); ?></p>

                    <div class="lesson__block">

                        <div class="lesson__block--three">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/smartphone.svg"
                                 class="lesson-block-icon--three"/>
                            <p class="lesson-block-text--three--white"><?= Yii::t('lessons', 'Smartphones'); ?></p>

                        </div>

                        <div class="lesson__block--three">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/smartphone.svg"
                                 class="lesson-block-icon--three"/>
                            <p class="lesson-block-text--three--white"><?= Yii::t('lessons', 'PCs'); ?></p>

                        </div>

                        <div class="lesson__block--three">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/smartphone.svg"
                                 class="lesson-block-icon--three"/>
                            <p class="lesson-block-text--three--white"><?= Yii::t('lessons', 'All (smartphones and PCs)'); ?></p>

                        </div>

                    </div>

                </div>

                <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-6-<?=$lng;?>.png"
                     class="target-gb-screen"/>

                <p class="lesson-text"><?= Yii::t('lessons', 'Select an option you need and go to ads placement. So, what types of placement
                    can be selected: '); ?></p>

                <div class="lesson__block">

                    <div class="lesson__block--four">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/fb-logo.svg"
                             class="lesson-block-icon--four"/>
                        <b>Facebook</b>
                        <p class="lesson-block-text--four"><?= Yii::t('lessons', 'ads are shown on Facebook website and in the app'); ?></p>

                    </div>

                    <div class="lesson__block--four">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/instagram-icon.svg"
                             class="lesson-block-icon--four"/>
                        <b>Instagram</b>
                        <p class="lesson-block-text--four"><?= Yii::t('lessons', 'ads are shown in the smartphone app'); ?></p>

                    </div>

                    <div class="lesson__block--four">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/messenger.svg"
                             class="lesson-block-icon--four"/>
                        <b>Messenger</b>
                        <p class="lesson-block-text--four"><?= Yii::t('lessons', 'ads are shown on Facebook, in the app and in the messenger app'); ?></p>

                    </div>

                    <div class="lesson__block--four">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/megaphone.svg"
                             class="lesson-block-icon--four"/>
                        <b>Audience network</b>
                        <p class="lesson-block-text--four"><?= Yii::t('lessons', 'ads are shown on sites and apps of Facebook partners'); ?></p>

                    </div>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'You can also choose devices and their models where your ads will be shown.'); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/calculated.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Choose an advertising campaign budget'); ?></p>
                    <span class="lesson-block-num">8</span>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'You can choose 2 budget options:'); ?></p>
                <b class="lesson-text--bold"><?= Yii::t('lessons', 'Daily budget'); ?></b>
                <p class="lesson-text"><?= Yii::t('lessons', 'is the amount you\'re ready to spend on advertising daily.'); ?></p>

                <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-7-<?=$lng;?>.png"
                     class="target-gb-screen"/>

                <b class="lesson-text--bold"><?= Yii::t('lessons', 'Budget for entire duration'); ?></b>
                <p class="lesson-text"><?= Yii::t('lessons', 'is the amount you\'re ready to spend on advertising for a certain period of time.'); ?></p>

                <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-8-<?=$lng;?>.png"
                     class="target-gb-screen"/>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/progress.svg" class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Choose your ads optimization and price.'); ?></p>
                    <span class="lesson-block-num">9</span>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'You can choose how you\'ll pay for advertising: for showing it or per
                    click. Choose value and specify the price, or leave it in auto mode - in this case Facebook itself
                    will pick up a competitive price.'); ?></p>

                <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-9-<?=$lng;?>.png"
                     class="target-gb-screen"/>

                <p class="lesson-text"><?= Yii::t('lessons', 'You can set up start date and end date of ad. Here you can come up with schedule
                    of showing your ads: days, time, etc.'); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/create-template.svg"
                         class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Create an ad'); ?></p>
                    <span class="lesson-block-num">10</span>

                </div>

                <div class="lesson__container">

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">1</span>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Write ads title and select a page from which you\'ll
                            launch it'); ?></p>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-10-<?=$lng;?>.png"
                         class="target-gb-screen"/>

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">2</span>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Select an ads format'); ?></p>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-11-<?=$lng;?>.png"
                         class="target-gb-screen"/>

                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'These are the most popular formats. If you set different
                        purposes for an advertising campaign, different formats will be offered at the beginning of
                        its creation.'); ?></p>

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">3</span>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Create an ad
                            <br/>An ad consists from 7 elements:'); ?></p>

                    </div>

                    <ul class="lesson-list">
                        <li class="lesson-container-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Picture in size 1200x628 pixels'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Links'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Title'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Text'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Button'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Description of a link in a news feed'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'Link for showing an ad'); ?></p>
                        </li>
                    </ul>

                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'Facebook collaborates with Shutterstock, so you have
                        high-quality paid images which you can use for free. To use them, click on "free stock".'); ?></p>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'An image must comply with Facebook advertising rules. You can find
                        them on official website.'); ?></p>

                    <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-12-<?=$lng;?>.png"
                         class="target-gb-screen"/>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'Write text for title and description. It\' a very important element
                        of your ad. You should work on text and given it a lot of attention.'); ?></p>

                    <img src="/modules/admin/cabinet_assets/pictures/img/target-ad-fb-screen-13-<?=$lng;?>.png" class="target-gb-screen
                        target-gb-screen--small"/>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'On the right in \"ads preview\" window you can see how your ad will
                        look like on different devices.'); ?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/wallet.svg" class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Choose a payment method'); ?></p>
                    <span class="lesson-block-num">11</span>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'If this is your first advertising campaign, then Facebook will ask you
                    to choose how you\'ll pay for advertising.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'Choose payment method, enter required data and click "Next" button. After
                    launching an ads campaign it will be moderated from 15 minutes to 4 hours. But usually it goes
                    quickly.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'Congratulations! You just launched your first targeted ad on Facebook!'); ?></p>

                <footer class="lesson-footer">

                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'In a private Facebook promotion course (you need to promote status
                        to have access) you\'ll also learn about secret ways to make your targeted Facebook ads cost
                        cheaper and be more effective.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footer-targetAd-fb-<?=$lng;?>.svg"
                         class="lesson-footer-img"/>

                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Promotion on YouTube. Running your channel'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Promotion on YouTube. Running your channel'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/panda-vloger.svg"
                         class="lesson-header-img lesson-header-img--320" alt=""/>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'I doubt that there exist a person in the world who has never seen at least one
                    video on YouTube in his entire life. But how to use this service to promote your project, not just
                    for entertainment?'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'In this DVC lesson you\'ll learn what you need to think about if you
                    decide to create a channel for your business.'); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/youtube-logo.svg"
                         class="lesson-block-icon"/>

                    <div class="lesson-block__container">

                        <h2 class="lesson-block-text"><?= Yii::t('lessons', 'Why I need a YouTube channel?'); ?></h2>
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'YouTube is the same social network as others, so you can actively use
                            it for promotion. But it has a key difference - video content doesn\'t loss its value over
                            time, but only increases it.'); ?></p>

                    </div>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'If an Instagram photo lives several hours, a YouTube video won\'t go
                    anywhere. Thanks to keywords you can find it in a month and in a year.'); ?></p>

                <div class="lesson__container">

                    <h1 class="lesson-caption--white"><?= Yii::t('lessons', 'Choosing a concept'); ?></h1>
                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'Before creating a channel, answer a few important questions.
                        Videos format, their content and promotion tools will depend on a concept. You can always
                        correct a concept during channel development, but at the beginning it\'s important to understand
                        a direction not to waste your time on all ideas that come to mind. And there will be a lot,
                        trust me!'); ?></p>

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">1</span>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'What I need a channel for?'); ?></p>

                    </div>

                    <ul class="lesson-list">
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'increasing site traffic'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'increasing sales'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'keeping regular customers'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'building new customers trust'); ?></p>
                        </li>
                    </ul>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'We didn\'t list all goals, you can have your own which suits your
                        interests. Choose one main goal and the rest can be optional. Measure channel\'s efficiency
                        only according to the main goal.'); ?></p>

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">2</span>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Who a channel will be for?'); ?></p>

                    </div>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'Describe all characteristics of your potential customers as
                        detailed as possible, here are some of them (of course, you can add what you need):'); ?></p>

                    <ul class="lesson-list">
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'sex and age, marital status, education'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'geolocation'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'work and income'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'temperament, mentality'); ?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg"
                                 class="lesson-item-icon"/>
                            <p class="lesson-item-text--white"><?= Yii::t('lessons', 'life style'); ?></p>
                        </li>
                    </ul>

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">3</span>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'What a channel will be about?'); ?></p>

                    </div>

                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'Choose main themes of your channel. If this is a channel of
                        your brand or business, it doesn\'t mean all videos should be about your products or offers.
                        You\'ve described your target audience and now you understand their interests, desires and
                        problems. Focus on them when choosing themes for videos.'); ?></p>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'Have you chosen a concept? Now let\'s move to creating a channel, it\'ll take
                    you a few minutes!'); ?></p>

                <h1 class="lesson-caption--black"><?= Yii::t('lessons', 'Creating a channel'); ?></h1>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'You need a Gmail mailbox to create a business channel on YouTube. If
                    you don\'t have one, sign up. Enter your login and password in your account and click on
                    "Google Apps" icon in the upper right corner. Select YouTube in the apps list.'); ?></p>

                <img src="/modules/admin/cabinet_assets/pictures/img/youtube-screenshot-1.png"
                     class="youtube-screenshot"/>

                <p class="lesson-text"><?= Yii::t('lessons', 'You have a little thing to do: set up an account. Click on your photo in the
                    top right corner and then on gear-wheel. Now you\'re in your YouTube account settings.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'When creating a channel choose a business one. It has advanced options
                    for optimization and promotion, which is exactly what you need. You\'ll be able to upload videos
                    on a chosen topic faster and promote not only separate videos, but also playlists and a whole
                    channel.'); ?></p>

                <div class="lesson__container">

                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'Not to violate YouTube rules, create an account under your
                        real name. You can add up to 50 business channels to it. You can, but it\'s not necessary
                        because if one of the channels violates the rules all of them will be banned. If you need
                        several business channels, it\'s better to register them from different accounts.'); ?></p>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'So, create a new channel within your personal account: click on
                        "Create channel". YouTube will ask you to create a Google+ page connected with your business.
                        Select it from the list if you created it earlier, or create it now if you don\'t have it.
                        Enter a title in a field. Done!'); ?></p>

                </div>

                <h1 class="lesson-caption--black"><?= Yii::t('lessons', 'Designing a channel'); ?></h1>
                <p class="lesson-text"><?= Yii::t('lessons', 'Now you just need to upload a cover, a photo and fill in a description field.'); ?></p>

                <div class="lesson__block">

                    <div class="lesson__block--three">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/profile-avatar.svg"
                             class="lesson-block-icon--three"/>
                        <p class="lesson-block-text--three"><?= Yii::t('lessons', 'Upload a photo sized 800 × 800 pixels for a userpic.'); ?></p>

                    </div>

                    <div class="lesson__block--three">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/backgroung-icon.svg"
                             class="lesson-block-icon--three"/>
                        <p class="lesson-block-text--three"><?= Yii::t('lessons', 'Cover or background image is displayed differently on PCs
                            and mobile devices. To make the channel look equally attractive on any screens, upload a
                            picture of 2560 × 1440 pixels.'); ?></p>

                    </div>

                    <div class="lesson__block--three">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/description-chanel-icon.svg"
                             class="lesson-block-icon--three"/>
                        <p class="lesson-block-text--three"><?= Yii::t('lessons', 'Write channel\'s description: it\'s limited to 1000
                            characters.'); ?></p>

                    </div>

                </div>

                <div class="lesson__container">

                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'By default section "About the channel" shows only first 250
                        characters, others will be visible only when clicking on "Show more". Brevity is the soul of
                        wit! So try to write the main idea of a video in several sentences. Add links to the site and
                        your contacts. For more information on working with a channel see'); ?>
                        <a href="https://support.google.com/youtube/topic/16549?hl=en&ref_topic=4355169"
                           class="advanced-icon-link"><?= Yii::t('lessons', 'Show more'); ?></a>
                    </p>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'It\'s important to upload videos to your channel regularly. This is due to
                    several factors:'); ?></p>

                <div class="lesson__block">

                    <span class="lesson-block-num">1</span>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'It\'s well-known that YouTube likes when you regularly
                        upload videos to your channel. I other words, it notices that some actions are taking place,
                        a channel is being watched over and new video are being uploaded.'); ?></p>

                </div>

                <div class="lesson__block">

                    <span class="lesson-block-num">2</span>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Second factor is related to your subscribers. If you
                        upload videos regularly it means subscribers begin to visit your channel regularly. It
                        becomes systematic and allows you to increase your videos views. It\'s very important to
                        tell your subscribers what days of the week you\'ll be uploading your videos. As practice
                        shows optimal amount of uploaded videos are from one to three a week.'); ?></p>

                </div>

                <footer class="lesson-footer">

                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'In the next DVC lessons on YouTube promotion, we\'ll talk about
                        how to manage a channel to quickly get in top-list. Good luck!'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footer-promotion-YT-<?=$lng;?>.svg"
                         class="lesson-footer-img"/>
                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'How to promote your channel on YouTube in the top 10'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'How to promote your channel on YouTube in the top 10'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/top-10.svg" style="padding: 10px;
                            box-sizing: border-box;" class="lesson-header-img lesson-header-img--320" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'In the previous DVC lesson on basics of working with Youtube, we
                    described a process of creating an account and its registration in detail. It\'s time to talk
                    about how to make your channel popular and quickly get subscribers.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'First of all, it\'s necessary to understand principles of videos popularization
                    on Youtube.'); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/rogue.svg" class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Fraud won\'t work here! One of channel popularization peculiarities is the
                        fact it\'s not possible to promote a product, service or simply a video which originally
                        contains a deception. Even worser is a situation when a channel is obviously trying to cash
                        in on visitors without giving any useful information in return. The fact is popularity largely
                        depends on visitors reaction, and if it\'s negative, even comments disabling won\'t save a
                        channel. So remember, if you want to use a channel with ulterior motives, you anyway need to
                        give something to visitors in return.'); ?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/stars-5.svg" class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'A useful and interesting channel promotes by itself. That\'s why even if
                        you poorly master channel promotion methods on Youtube, you can simply make high-quality and
                        interesting videos which will really become popular in the Internet eventually! You work for
                        content, and content works for you.'); ?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/no-money.svg" class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'You can\'t solve promotion issue with money. With money you can buy links,
                        content, make beautiful photos, write fake comments with positive reviews, etc. But it doesn\'t
                        work  with videos. If a product is of poor quality and video is completely uninteresting, even
                        closing comments won\'t save the situation since a user still can show his complaint with
                        dislike or report to a Youtube support. It can lead to not only popularity and subscribers
                        loss, but even to a complete channel disabling in the video service.'); ?></p>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'So what you can do to make your channel popular and to subscribers come
                    and stay?'); ?></p>

                <div class="lesson__container">

                    <h1 class="lesson-caption--white"><?= Yii::t('lessons', 'We give you 10 effective tips:'); ?></h1>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/contract.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'Title, description, tags'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'Always come up with a title, write a description for it, put tags and specify a
                                category correctly. Description and title should be unique and intriguing so that a
                                user will have an interest even before watching video. Description with keywords
                                affect whether users will see your video when using search or not and in how low it\'ll
                                be in search results.'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">1</span>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/diamond-blue.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'Create a unique trademark'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'Think about what your channel\'s main page will look like, what will be the design
                                - everything should be different from competitors. It\'s also important to come up with
                                recognizable and easily remembered logo. Keep design stylistics of a channel,
                                playlists and videos themselves.'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">2</span>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/adv-pink.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'Free channel advertising'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'Don\'t hesitate to promote your channel in every possible way. For example, mention
                                it in social networks, on forums, etc.
                                Ask friends to do the same thing, and be sure to post most interesting videos on your
                                page in  social media. Such advertising won\'t cost you a penny, but it\'ll help to
                                promote a channel.'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">3</span>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/ticket.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'Contextual advertising'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'This way of promoting your Youtube channel is paid, but not so expensive compared
                                to how a channel can help you to expand your business. You can launch contextual
                                advertising, for example, in the same old Google (Google Adwords).'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">4</span>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/sprout.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'The more the better'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'If you\'re going to upload one video per month, you\'ll never be able to promote
                                your Youtube channel. The more interesting materials you upload, the faster you get
                                subscribers. So it\'s worth to think about if you can fill the site with content even
                                before you start a channel. Think two steps forward, prepare ideas for realization.'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">5</span>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/pray.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'Ask correctly and people will listen to you'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'Communicate with your subscribers openly. It\'s better to directly ask for likes or
                                comments, than to lure them through deceit or allusions. By that you\'ll show you\'re an
                                ordinary and open person, and people always like it.'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">6</span>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/starring.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'Earn popularity on others'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'Look for top Youtube channels and create some video on the topic. For example,
                                the one where you criticize video\'s author (don\'t go too far with critics or the author
                                may report bullying to administration). Or, perhaps, you can answer questions which
                                author brought up but didn\'t answer up to the end in a top video.'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">7</span>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/bug.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'Make viral content'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'If there is at least one viral video on your channel (something that has millions
                                of views in a couple of days and is actively discussed), consider you have success for
                                the taking. It can be video of any format, the main thing it should be catchy for
                                people. But creating a viral material isn\'t an easy task, you may have to ask a pro
                                for help.'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">8</span>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/frineds-vlogger.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'Be friends with other bloggers'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'Yes, making friends with Youtube stars won\'t be easy, but if you succeed, there are
                                chances that author of a top channel will mention you in one of his videos. And if he
                                does, his subscribers will rush to your channel to see who and what you are. Now the
                                main thing is not to disappoint them.'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">9</span>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/community.svg"
                             class="lesson-block-icon"/>

                        <div class="lesson-block__container">

                            <h3 class="lesson-block-text--white--bold"><?= Yii::t('lessons', 'Listen to subscribers'); ?></h3>
                            <p class="lesson-block-text--white--wide"><?= Yii::t('lessons', 'Be sure to read comments under your videos, respond to them and thank for
                                compliments. Commentators adore when author is open for communication. And listen to
                                your audience\'s opinion. For example, if almost all of your subscribers ask to upload
                                more how to make desserts and also videos on this topic receive more likes, then work
                                in this direction.'); ?>
                            </p>

                        </div>

                        <span class="lesson-block-num--white">10</span>

                    </div>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'Having set a goal to get into the top, you should know that to promote a video
                    to Youtube top you need to take into account:'); ?></p>

                <div class="lesson__block">

                    <span class="lesson-block-num">1</span>
                    <p class="lesson-block-text"><?= Yii::t('lessons', '<b>Backlinks</b>
                        <br/>You can\'t ignore huge amount of external links of a single video or a whole video channel.
                        Presence of high-quality backlinks is an another argument in favor of successful Youtube
                        promotion.'); ?></p>

                </div>

                <div class="lesson__block">

                    <span class="lesson-block-num">2</span>
                    <p class="lesson-block-text"><?= Yii::t('lessons', '<b>Number of views</b>
                        <br/>In other words, the more users watched the video, the higher it will be in a video hosting
                        search results. Foreign experts advise to increase views of a newly added video mainly through
                        social networks.'); ?></p>

                </div>

                <div class="lesson__block">

                    <span class="lesson-block-num">3</span>
                    <p class="lesson-block-text"><?= Yii::t('lessons', '<b>Duration of viewing</b>
                        <br/>Another important indicator of video content quality on Youtube is the length of its
                        viewing. Video hosting algorithm works like this: the longer the user stays on the page with
                        a particular video, the more interesting and better a video is. Therefore, it needs to be
                        moved up in search results or even placed on the main page of video service.'); ?></p>

                </div>

                <div class="lesson__block">

                    <span class="lesson-block-num">4</span>
                    <p class="lesson-block-text"><?= Yii::t('lessons', '<b>Involvement of viewer</b>
                        <br/>Numerous comments and likes on a page with video,  frequent usage of social buttons - all
                        this helps to promote video to the top-list.'); ?></p>
                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'When creating content you should always be aware of the latest events
                    and create really unique videos. An author who follows latest news and well-timed selects video
                    topics, who listens to and respects his audience will certainly succeed in promoting his channel.
                    <br/>Good luck!'); ?>
                </p>

            </div>

            <h1 class="school-accordion-caption"><?=Yii::t('lessons', 'Use of messengers as a instant sales channel');?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption">
                        <?=Yii::t('lessons', 'Use of messengers as a instant sales channel');?>
                    </h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/arrive-message.svg" style="padding: 10px;
                            box-sizing: border-box;" class="lesson-header-img" alt="" />

                </div>

                <p class="lesson-text--border">
                    <?=Yii::t('lessons', 'In previous DVC lessons, we described how to promote product using sites like Facebook, Instagram and Line. This lesson is dedicated to messengers, one of the most effective channels for promoting and positioning DiaVita products.');?></p>

                <h2 class="lesson-caption--black">
                    <?=Yii::t('lessons', 'What are their advantages?');?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/fb-logo.svg" class="lesson-block-icon" />
                    <p class="lesson-block-text"><?=Yii::t('lessons', 'You know customer’s mobile number. This is a more reliable and long-term contact than email, because the latter can be easily changed.');?></p>
                    <span class="lesson-block-num">1</span>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/pin.svg" class="lesson-block-icon" />
                    <p class="lesson-block-text"><?=Yii::t('lessons', 'Instant push notifications. You can be sure a notification will reach a client and will be read.');?></p>
                    <span class="lesson-block-num">2</span>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/lock.svg" class="lesson-block-icon" />
                    <p class="lesson-block-text"><?=Yii::t('lessons', 'Privacy and personality - unlike communicating with clients in social networks or public web-sites, messengers provide a sufficient level of privacy for personal communication.');?></p>
                    <span class="lesson-block-num">3</span>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/description-chanel-icon.svg" class="lesson-block-icon" />
                    <p class="lesson-block-text"><?=Yii::t('lessons', 'Various content. Messengers allow you to share not only text, but also photos, videos and location. Also you can make free calls via them.');?></p>
                    <span class="lesson-block-num">4</span>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/support.svg" class="lesson-block-icon" />
                    <p class="lesson-block-text"><?=Yii::t('lessons', '24/7 support. In messengers you can communicate both in real time and with delayed messages. Communication in messenger doesn’t imply an immediate response, but you can always stay in touch.');?></p>
                    <span class="lesson-block-num">5</span>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/messenger.svg" class="lesson-block-icon" />
                    <p class="lesson-block-text"><?=Yii::t('lessons', 'It\'s easy to start using messengers as well as customize them. Cost of sending information in messengers is less than via SMS and e-mail.');?></p>
                    <span class="lesson-block-num">6</span>

                </div>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'What messenger to choose for a project?');?></h2>
                    <p class="lesson-text--white"><?=Yii::t('lessons', 'Before choosing messenger which is best for you, compare them by following criteria:');?></p>
                    <ul class="lesson-container-list">
                        <li class="lesson-container-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-container-item-icon" />
                            <p class="lesson-container-item-text"><?=Yii::t('lessons', 'popularity among your target audience');?></p>
                        </li>
                        <li class="lesson-container-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-container-item-icon" />
                            <p class="lesson-container-item-text"><?=Yii::t('lessons', 'messenger functionality');?></p>
                        </li>
                        <li class="lesson-container-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-container-item-icon" />
                            <p class="lesson-container-item-text"><?=Yii::t('lessons', 'business project peculiarities');?></p>
                        </li>
                        <li class="lesson-container-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-container-item-icon" />
                            <p class="lesson-container-item-text"><?=Yii::t('lessons', 'possibility and convenience of using bots');?></p>
                        </li>
                    </ul>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/line-logo.svg" class="lesson-block-icon" />

                    <div class="lesson-block__container">

                        <p class="lesson-block-text--bold"><?=Yii::t('lessons', 'Line Messenger');?></p>
                        <p class="lesson-block-text"><?=Yii::t('lessons', 'In the lesson on Line we mentioned 4 essential stages for successful sale of goods in this messenger. We remind you these were: establishing a contact, identifying needs, product  presentation and working with with arguments against.');?></p>

                    </div>

                </div>

                <p class="lesson-text"><?=Yii::t('lessons', 'This messenger is the most popular in Thailand, here you can add friends, have a group chat and a personal page.');?></p>
                <p class="lesson-text"><?=Yii::t('lessons', 'Use Line if:');?></p>

                <ul class="lesson-list">
                    <li class="lesson-item">
                        <p class="lesson-item-text text-linechat"><?=Yii::t('lessons', 'Your audience is mostly from Thailand;');?></p>
                    </li>
                    <li class="lesson-item">
                        <p class="lesson-item-text text-linechat"><?=Yii::t('lessons', 'You need a system to communicate with employees;');?></p>
                    </li>
                    <li class="lesson-item">
                        <p class="lesson-item-text text-linechat"><?=Yii::t('lessons', 'You need a secure channel for communication (it has an option to create secret chats).');?></p>
                    </li>
                </ul>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/fbm-logo.svg" class="lesson-block-icon" />

                    <div class="lesson-block__container">

                        <p class="lesson-block-text--bold"><?=Yii::t('lessons', 'Facebook Messenger');?></p>
                        <p class="lesson-block-text"><?=Yii::t('lessons', 'It\' the second most popular messenger in the world and in Thailand. It\'s audience came close to a billion people.');?></p>

                    </div>

                </div>

                <p class="lesson-text"><?=Yii::t('lessons', 'Choose it if:');?></p>

                <ul class="lesson-list">
                    <li class="lesson-item">
                        <p class="lesson-item-text text-fb"><?=Yii::t('lessons', 'You or your company actively use Facebook;');?></p>
                    </li>
                    <li class="lesson-item">
                        <p class="lesson-item-text text-fb"><?=Yii::t('lessons', 'You need an alternative to contact form on the site. Messenger allows users to send messages directly to the page of your brand in Facebook;');?></p>
                    </li>
                    <li class="lesson-item">
                        <p class="lesson-item-text text-fb"><?=Yii::t('lessons', 'You need a convenient tool to communicate with customers and colleagues.');?></p>
                    </li>
                </ul>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/wa-logo.svg" class="lesson-block-icon" />

                    <div class="lesson-block__container">

                        <p class="lesson-block-text--bold"><?=Yii::t('lessons', 'WhatsApp Messenger');?></p>
                        <p class="lesson-block-text"><?=Yii::t('lessons', 'World\'s most popular messenger. In WhatsApp you can create group chats, make video calls and share files. With WhatsApp on your PC you can synchronize chats. WhatsApp is useful if:');?></p>

                    </div>

                </div>

                <ul class="lesson-list">
                    <li class="lesson-item">
                        <p class="lesson-item-text text-wa"><?=Yii::t('lessons', 'You need a channel to communicate with colleagues and clients from other countries;');?></p>
                    </li>
                    <li class="lesson-item">
                        <p class="lesson-item-text text-wa"><?=Yii::t('lessons', 'You need direct communication with customers;');?></p>
                    </li>
                    <li class="lesson-item">
                        <p class="lesson-item-text text-wa"><?=Yii::t('lessons', 'You want WhatsApp to be a place for communication between employees in group chats.');?></p>
                    </li>
                </ul>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/skype-logo.svg" class="lesson-block-icon" />

                    <div class="lesson-block__container">

                        <p class="lesson-block-text--bold">Skype</p>
                        <p class="lesson-block-text"><?=Yii::t('lessons', 'It\'s a very convenient tool both for personal communication and communication with your  partners and customers. Probably, almost everyone has account in this program. In Skype you can call each other: for free within the program or on mobile numbers anywhere in the world, but for money. Options of using Skype:');?></p>

                    </div>

                </div>

                <ul class="lesson-list">
                    <li class="lesson-item">
                        <p class="lesson-item-text text-skype"><?=Yii::t('lessons', 'Ideal online support service for website visitors;');?></p>
                    </li>
                    <li class="lesson-item">
                        <p class="lesson-item-text text-skype"><?=Yii::t('lessons', 'As a tool for communication with customers, partners and employees;');?></p>
                    </li>
                    <li class="lesson-item">
                        <p class="lesson-item-text text-skype"><?=Yii::t('lessons', 'It\'s possible to organize video-conferences. Thanks to group video-communication you can hold a meeting and a training for DiaVita partners.');?></p>
                    </li>
                </ul>

                <p class="lesson-text"><?=Yii::t('lessons', 'Next, we\'ll talk about three following questions:');?></p>

                <div class="lesson__container">

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">1</span>
                        <p class="lesson-block-text--centre"><?=Yii::t('lessons', 'How to quickly build a base using these communication channels?');?></p>

                    </div>

                    <div class="lesson__container--border--left">

                        <p class="lesson-container-text--border"><?=Yii::t('lessons', 'Install a widget or subscribe buttons in messengers on a site. Write a text offering to subscribe:');?></p>
                        <p class="lesson-container-text--border--small">
                            <b><?=Yii::t('lessons', 'Offer benefits.');?></b>
                            <?=Yii::t('lessons', 'Users will subscribe if you tell them what they’ll get thanks to it: useful news (Ex.: New tastes in DiaVita® healthy food collection), promos (Ex.: Buy any 2 cocktails by December, 15 and get DiaVita® bag as a gift), discounts (Ex.: It’s New Year soon, so we’ll give you a 15% discount until January, 7), articles (Ex: 4 myths about MLM, a few heard about), etc. <br/>When a customer subscribes, don’t make him wait: send him a useful message immediately.');?>
                        </p>
                        <p class="lesson-container-text--border--small">
                            <b><?=Yii::t('lessons', 'Warn about your intentions.');?></b>
                            <?=Yii::t('lessons', 'Users will be pleased if you honestly tell them what and how often you\'re going to send. If they won\'t have this information, fear of getting too many messages can push them off.');?>
                        </p>

                        <p class="lesson-container-text--border"><?=Yii::t('lessons', 'Inform customers. They\'ll be happy to receive messages from you in a convenient channel if you inform them about this possibility. If earlier you sent information via email, make a mailout and specify links to all messengers through which you can send messages.');?></p>
                        <p class="lesson-container-text--border"><?=Yii::t('lessons', 'Do remarketing. Start Facebook advertising on email and phone base. In advertising offer to start communicating via messenger or get a discount for subscribing.');?></p>

                        <p class="lesson-container-text--border"><?=Yii::t('lessons', 'Use contacts of those who have already written. If you\'ve already started to communicate with clients in messengers and social networks, use collected contacts to send notifications. Remember about limitations:');?></p>
                        <p class="lesson-container-text--border--small"><?=Yii::t('lessons', 'If a client asked you a question on Facebook, you can reply to him 24 hours after his last message only once. If you have a lot of messages in Facebook try to immediately convert them into subscribers. Other messengers don\'t have time limits for client\'s last message.');?></p>
                        <p class="lesson-container-text--border--small"><?=Yii::t('lessons', 'WhatsApp doesn\'t have official API, so don\'t use this messenger for notifications. If you\'ll use unofficial API, there will be many malfunctions.');?></p>

                    </div>

                </div>

                <div class="lesson__block">

                    <span class="lesson-block-num">2</span>
                    <p class="lesson-block-text--centre"><?=Yii::t('lessons', 'What elements to use to increase users amount? What exactly to send?');?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/writing.svg" class="lesson-block-icon--top" />

                    <div class="lesson-block__container">

                        <h3 class="lesson-block-container-caption"><?=Yii::t('lessons', 'Text');?></h3>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Before you start writing text, think what you want to tell client and why it\'ll be useful for him.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Refer to a customer by name. To do so use the <name> tag in message creating interface.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Don\'t write a long text, it\'ll be inconvenient to read from phone. Try to fit your idea in 2-3 sentences.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Don\'t type all text with Caps Lock, such text is harder to read and it has an unpleasant impression. Use Caps Lock to emphasize something.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Unlike SMS messengers are a two-way channel, and a client can answer you. Tell them about it and get feedback.');?></p>

                    </div>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/map-path.svg" class="lesson-block-icon--top" />

                    <div class="lesson-block__container">

                        <h3 class="lesson-block-container-caption"><?=Yii::t('lessons', 'Image or map');?></h3>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Use your brand\'s colors for an image, but don\'t make it too bright as it will look hauntingly.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Show what you want to say: if a picture won\'t be interesting for a user, it\'s unlikely that he will read a text. Let a special offer, new product or service effect be seen on it.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Don\'t add small inscriptions on image, they won\'t be visible anyway.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Fight with desire to send a picture with photos of all products: when viewed from phone it will be small and illegible.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'If you want to show location use a link to map, not a picture.');?></p>

                    </div>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/hand-button.svg" class="lesson-block-icon--top" />

                    <div class="lesson-block__container">

                        <h3 class="lesson-block-container-caption"><?=Yii::t('lessons', 'Button');?></h3>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Button tells user what you expect from him. It\'s a synonym to target action. Write on it what you offer: \"Read article\", \"Checkout\", \"View all products\", etc.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'If your task is to tell short news to a client, put it all in a notice text. Don\'t send texts like \"Your order status has been changed\" with \"View status\" button which leads to the site.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Insert a UTM code in link so that clickthroughs will be displayed in analytics system.');?></p>
                        <p class="lesson-block-text--wide"><?=Yii::t('lessons', 'Send a client to a landing page, don\'t force him to search a necessary web-site section by himself.');?></p>

                    </div>

                </div>

                <div class="lesson__block">

                    <h3 class="lesson-block-container-caption"><?=Yii::t('lessons', 'Other elements');?></h3>
                    <p class="lesson-block-text"><?=Yii::t('lessons', 'You can attach file, audio or video to a message. Be careful with these formats: they take time to load. If you want to send a PDF presentation or a video with updates announcement, it\'s better to upload them on a disc or in a group and send a link.');?></p>

                </div>

                <div class="lesson__container">

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">3</span>
                        <p class="lesson-block-text--centre"><?=Yii::t('lessons', 'In which cases to use messengers notifications?');?></p>

                    </div>

                    <p class="lesson-text--white"><?=Yii::t('lessons', 'Several cases when notifications are used in messengers:');?></p>

                    <ul class="lesson-list">
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Promos, discounts, promo codes');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'News and system updates');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Events invitations');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Carrying out competitions');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Sending tickets, data to log in');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Notifications about order status (requires CRM integration)');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'System notifications, for example, about account funds absence');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Offer to renew subscription');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Reminders about forgotten carts');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Polls with multiple answers');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-white.svg" class="lesson-item-icon">
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Requests to evaluate quality of goods, services or support');?></p>
                        </li>
                    </ul>

                </div>

                <footer class="lesson-footer">

                    <p class="lesson-footer-text"><?=Yii::t('lessons', 'If used properly, all messengers listed above will not only be your assistants in optimizing work, but also channels of direct sales and attracting new partners to DiaVita Club. Don\'t forget to leave your contacts in websites, social networks pages and on business cards in messengers.');?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footer-messenger-<?=$lng;?>.svg" class="lesson-footer-img" />

                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Private course of promotion in Instagram'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption">
                        <?=Yii::t('lessons', 'Private course of promotion in Instagram');?>
                    </h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/insta-panda.svg" class="lesson-header-img" alt="" />

                </div>

                <p class="lesson-text--border"><?=Yii::t('lessons', 'From two previous lessons about Instagram, you\'ve already got acquainted with basics of promoting this resource. In today\'s lesson we\'ll give detailed practical advices on how to promote it, learn how to set up advertising and give main recommendations about designing an account. So, let\'s go.');?></p>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Photo-posts');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'If a watermark doesn\'t look good at the photos or you don\'t have time to edit an image, just show the "product\'s face".');?></p>

                        <img src="/modules/admin/cabinet_assets/pictures/img/priv-inst-screen-1.png" class="lesson-screenshot" />
                        <p class="lesson-text"><?=Yii::t('lessons', 'Be vigilant with the inscriptions, their abundance can cause fatigue and visual saturation.');?></p>

                        <img src="/modules/admin/cabinet_assets/pictures/img/priv-inst-screen-2.png" class="lesson-screenshot" />
                        <p class="lesson-text"><?=Yii::t('lessons', 'Remember about location: subscribers actively mark their location on map, and many of them search for right information exactly according to geolocation.');?></p>

                        <div class="lesson__container">

                            <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'Instagram videos');?></h2>
                            <p class="lesson-text--white"><?=Yii::t('lessons', 'Posting videos brought Instagram incredible success. Earlier videos were limited to 15 seconds, today the time is 1 minute. It\'s animation that\'ll help you to sell, make virus content and attract new partners:');?></p>

                            <!-- video from Yandex -->
                            <div class="lesson-video-wrapper">

                                <object class="lesson-video">
                                    <param name="src" value="https://yastatic.net/e78d9905-a1d4-489b-8527-a3b8c4c2df57"/>
                                    <param name="allowFullScreen" value="true"/>
                                    <param name="scale" value="noscale"/>
                                    <embed src="https://yastatic.net/e78d9905-a1d4-489b-8527-a3b8c4c2df57"
                                           type="application/x-shockwave-flash"
                                           allowFullScreen="true" scale="noscale">
                                    </embed>
                                </object>

                            </div>

                            <p class="lesson-text--border--white"><?=Yii::t('lessons', 'Give up on boring videos, especially if they have dull background music and don\'t have a proper light.');?></p>

                            <!-- video from Instagram -->
                            <div class="lesson-video-wrapper">

                                <object class="lesson-video">
                                    <param name="src" value="https://scontent-frt3-2.cdninstagram.com/vp/a36b291f985713f657e41b40f315cc5c/5A28FAD3/t50.2886-16/24325637_189554544925975_8203937493037350912_n.mp4"/>
                                    <param name="allowFullScreen" value="true"/>
                                    <param name="scale" value="noscale"/>
                                    <embed src="https://scontent-frt3-2.cdninstagram.com/vp/a36b291f985713f657e41b40f315cc5c/5A28FAD3/t50.2886-16/24325637_189554544925975_8203937493037350912_n.mp4"
                                           type="application/x-shockwave-flash"
                                           allowFullScreen="true" scale="noscale">
                                    </embed>
                                </object>

                            </div>

                        </div>

                        <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Working with hashtags.');?></h2>

                        <div class="lesson__block">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/insta-description.svg" class="lesson-block-icon" />
                            <p class="lesson-block-text"><?=Yii::t('lessons', 'Topic of a post and a hashtag should match one another.');?></p>

                        </div>

                        <div class="lesson__block">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/sharp.svg" class="lesson-block-icon" />
                            <p class="lesson-block-text"><?=Yii::t('lessons', 'Make 5 and more hashtags per post, as the more hashtags, the wider the reach. However, 30 hashtag to one post will be placed on a screen so poorly that they can distract a subscriber from the main thing - the picture itself. Don\'t make posts look like spam.');?></p>

                        </div>

                        <div class="lesson__block">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/falling.svg" class="lesson-block-icon" />
                            <p class="lesson-block-text"><?=Yii::t('lessons', 'Remember that by the most popular hashtags in a search you quickly go down.');?></p>

                        </div>

                        <div class="lesson__block">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/diamond-blue.svg" class="lesson-block-icon" />
                            <p class="lesson-block-text"><?=Yii::t('lessons', 'Come up with your personal hashtag, but don\'t forget to experiment with new ones.');?></p>

                        </div>

                        <img src="/modules/admin/cabinet_assets/pictures/img/priv-inst-screen-3.png" class="lesson-screenshot" />
                        <p class="lesson-text"><?=Yii::t('lessons', 'To search for hashtags and to analyze posts and subscribers, use Websta. Here you can look for the 100 most popular hashtags and the number of user posts with them.');?></p>

                        <div class="lesson__container">

                            <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'Peculiarities of auto-subscription use');?></h2>
                            <p class="lesson-text--white"><?=Yii::t('lessons', 'Auto-subscription is an automation of actions like following, unfollowing, commenting and liking.');?></p>

                            <div class="lesson__block">

                                <span class="lesson-block-num--white">1</span>

                                <div class="lesson-block__container">

                                    <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'What is mass-following?');?></p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'It\'s a tool allowing you to automatically subscribe to Instagram users. You choose criteria for their picking.');?></p>

                                </div>

                            </div>

                            <div class="lesson__block">

                                <span class="lesson-block-num--white">2</span>

                                <div class="lesson-block__container">

                                    <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Why do I need unfollowing?');?></p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'If you subscribed to a user, but he wasn\'t interested in you, then such tool will allow you to easily unfollow those who didn\'t become your subscribers.');?></p>

                                </div>

                            </div>

                            <div class="lesson__block">

                                <span class="lesson-block-num--white">3</span>

                                <div class="lesson-block__container">

                                    <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Likes and comments');?></p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'A great way to get attention is to like users posts and comment them.');?></p>

                                </div>

                            </div>

                            <p class="lesson-text--border--white"><?=Yii::t('lessons', 'When using such services, remember that Instagram has certain restrictions on such activity. Don\'t exceed limits, if you don\'t want to be banned:');?></p>

                            <div class="lesson__block">

                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/hourglass.svg" class="lesson-block-icon" />
                                <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Place a few photos and wait 14 days before setting up auto-subscription. The same goes to auto-posting.');?></p>

                            </div>

                            <div class="lesson__block">

                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/limit.svg" class="lesson-block-icon" />
                                <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Total limit for a new account on the first day is 500 at the most.');?></p>

                            </div>

                            <div class="lesson__block">

                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/unfollow.svg" class="lesson-block-icon" />
                                <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Unfollowing: not more than 1000 a day.');?></p>

                            </div>

                            <div class="lesson__block">

                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/new-members.svg" class="lesson-block-icon" />
                                <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Following: 1 subscription in 30-40 seconds, no more than 200 per hour and 1000 per day.');?></p>

                            </div>

                            <div class="lesson__block">

                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/comments.svg" class="lesson-block-icon" />
                                <p class="lesson-block-text--white"><?=Yii::t('lessons', 'About setting up comments: no more than 10-12 per hour, delay is 35-400 seconds.');?></p>

                            </div>

                            <div class="lesson__block">

                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/like-heart.svg" class="lesson-block-icon" />
                                <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Liking: not more than 1000 per 30-40 seconds.');?></p>

                            </div>

                            <div class="lesson__block">

                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/robot.svg" class="lesson-block-icon" />
                                <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Always activate auto actions every other day.');?></p>

                            </div>

                        </div>

                        <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Advertising');?></h2>
                        <p class="lesson-text--border"><?=Yii::t('lessons', 'As well as in Facebook, in Instagram you can run ads. To do this, you need a business account. Before creating an account for your business in Instagram, choose your option:');?></p>

                        <ul class="lesson-list">
                            <li class="lesson-item">
                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                <p class="lesson-item-text"><?=Yii::t('lessons', 'You already have an your company\'s account in Instagram.');?></p>
                            </li>
                            <li class="lesson-item">
                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                <p class="lesson-item-text"><?=Yii::t('lessons', 'You aren\'t yet in Instagram, but you have an advertising account and a Facebook page.');?></p>
                            </li>
                            <li class="lesson-item">
                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                <p class="lesson-item-text"><?=Yii::t('lessons', 'You don\'t have business both in Facebook and in Instagram.');?></p>
                            </li>
                        </ul>

                        <p class="lesson-text"><?=Yii::t('lessons', 'So, you already have an your company\'s account in Instagram. In order to switch to a business account, go to Settings and select Switch to Business Profile.');?></p>

                        <img src="/modules/admin/cabinet_assets/pictures/img/priv-inst-screen-4.png" class="lesson-screenshot--small" />
                        <img src="/modules/admin/cabinet_assets/pictures/img/priv-inst-screen-5.png" class="lesson-screenshot--small" />

                        <p class="lesson-text"><?=Yii::t('lessons', 'Next step is authorization via Facebook advertising account by also choosing your corresponding group or business page.');?></p>
                        <p class="lesson-text"><?=Yii::t('lessons', 'If you don\'t have a business page on Facebook, you should create it, add data about a company and start creating a specialized account in Instagram.');?></p>
                        <p class="lesson-text"><?=Yii::t('lessons', 'Select authorization in Instagram via Facebook. (You should have administrator rights on a Facebook page).');?></p>

                        <img src="/modules/admin/cabinet_assets/pictures/img/priv-inst-screen-6.png" class="lesson-screenshot" />

                        <p class="lesson-text"><?=Yii::t('lessons', 'You can read rules for creating advertising in Instagram in a ');?>
                            <a href="https://www.facebook.com/business/help/1649590841944352">Facebook Help Center</a></p>
                        <p class="lesson-text"><?=Yii::t('lessons', 'We\'ll stop on the following aspect: why advertising doesn\'t pass moderation.');?></p>

                <div class="lesson__block">

                    <span class="lesson-block-num">1</span>

                    <div class="lesson-block__container">

                        <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Using text on images.');?></p>
                        <p class="lesson-block-text"><?=Yii::t('lessons', 'Advertising shouldn\'t include more than 20% of text on a picture, this rule applies to both Facebook and Instagram.');?></p>
                                <p class="lesson-block-text"><?=Yii::t('lessons', 'Facebook explains this by saying that this kind of ads are better in terms of content and also more attractive.');?></p>

                            </div>

                        </div>

                        <img src="/modules/admin/cabinet_assets/pictures/img/priv-inst-screen-7.png" class="lesson-screenshot--centre" />
                        <p class="lesson-text--border"><?=Yii::t('lessons', 'As you can see from an example, if you have some text, it\'s better to add it to a description, not a picture itself. Once again, don\'t forget about hashtags. It\'s not recommended to insert any kind of links in description, ads may not be approved because of this.');?></p>

                        <div class="lesson__block">

                            <span class="lesson-block-num">2</span>

                            <div class="lesson-block__container">

                                <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Advertising with age limits.');?></p>
                                <p class="lesson-block-text"><?=Yii::t('lessons', 'Some ads aren\'t shown because photos and text that they contain are offered to a very young audience. Avoid images of girls in underwear, revealing photos, pictures of people with alcohol or tobacco products.');?></p>

                            </div>

                        </div>

                        <div class="lesson__block">

                            <span class="lesson-block-num">3</span>

                            <div class="lesson-block__container">

                                <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Mentioning Facebook in your ads.');?></p>
                                <p class="lesson-block-text"><?=Yii::t('lessons', 'Sometimes you need to refer to Facebook in your advertisement. Remember a few rules when you do this.');?></p>

                            </div>

                        </div>

                        <p class="lesson-text"><?=Yii::t('lessons', 'Do:');?></p>

                        <ul class="lesson-list">
                            <li class="lesson-item">
                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                <p class="lesson-item-text"><?=Yii::t('lessons', 'Write word "Facebook" with a capital letter;');?></p>
                            </li>
                            <li class="lesson-item">
                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                <p class="lesson-item-text"><?=Yii::t('lessons', 'Use for "Facebook" the same letter size, font and style as for all other text.');?></p>
                            </li>
                        </ul>

                        <p class="lesson-text"><?=Yii::t('lessons', 'Don\'t:');?></p>

                                <ul class="lesson-list">
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'Use Facebook logo instead of a word Facebook;');?></p>
                                    </li>
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'Use "Facebook" in plural, as a verb or in abbreviated form;');?></p>
                                    </li>
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'Use a modified version of Facebook logo in your ads.');?></p>
                                    </li>
                                </ul>

                                <p class="lesson-text--border"><?=Yii::t('lessons', 'Also note that according to point 21 of Facebook Advertising Policies any advertising promoting quick earning and profit making is prohibited (including network marketing). Avoid phrases like "Quick earning with DiaVita Club", "How to get rich with DiaVita Club", "With DiaVita Club you can earn $500 per day", "Network Marketing", etc.');?></p>

                                <div class="lesson__container">

                                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'Competitions');?></h2>
                                    <p class="lesson-text--white"><?=Yii::t('lessons', 'The very core of Giveaway method (translated like "give it away", a prize draw) is that you attract new subscribers and also form new target audience by giving away valuable gifts.');?></p>
                                    <p class="lesson-text--white"><?=Yii::t('lessons', 'Simple Giveaway Rules:');?></p>

                                    <ul class="lesson-list">
                                        <li class="lesson-item">
                                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Don\'t be greedy for prizes.');?></p>
                                </li>
                                <li class="lesson-item">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                    <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Create colorful and nice posters for giveaways.');?></p>
                                </li>
                                <li class="lesson-item">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                    <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Come up with a hashtag about both Diavita Club and prizes.');?></p>
                                </li>
                                <li class="lesson-item">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                    <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Place giveaway ad daily in moments of high users activity.');?></p>
                                </li>
                                <li class="lesson-item">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                    <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Remember, 1 week is the shortest period for giveaway time.');?></p>
                                </li>
                                <li class="lesson-item">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                    <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Remind subscribers about time limits: 3 days left, 12 hours left, 3 hours left.');?></p>
                                </li>
                                <li class="lesson-item">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                    <p class="lesson-item-text--white"><?=Yii::t('lessons', 'At least once a day make a post on your page throughout giveaway.');?></p>
                                </li>
                            </ul>

                        </div>

                        <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Shoutout: mutual PR rules');?></h2>
                        <p class="lesson-text"><?=Yii::t('lessons', 'Shoutout for shoutout or SFS is one of free ways to promote accounts. A classic example of SFS in Instagram:');?></p>

                        <div class="lesson__block--four">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/sharp.svg" class="lesson-block-icon--four" />
                            <p class="lesson-block-text--four"><?=Yii::t('lessons', 'a user sound off about a campaign using the hashtag #sfs');?></p>

                                </div>
                                <div class="lesson__block--four">

                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/post.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four"><?=Yii::t('lessons', 'repost his post in your profile and tag him');?></p>

                                </div>
                                <div class="lesson__block--four">

                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/medal-one.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four"><?=Yii::t('lessons', 'in the description compliment him and stuff');?></p>

                                </div>
                                <div class="lesson__block--four">

                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/repost.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four"><?=Yii::t('lessons', 'in response he makes a post about you');?></p>

                                </div>

                                <p class="lesson-text"><?=Yii::t('lessons', 'Free exchange of ad posts between two accounts can be also referred to SFS.');?></p>

                                <div class="lesson__container">

                                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'Recommendations:');?></h2>

                                    <ul class="lesson-list">
                                        <li class="lesson-item">
                                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Agreement on reposts and advertising posts should be as transparent as possible and be sure to pre-discuss all the ins and outs of mutual reposting.');?></p>
                                        </li>
                                        <li class="lesson-item">
                                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Don\'t hurry to agree to SFS with dubious accounts. By that you\'ll more likely lose your subscribers, rather than get.');?></p>
                                        </li>
                                        <li class="lesson-item">
                                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Accounts from one or related areas will work better. For DiaVita Club, these accounts are ones promoting healthy lifestyle, for example.');?></p>
                                        </li>
                                        <li class="lesson-item">
                                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'When placing ads posts be sure to notify your sfs-partner about the time of publication, you want.');?></p>
                                        </li>
                                    </ul>

                                </div>

                                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Do I need to use Instagram stories?');?></h2>
                                <p class="lesson-text--border"><?=Yii::t('lessons', 'In August 2016 photo network updated its design and also launched a new message format, similar to Snapchat. You can create a presentation from your photos using a simple editor.');?></p>

                                <ul class="lesson-list">
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'Choose pictures from a phone or shoot with a camera.');?></p>
                                    </li>
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'Insert locations, text, use emoticons and filters.');?></p>
                                    </li>
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'Save, send to users personally or post in stories.');?></p>
                                    </li>
                                </ul>

                                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Work features of the service:');?></h2>

                                <ul class="lesson-list">
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'Instagram stories are at the top of your news feed and disappear when scrolling.');?></p>
                                    </li>
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'You can make a post private, select users from whom you want to hide a story.');?></p>
                                    </li>
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'After 24 hours, a post in Instagram stories will be automatically deleted.');?></p>
                                    </li>
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'You can\'t comment Instagram stories.');?></p>
                            </li>
                            <li class="lesson-item">
                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                <p class="lesson-item-text"><?=Yii::t('lessons', 'You can easily see who saw your post, as well as the number of views.');?></p>
                            </li>
                            <li class="lesson-item">
                                <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                <p class="lesson-item-text"><?=Yii::t('lessons', 'You can post a bunch of photos from any event (for example, DiaVita Club training) once in stories. Thus, subscribers\' news feed won\'t have spam and they won\'t unfollow you.');?></p>
                                    </li>
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'You can restrict viewing stories for underage users. This allows you to meet the legislation  requirements that are specific in this or that area.');?></p>
                                    </li>
                                    <li class="lesson-item">
                                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/circle-yellow.svg" class="lesson-item-icon" />
                                        <p class="lesson-item-text"><?=Yii::t('lessons', 'Live videos in Instagram stories allow you to be in touch with your subscribers at any time. Swipe to the right of news feed to open camera and press "Start Live Video". For now the function is available for accounts with 2000-3000 subscribers as reported in official account.');?></p>
                                    </li>
                                </ul>

                                <div class="lesson__container">

                                    <p class="lesson-text--border--white"><?=Yii::t('lessons', 'And for dessert we prepared for you 7 Instagram lifehacks and also picked some reliable and tested features for auto-posting, analytics and other functions.');?></p>

                                    <div class="lesson__block">

                                        <span class="lesson-block-num--white">1</span>

                                        <div class="lesson-block__container">

                                            <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Tip');?> 1</p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'Use Mayfair filter to edit images. As statistics show, it\'s the only effective filter for promotion.');?></p>

                                        </div>

                                    </div>

                                    <div class="lesson__block">

                                        <span class="lesson-block-num--white">2</span>

                                        <div class="lesson-block__container">

                                            <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Tip');?> 2</p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'Make posts on Sunday. During this day is there are usually less posts and your post will get more reach.');?></p>

                                </div>

                            </div>

                            <div class="lesson__block">

                                <span class="lesson-block-num--white">3</span>

                                <div class="lesson-block__container">

                                    <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Tip');?> 3</p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'Ask questions in the description to increase involvement and reactions.');?></p>

                                </div>

                            </div>

                            <div class="lesson__block">

                                <span class="lesson-block-num--white">4</span>

                                <div class="lesson-block__container">

                                    <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Tip');?> 4</p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'Create collages to make your account more attractive.');?></p>

                                </div>

                            </div>

                            <div class="lesson__block">

                                <span class="lesson-block-num--white">5</span>

                                <div class="lesson-block__container">

                                    <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Tip');?> 5</p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'Choose a blue color, some data show that it get 24% more likes than red or orange.');?></p>

                                </div>

                            </div>

                            <div class="lesson__block">

                                <span class="lesson-block-num--white">6</span>

                                <div class="lesson-block__container">

                                    <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Tip');?> 6</p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'Use faces in your posts (such posts get 35% more likes than posts without faces).');?></p>

                                </div>

                            </div>

                            <div class="lesson__block">

                                <span class="lesson-block-num--white">7</span>

                                <div class="lesson-block__container">

                                    <p class="lesson-block-container-text--bold"><?=Yii::t('lessons', 'Tip');?> 7</p>
                                    <p class="lesson-block-text--white--wide"><?=Yii::t('lessons', 'The more light, the better (minimum 65%).');?></p>

                                </div>

                            </div>

                            <div class="lesson__block--four">

                                <a href="https://www.crowdfireapp.com/?request_locale=en_US">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/crowdfire-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">Crowdfire</p>
                                </a>

                            </div>

                            <div class="lesson__block--four">

                                <a href="https://pro.iconosquare.com/">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/iconosquare-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">Iconosquare</p>
                                </a>

                            </div>

                            <div class="lesson__block--four">

                                <a href="https://unfollowgram.com/">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/unfollowgram-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">Unfollowgram</p>
                                </a>

                            </div>

                            <div class="lesson__block--four">

                                <a href="https://vibbi.com/instaport/">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/instaport-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">Instaport</p>
                                </a>

                            </div>

                            <div class="lesson__block--four">

                                <a href="https://grum.co/">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/grum-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">grum.co</p>
                                </a>

                            </div>

                            <div class="lesson__block--four">

                                <a href="https://smmplanner.com/">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/smmplanner-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">SMMplanner</p>
                                </a>

                            </div>

                            <div class="lesson__block--four">

                                <a href="http://gramblr.com/uploader/#home">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/gramblr-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">Gramblr</p>
                                </a>

                            </div>

                            <div class="lesson__block--four">

                                <a href="http://socialkit.ru/opportunities">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/socialkit-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">SocialKit</p>
                                </a>

                            </div>

                            <div class="lesson__block--two">

                                <a href="https://pablo.buffer.com/">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/pablo-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">Pablo</p>
                                </a>

                            </div>

                            <div class="lesson__block--two">

                                <a href="https://itunes.apple.com/ru/app/layout-from-instagram/id967351793?mt=8&ign-mpt=uo%3D4">
                                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/layout-logo.svg" class="lesson-block-icon--four" />
                                    <p class="lesson-block-text--four--white">Layout</p>
                                </a>

                            </div>

                        </div>

                    </div>

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Private course of promotion on Facebook'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?=Yii::t('lessons', 'Private course of promotion on Facebook');?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/fb-panda.svg"
                         class="lesson-header-img" alt="" />

                </div>

                <p class="lesson-text--border"><?=Yii::t('lessons', 'So, you already have a beautiful Facebook page with detailed description and well-chosen profile photo and page cover. Now the most important question is: how to promote it?');?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'Get first 500 followers for free');?></h2>
                    <p class="lesson-text--white"><?=Yii::t('lessons', 'You can easily get first 500 subscribers for free. Let\'s start with 5 points, which requires your primary attention to achieve this goal.');?></p>

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">1</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', 'First of all is, of course, a content. Most coverage gets posts with an attractive picture and a good informative message / joke / fact / call-to-action / issue. It’s best to make about 8-10 posts a day and half of them should contain images, 10-15% - videos and only the rest may be text posts or articles.');?></p>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/img/priv-fb-screen1-<?=$lng;?>.png" class="lesson-screenshot" />

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">2</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Create viral posts. Such posts are any kind of publications that has a potential for self-replication (natural materials distribution by social networks users). If you organize a material properly, taking into account target audience preferences, you can get hundreds or even thousands likes for a post overnight (if you have a small number of subscribers). When creating this kind of posts you need to remember all the time that a post should encourage a person to share such unique information.');?></p>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/img/priv-fb-screen2-<?=$lng;?>.png" class="lesson-screenshot" />

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">3</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Promote your public / page in other groups or communities. Subscribe to 50 communities with related topics to yours, leave comments from using your page account, but don’t spam! Thus, you can attract targeted subscribers and increase coverage of your page / group for free.');?></p>

                    </div>

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">4</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Don’t hesitate to invite your friends. With their help you can already get 200-300 subscribers without spending a dime.');?></p>

                    </div>

                    <div class="lesson__block">

                        <span class="lesson-block-num--white">5</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', 'Write to pages that are similar to yours either by content or by number of subscribers and ask to publish your posts. In exchange for such service, you can do the same with their page, offer a cash reward or a gift from DiaVita Club, which they can play on their page.');?></p>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/img/priv-fb-screen3-<?=$lng;?>.png" class="lesson-screenshot" />
                    <p class="lesson-text--white"><?=Yii::t('lessons', 'It’s not difficult to get the first 500, more difficult is to attract followers after reaching this amount. We’ll tell you how you can do this in the most optimal way.');?></p>

                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'Choose a public page');?></h2>
                    <p class="lesson-text--white"><?=Yii::t('lessons', 'We recommend creating Facebook public pages, not personal pages or groups, for business development because:');?></p>

                    <ul class="lesson-container-list">
                        <li class="lesson-container-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-container-item-icon" />
                            <p class="lesson-container-text"><?=Yii::t('lessons', 'you won’t be able to set up advertising in groups;');?></p>
                        </li>
                        <li class="lesson-container-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-container-item-icon" />
                            <p class="lesson-container-text"><?=Yii::t('lessons', 'it’s impossible to analyze group\'s development dynamics and subscribers demographics;');?></p>
                        </li>
                        <li class="lesson-container-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-container-item-icon" />
                            <p class="lesson-container-text"><?=Yii::t('lessons', 'they aren’t available in a search engine;');?></p>
                        </li>
                        <li class="lesson-container-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-container-item-icon" />
                            <p class="lesson-container-text"><?=Yii::t('lessons', 'posts rarely get into followers news feed.');?></p>
                        </li>
                    </ul>

                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'Bind your Instagram');?></h2>
                    <p class="lesson-text--white"><?=Yii::t('lessons', 'If you have an Instagram page, bind it to your Facebook business page. This will allow you to run advertising campaigns in Instagram (they are launched by using Facebook Ads Manager) and also collect accurate statistics on them.');?></p>

                    <img src="/modules/admin/cabinet_assets/pictures/img/priv-fb-screen4-<?=$lng;?>.png" class="lesson-screenshot" />

                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'Identify your subscribers interests');?></h2>
                    <p class="lesson-text--white"><?=Yii::t('lessons', 'Graph Search (social search Facebook) will help you with this difficult issue. To do this, switch language of the account to English and enter "interests liked by people who like [your page name]" in a Facebook search box.');?></p>

                    <img src="/modules/admin/cabinet_assets/pictures/img/priv-fb-screen5-<?=$lng;?>.png" class="lesson-screenshot" />
                    <p class="lesson-text--white"><?=Yii::t('lessons', 'Make a list of profile communities / groups where your target audience is to "sow" there your posts, leave expert comments or answer questions.');?></p>

                </div>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Distribute posts in personal profiles');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'There is one trick that everyone knows, but a few uses it. You can tag people on Facebook with the @ symbol. At the same time, this post will appear both on a personal page of a person whom you tagged and in a news feed of this person\'s friends.');?></p>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Watch the posting time');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'In statistics, you can see audience statistics not only by demographic characteristics, but also by time. You’ll be able to determine at what time your audience is most active, so, it’s better to publish posts at this time for greater involvement.');?></p>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Quickly respond to private messages, reviews and comments');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'Take part in discussions in other pages, groups and forums (don’t forget to put a link to your Facebook public). Respond to personal messages that were sent to you in your public  private messages in time - this may be your potential partner! A person who send a message is interested in communication, that’s why it’ll be very simple to convince him or her!');?></p>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Add a link to a page in your contacts');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'Add a link to your Facebook page in your email signature. If you use other social networks or services (Twitter, Pinterest, Line, etc.), then bind your page to them, or add a link in a profile description. If you have a website, then don’t forget to add a public subscription option.');?></p>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Offer discounts for likes');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', '<a href="https://www.wishpond.com/new/coupon/">Facebook Coupon App</a> and <a href="https://corp.wishpond.com/social-offers/">Group Offers App</a> will help you. The first one allows you to create personal discount coupons, which are activated by liking something. And the second one activates a discount after a certain number of people joined a campaign. Both apps are to be paid for, but there is a free trial period. In addition to likes, you can also offer discounts or gifts for content (for example, a photo of users with a DiaVita product and the #diavitaclub hashtag).');?></p>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Use targeted ads');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'Go to Ads Manager or Power Editor, from where you can create and manage  your public page ads campaigns. To do this, click on "Create Ads" option in the menu.');?></p>

                <img src="/modules/admin/cabinet_assets/pictures/img/priv-fb-screen6-<?=$lng;?>.png" class="lesson-screenshot" />
                <p class="lesson-text"><?=Yii::t('lessons', 'You automatically go to Ads Manager, where you can select different formats and goals for your advertising. If you want to attract subscribers or increase page coverage, we recommend selecting the option "Lead generation".');?></p>

                <img src="/modules/admin/cabinet_assets/pictures/img/priv-fb-screen7-<?=$lng;?>.png" class="lesson-screenshot" />
                <p class="lesson-text"><?=Yii::t('lessons', 'Then you need to select the target country / city, customize audience and formats that are most beneficial to your material.');?></p>

                <img src="/modules/admin/cabinet_assets/pictures/img/priv-fb-screen8-<?=$lng;?>.png" class="lesson-screenshot" />

                <p class="lesson-text--border"><?=Yii::t('lessons', 'Further ads customization is very simple and intuitive, so we won’t focus on this. In the next lesson on Facebook, we\'ll tell you in more detail about how to attract subscribers at the cheapest price within the sphere of targeted advertising.');?></p>

            </div>

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Cheap targeted advertising on Facebook. Loyal customer flow'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?=Yii::t('lessons', 'Cheap targeted advertising on Facebook. Loyal customer flow');?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/fb-panda.svg"
                         class="lesson-header-img" alt="" />

                </div>

                <p class="lesson-text--border"><?=Yii::t('lessons', 'When you’ve learned to customize ads on Facebook, now you can promote your page about DiaVita Club. Of course, it’s more rational to do this at minimum rates, but cheap targeted ads in this social network is a difficult issue that will need to be carefully studied.');?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'How does an auction work on Facebook?');?></h2>
                    <p class="lesson-text--white"><?=Yii::t('lessons', 'Usually on Facebook, traffic isn’t received by someone who offers more money, but by someone whose post is more valuable according to FB algorithms. Value is determined by the following three criteria:');?></p>

                    <ul class="lesson-list">
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'rate (how much you’re interested in others seeing your ads);');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'relevance (how much this ad suits a person according to his interests);');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'actions frequency (how probable is that a person will do some actions: go to the site, repost, comment, etc.)');?></p>
                        </li>
                    </ul>

                    <p class="lesson-text--border--white"><?=Yii::t('lessons', 'Let’s look in detail each of these criteria.');?></p>

                </div>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Rate');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'Conversion price depends on many factors and nuances. First of all, let\'s pay attention to rate. It can be manual or automatic. In the first case, you decide what maximum amount you’re ready to pay for result, in the second one Facebook does it based on its algorithms and your budget and selects the most optimal rate. In practice, if you’re more interested in price for result, choose a manual rate. If you’re more focused on result in volumes and time required to achieve it, then choose automatic one.');?></p>

                <img src="/modules/admin/cabinet_assets/pictures/img/adv-fb-screeen1-<?=$lng;?>.png" class="lesson-screenshot" />

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Relevance');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'Facebook algorithm shows ads based on your preferences (likes, comments, certain materials reposts, as well as hobbies and interests written in your profile). It also determines relevance according to user reactions. If an ad post gets a lot of reactions in a short time, it’ll most likely appear in news feed of friends of those people who reacted to this post for free. If users reaction to ad is negative (they click on "Hide" button, little response with a large number of showings), then you’ll have to pay more for it.');?></p>
                <p class="lesson-text--border"><?=Yii::t('lessons', 'Facebook evaluates each of your ads relevance on a ten-point scale and you can see it in the Power Editor. The higher the score, the more often this ad will be shown and the less it’ll cost.');?></p>

                <img src="/modules/admin/cabinet_assets/pictures/img/adv-fb-screeen2-<?=$lng;?>.png" class="lesson-screenshot" />

                <p class="lesson-text--border"><?=Yii::t('lessons', 'We’d like to remind you that Facebook prohibits promoting materials related to network marketing, so don’t add words related to this topic in ads text.');?></p>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Actions frequency');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'How to decide whom show ads from the entire selected target audience and fit in budget? Facebook analyzes each registered user actions and on this basis counts "Approximate actions frequency". For example, if you created ad so that new partners would register on www.diavita.vip, Facebook will show ads first to people who have already registered on the sites in a similar way (via Facebook ads). If the actions frequency of your ad is low, then Facebook will compensate for low frequency with a larger rate in case of automatic rate. That’s why, we recommend that you first select an automatic rate and set a large budget to see actions frequency.');?></p>

                <h2 class="lesson-caption--black"><?=Yii::t('lessons', 'Season');?></h2>
                <p class="lesson-text"><?=Yii::t('lessons', 'Let\'s look separately at such phenomenon as ads seasonality. Competition for ads placement is growing rapidly at peak times, when messages on promos, discounts, special offers, etc. massively appear on the Internet. Facebook is no exception, so plan your budget in advance, if you’ve chosen pre-holiday days as the time for placing your ad.');?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', 'What other parameters affect ads cost?');?></h2>

                    <ul class="lesson-list">
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Age');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Sex');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Languages');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/tick-white.svg" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', 'Connections to your page');?></p>
                        </li>
                    </ul>

                    <p class="lesson-text--white"><?=Yii::t('lessons', 'You can optimize ad only by experimenting with these factors, since influencing factors are individual for each ad.');?></p>

                </div>

                <p class="lesson-text--border"><?=Yii::t('lessons', 'Any ads budget will pay off, because with Facebook you attract only new partners (or buyers). Once in your structure, they will re-buy and re-sell DiaVita Club products, you won’t be spending a penny. Social networks as Facebook and Instagram are systems for generating new partners and customers 24/7. Be sure to use these platforms to promote your page about DiaVita Club!');?></p>

            </div>

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Closed sources. Definitive guide'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?=Yii::t('lessons', 'Closed sources. Definitive guide');?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/fb-panda.svg"
                         class="lesson-header-img" alt="" />

                </div>

                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>
                <p class="lesson-text-bborder"><?=Yii::t('lessons', '');?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', '');?></h2>
                    <ul class="lesson-list">
                        <li class="lesson-item">
                            <img src="" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', '');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', '');?></p>
                        </li>
                        <li class="lesson-item">
                            <img src="" class="lesson-item-icon" />
                            <p class="lesson-item-text--white"><?=Yii::t('lessons', '');?></p>
                        </li>
                    </ul>

                </div>

                <p class="lesson-text--border"><?=Yii::t('lessons', '');?></p>
                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>
                <ul class="lesson-list">
                    <li class="lesson-item">
                        <img src="" class="lesson-item-icon" />
                        <p class="lesson-item-text"><?=Yii::t('lessons', '');?></p>
                    </li>
                    <li class="lesson-item">
                        <img src="" class="lesson-item-icon" />
                        <p class="lesson-item-text"><?=Yii::t('lessons', '');?></p>
                    </li>
                    <li class="lesson-item">
                        <img src="" class="lesson-item-icon" />
                        <p class="lesson-item-text"><?=Yii::t('lessons', '');?></p>
                    </li>
                </ul>

                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>

                <h3 class="lesson-caption--black--small"><?=Yii::t('lessons', '');?></h3>
                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>

                <h3 class="lesson-caption--black--small"><?=Yii::t('lessons', '');?></h3>
                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>

                <img src="" class="lesson-screenshot" />

                <p class="lesson-text--border"><?=Yii::t('lessons', '');?></p>

                <img src="" class="lesson-screenshot" />

                <p class="lesson-text--border"><?=Yii::t('lessons', '');?></p>

                <img src="" class="lesson-screenshot" />

                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>

                <img src="" class="lesson-screenshot" />

                <p class="lesson-text--border"><?=Yii::t('lessons', '');?></p>

                <img src="" class="lesson-screenshot" />

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?=Yii::t('lessons', '');?></h2>

                    <div class="lesson__block">
                        <span class="lesson-block-num--white">1</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>

                    <img src="" class="lesson-screenshot" />

                    <div class="lesson__block">
                        <span class="lesson-block-num--white">2</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>
                    <div class="lesson__block">
                        <span class="lesson-block-num--white">3</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>
                    <div class="lesson__block">
                        <span class="lesson-block-num--white">4</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>

                    <img src="" class="lesson-screenshot" />

                    <div class="lesson__block">
                        <span class="lesson-block-num--white">5</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>
                    <div class="lesson__block">
                        <span class="lesson-block-num--white">5.1</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>
                    <div class="lesson__block">
                        <span class="lesson-block-num--white">5.2</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>

                    <img src="" class="lesson-screenshot" />

                    <div class="lesson__block">
                        <span class="lesson-block-num--white">5.3</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>

                    <img src="" class="lesson-screenshot" />

                    <div class="lesson__block">
                        <span class="lesson-block-num--white">5.4</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>

                    <img src="" class="lesson-screenshot" />

                    <div class="lesson__block">
                        <span class="lesson-block-num--white">5.5</span>
                        <p class="lesson-block-text--white"><?=Yii::t('lessons', '');?></p>
                    </div>

                </div>

                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>

                <p class="lesson-text--bold"><?=Yii::t('lessons', '');?></p>
                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>

                <img src="" class="lesson-screenshot" />

                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>

                <img src="" class="lesson-screenshot" />

                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>

                <img src="" class="lesson-screenshot" />

                <p class="lesson-text"><?=Yii::t('lessons', '');?></p>

                <p class="lesson-text--border"><?=Yii::t('lessons', '');?></p>

                <div class="lesson__block--four">
                    <img src="" class="lesson-block-icon--four" />
                    <p class="lesson-block-text--four--white"><?=Yii::t('lessons', '');?></p>
                </div>
                <div class="lesson__block--four">
                    <img src="" class="lesson-block-icon--four" />
                    <p class="lesson-block-text--four--white"><?=Yii::t('lessons', '');?></p>
                </div>
                <div class="lesson__block--four">
                    <img src="" class="lesson-block-icon--four" />
                    <p class="lesson-block-text--four--white"><?=Yii::t('lessons', '');?></p>
                </div>
                <div class="lesson__block--four">
                    <img src="" class="lesson-block-icon--four" />
                    <p class="lesson-block-text--four--white"><?=Yii::t('lessons', '');?></p>
                </div>

                <p class="lesson-text--border"><?=Yii::t('lessons', '');?></p>

            </div>

        </div>

        <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'Residual income with the help of Facebook and Instagram'); ?></h1>

    </div>

    <div id="offline-promotion" class="school__body offline-promotion hide hide-mob">

        <div class="school-accordion">

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Fundamental principles of offline promotion'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Fundamental principles of offline promotion'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/salesPromo.svg"
                         class="lesson-header-img--big" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Many of us worry when we have an important meeting, an interview. “ I\'ll
                    fail” - many people think so. Because of this a meeting passes ineffective. It\'s all about
                    confidence. If you do not believe in what you are saying, so why another person should believe in it
                    and accept Your point of view.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'We prepared for you some rules and tips that will help You to sell any
                    goods and services calm and confidently, convince a person that you are right and attract him into
                    your partner network.'); ?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Appearance'); ?></h2>
                    <p class="lesson-hint--white"><?= Yii::t('lessons', 'There is a rule of 150 score. 30 score for every point'); ?></p>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/user.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Appearance - the better you look, the better you are spick
                                and span and dressed with a taste, the more you win people\'s favor'); ?></p>
                        <span class="lesson-block-num--white">30</span>

                    </div>


                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/head-management.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Internal state - a cheerful, confident and positive person
                                is more attractive than listless, unsure and dreary.'); ?></p>
                        <span class="lesson-block-num--white">60</span>

                    </div>


                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/rock.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Status and solvency - the higher the person\'s place in the
                                social vertical, the more interesting he is to others. The ability to behave with
                                dignity, occupation, salary (more - income, capital), status friends - this is
                                especially attractive.'); ?></p>
                        <span class="lesson-block-num--white">90</span>

                    </div>


                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/stationery.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'What you are saying. If your speech is rich with
                                filler-words, a person will not be able to acquire information. You must give clear
                                information and with a confident voice.'); ?></p>
                        <span class="lesson-block-num--white">120</span>

                    </div>


                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/target.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'The way you speak. Easy, beautifully, funny, warmly and
                                sincerely - this is wow.'); ?></p>
                        <span class="lesson-block-num--white">150</span>

                    </div>


                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'To get 150 scale is impossible. This is too ideal approach.'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'But 100 scale is good enough to close a transaction, attract partners and
                    strike up Lots of acquaintances'); ?></p>

                <div class="fundamental__container">

                    <div class="fundamental-container--left">


                        <div class="fundamental-container__content">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/like.svg"
                                 class="fundamental-container-icon" alt=""/>
                            <p class="fundamental-container-text"><?= Yii::t('lessons', 'Appearance. It is enough to have a well-groomed
                                appearance and clean clothes of regular fit. A head should be clean and beautifully done
                                up. Facial hair is shaved or has a beautiful shape. Shoes clean. Nails are well-groomed.
                                Makeup fresh.'); ?></p>
                        </div>


                        <div class="fundamental-container__content">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/box.svg"
                                 class="fundamental-container-icon" alt=""/>
                            <p class="fundamental-container-text"><?= Yii::t('lessons', 'Internal state. Our appearance, the quality of a
                                voice, behavior of a body, completely depends on your internal state. If you are set to
                                fail, think about the negative, worry and are nervous, then you will fail. In order to
                                get rid of worry, you need to collect information about the topic of discussion as much
                                as possible, be in a positive mood and success will not be long in coming.'); ?></p>
                        </div>


                        <div class="fundamental-container__content">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/diamond.svg"
                                 class="fundamental-container-icon" alt=""/>
                            <p class="fundamental-container-text"><?= Yii::t('lessons', 'Status and solvency. Since you are at the beginning of
                                the road to your wealth, then you need to make friends on the DVC. The more high-ranking
                                friends you have at DVC, the stronger you grow. The faster you will become richer. The
                                faster you will go to passive income. Those to whom you will offer goods and offer
                                cooperation, it will be pleasant to realize that you are in circles of successful
                                entrepreneurs and rich people.'); ?></p>
                        </div>


                        <div class="fundamental-container__content">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/talking.svg"
                                 class="fundamental-container-icon" alt=""/>
                            <p class="fundamental-container-text"><?= Yii::t('lessons', 'What are you saying. Get rid of filler-words. Speak
                                clearly and distinctly. Do not rush. It is better to speak slowly and clearly than
                                quickly and not clearly. You must be as informed as possible in your question. Do not be
                                afraid to joke. Charm and humor win people\'s favor. Always touch a person for subtle
                                spiritual strings: "the desire to get rich", "passive income", "freedom from a boss",
                                "rapid growth", "while you think others are getting richer", "in a year you will regret
                                not doing DV and did not join the DVC", and so on.'); ?></p>
                        </div>


                        <div class="fundamental-container__content">
                            <img src=/modules/admin/cabinet_assets/pictures/svg/icons/contract.svg"
                                 class="fundamental-container-icon" alt=""/>
                            <p class="fundamental-container-text"><?= Yii::t('lessons', 'The way you speak. Have an eye-contact. This is a
                                necessary rule during negotiationы. The more frequent you twinkle and look away the less
                                a person trust you. Be confident and calm. Speak slowly but do not “load” a person. A
                                conversation must be easy and productive.'); ?></p>
                        </div>

                    </div>

                    <div class="fundamental__container-images">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/drows/panda303030.svg"
                             class="fundamental-container-image-panda" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/303030.svg"
                             class="fundamental-container-image-303030" alt=""/>
                    </div>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'And here it is some important nuances before a meeting'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'Be an active and attentive listener. Smile, nod, frown when appropriate.
                    This will allow you to make a good impression on an interlocutor. Seeing your interest and
                    involvement, you will easily win a partner\'s favor in negotiations. Ask open-ended questions: How?
                    Where? Why? This will visibly enliven a conversation and make it more friendly.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'Call a person by name. This is not only a sign of respect and
                    recognition, which will allow you to win an interlocutor\'s favor. In addition, it is known that it
                    is always pleasant to hear your name - use it.'); ?></p>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'In the following lessons, we will analyze in more detail the ability
                        to influence people and get what they want from them. We will tell secret techniques that will
                        help very quickly and in a short time to collect a very effective team.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerFundamental-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'How to reach an agreement about cooperation'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'How to reach an agreement about cooperation'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/cooperation.svg"
                         class="lesson-header-img--big" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'In order a person to become convinced that he need to cooperate with you
                    and, in the future, will start bringing stable passive income, it is necessary to give arguments
                    that will help him to overcome all fears and make the right decision.
                    For the most part, people have incorrect information, fears, prejudices. Argument will help us with
                    this, arguments that convince a person that his fears are groundless.'); ?></p>

                <div class="lesson__block">

                    <div class="lesson__block--three">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/puzzle1.svg"
                             class="lesson-block-icon--three" alt=""/>
                        <p class="lesson-block-text--three"><?= Yii::t('lessons', 'Untenable arguments'); ?></p>
                        <br>

                    </div>

                    <div class="lesson__block--three">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/puzzle2.svg"
                             class="lesson-block-icon--three" alt=""/>
                        <p class="lesson-block-text--three"><?= Yii::t('lessons', 'Weak arguments'); ?></p>

                    </div>

                    <div class="lesson__block--three">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/puzzle4.svg"
                             class="lesson-block-icon--three" alt=""/>
                        <p class="lesson-block-text--three"><?= Yii::t('lessons', 'Strong arguments'); ?></p>

                    </div>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Arguments differ in a degree of impact on a mind and feelings of people:
                    strong, weak and untenable. Rebuttals (counter arguments) have the same gradation.'); ?></p>

                <div class="coop__container">

                    <div class="coop__container-icons">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/puzzle4.svg"
                             class="coop-container-icon graphic-icon--top" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/puzzle2.svg"
                             class="coop-container-icon graphic-icon--middle" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/puzzle1.svg"
                             class="coop-container-icon graphic-icon--bottom" alt=""/>

                    </div>

                    <div class="coop__container-graphic">

                        <div class="coop-container-graphic__content">

                            <div class="coop-container-graphic-line" id="graphic-line"></div>

                        </div>

                        <div class="coop-container-graphic__texts">

                            <p class="coop-container-graphic-text graphic-text--left"><?= Yii::t('lessons', 'Untenable arguments'); ?></p>
                            <p class="coop-container-graphic-text graphic-text--middle"><?= Yii::t('lessons', 'Weak arguments'); ?></p>
                            <p class="coop-container-graphic-text graphic-text--right"><?= Yii::t('lessons', 'Strong arguments'); ?></p>

                        </div>

                    </div>

                </div>


                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Strong arguments'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/200-billion-en.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Arguments differ in a degree of impact on a mind and feelings of people:
                    strong, weak and untenable. Rebuttals (counter arguments) have the same gradation.'); ?></p>

                </div>

                <div class="lesson__block">
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/shield.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'World\'s richest market is the MLM market. The annual
                        profit of world leaders of network business is more than 200 billion dollars. All data is in
                        open sources.'); ?></p>
                </div>

                <div class="lesson__block">
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/flasks.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Laws, charters, guidelines, if they are executed and
                        correspond to real life. For example, MLM is not prohibited by law. This is absolutely legal way
                        of earning.'); ?></p>
                </div>

                <div class="lesson__block">
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/medal.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Experimentally verified conclusions. Give examples of
                        successful businessmen of network business. There are hundreds of thousands of these stories on
                        the Internet.'); ?></p>
                </div>

                <div class="lesson__block">
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/book.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Expert\'s opinion. There is a popular video of a world
                        famous business-coacher B.Tracy about MLM that it is the shortest way to the growth and
                        richness.'); ?></p>
                </div>

                <div class="lesson__block">
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/camera.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Eyewitness testimonies and witnesses of events. As an
                        example, millions of people working in the field of network business who actively conduct their
                        pages on the Internet and show their rich life with videos from their travels.'); ?></p>
                </div>


                <p class="lesson-text--border"><?= Yii::t('lessons', 'Statistic information if data collection, processing and
                        analysis made by a professional statistician.'); ?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Weak arguments'); ?></h2>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/standLoser.svg"
                         class="argument-img--left" alt=""/>

                    <div class="argument__container">

                        <p class="argument-container-text"><?= Yii::t('lessons', 'Inferences based on two or more separate facts, the
                            relationship between which is unclear without the third.'); ?></p>

                        <p class="argument-container-text"><?= Yii::t('lessons', 'Tricks and judgments built on alogisms (alogism is a
                            technique used to destroy the logic of thinking, it is often used in humor, for example:
                            "Water, I drank it once. It does not quench thirst").'); ?></p>

                        <p class="argument-container-text"><?= Yii::t('lessons', 'References (quotes) to authorities, unknown or little-known
                            to your listeners.'); ?></p>

                        <p class="argument-container-text"><?= Yii::t('lessons', 'Analogies and non-indicative examples.'); ?></p>

                        <p class="argument-container-text"><?= Yii::t('lessons', 'Arguments of a private nature, coming out of circumstances or
                            dictated by motivation, desire.'); ?></p>

                        <p class="argument-container-text"><?= Yii::t('lessons', 'Biased retreats, aphorisms, sayings.'); ?></p>

                        <p class="argument-container-text"><?= Yii::t('lessons', 'Arguments, versions or generalizations, made on the basis of
                            conjectures, assumptions, sensations.'); ?></p>

                        <p class="argument-container-text--border"><?= Yii::t('lessons', 'Conclusions based on incomplete statistics.'); ?></p>

                    </div>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'They raise doubts of your opponents, clients, employees'); ?></p>


                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Untenable arguments'); ?></h2>

                <div class="argument__container--left">

                    <p class="lesson-text--circle"><?= Yii::t('lessons', 'Judgments based on fraudulent facts.'); ?></p>

                    <p class="lesson-text--circle"><?= Yii::t('lessons', 'References to doubtful, untested sources.'); ?></p>

                    <p class="lesson-text--circle"><?= Yii::t('lessons', 'Invalid decisions.'); ?></p>

                    <p class="lesson-text--circle"><?= Yii::t('lessons', 'Conjectures, guesses, assumptions, inventions.'); ?></p>

                    <p class="lesson-text--circle"><?= Yii::t('lessons', 'Arguments for prejudice, ignorance.'); ?></p>

                    <p class="lesson-text--circle"><?= Yii::t('lessons', 'Conclusions made from fictitious documents.'); ?></p>

                    <p class="lesson-text--circle"><?= Yii::t('lessons', 'Promises.'); ?></p>

                    <p class="lesson-text--circle"><?= Yii::t('lessons', 'False statements and evidences.'); ?></p>

                    <p class="lesson-text--circle"><?= Yii::t('lessons', 'Forgery and falsification of what is being said.'); ?></p>

                </div>

                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/sitLoser.svg"
                     class="argument-img--right" alt=""/>


                <p class="lesson-text--border"><?= Yii::t('lessons', 'They help to expose, discredit an opponent who used them.'); ?></p>

                <footer class="coop__footer">

                    <div class="coop-footer__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/bulbs.svg"
                             class="coop-footer-img" alt=""/>
                        <p class="coop-footer-text"><?= Yii::t('lessons', 'In the course of argumentation, use only those arguments that you
                            and your opponent understand in the same way.'); ?></p>

                    </div>

                    <div class="coop-footer__container">

                        <img src=/modules/admin/cabinet_assets/pictures/svg/icons/handshake.svg"
                             class="coop-footer-img" alt=""/>
                        <p class="coop-footer-text"><?= Yii::t('lessons', 'If an argument is not accepted, find a reason for this and then do
                            not insist on it in the conversation.'); ?></p>

                    </div>

                    <div class="coop-footer__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/like.svg"
                             class="coop-footer-img" alt=""/>
                        <p class="coop-footer-text"><?= Yii::t('lessons', 'Do not underestimate the importance of strong arguments of an enemy.
                            Better, on the contrary, emphasize their importance and your correct understanding.'); ?></p>

                    </div>

                    <div class="coop-footer__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/molecule.svg"
                             class="coop-footer-img" alt=""/>
                        <p class="coop-footer-text"><?= Yii::t('lessons', 'Say your arguments, not related to what an enemy or partner said,
                            after you answered his arguments.'); ?></p>

                    </div>

                    <div class="coop-footer__container">

                        <img src=/modules/admin/cabinet_assets/pictures/svg/icons/panel.svg"
                             class="coop-footer-img" alt=""/>
                        <p class="coop-footer-text"><?= Yii::t('lessons', 'More accurately measure the pace of argumentation with the pace of a
                            partner.'); ?></p>

                    </div>

                    <div class="coop-footer__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/head-management.svg"
                             class="coop-footer-img" alt=""/>
                        <p class="coop-footer-text"><?= Yii::t('lessons', 'Excessive persuasiveness always provokes rebuff, as the superiority
                            of a partner in a dispute is always offensive.'); ?></p>

                    </div>

                    <div class="coop-footer__container">

                        <img src=/modules/admin/cabinet_assets/pictures/svg/icons/idea.svg" class="coop-footer-img"
                             alt=""/>
                        <p class="coop-footer-text"><?= Yii::t('lessons', 'Give one or two bright arguments and, if a desired effect is
                            achieved, limit them.'); ?></p>

                    </div>

                    <div class="coop-footer__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/flag.svg"
                             class="coop-footer-img" alt=""/>
                        <p class="coop-footer-text"><?= Yii::t('lessons', 'Avoid weak and untenable arguments. They only harm. Use only strong
                            arguments.'); ?></p>

                    </div>

                    <div class="coop-footer__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/presentation.svg"
                             class="coop-footer-img" alt=""/>
                        <p class="coop-footer-text"><?= Yii::t('lessons', 'Be flexible. There is no need to argue with a man. When he says
                            something, take his point of view, but after offer a strong argument. As a result, the
                            conversation will be easier in your channel.'); ?></p>

                    </div>

                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Create an image of a successful person'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Create an image of a successful person'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/successfull.svg"
                         class="lesson-header-img lesson-header-img--320" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Image reveals in style, details, appearance – in everything that
                    identifies our role in this world in the eyes of the people around us. “If you want to be successful
                    you need to look as you have already succeeded”, - Thomas More urged upon his fellow citizens.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'Below we give you some tips how to create the vibrations of the success
                    around you so people could see in you someone they can trust and rely on, but not an unworthy and
                    solemn fool.'); ?></p>

                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/cloud1r-<?=$lng;?>.svg"
                     class="successful-cloud--right" alt=""/>
                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/panda.svg" class="successful-panda--right"
                     alt=""/>

                <div class="successful__contetn--left">

                    <div class="successful__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/earth.svg" class="successful-img"
                             alt=""/>
                        <p class="successful-text"><?= Yii::t('lessons', 'You need to correct your profiles in the social networks in
                            accordance with the image that you are planning to show people around you. Approximately 70%
                            of the information in your profile should refer your professional sphere and just 30% - your
                            private life. Thus, you can show people that you are able to control everything happening in
                            your life.'); ?></p>

                    </div>

                    <div class="successful__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/beer.svg" class="successful-img"
                             alt=""/>
                        <p class="successful-text"><?= Yii::t('lessons', 'If you are planning to be engaged in politics you shouldn\'t load
                            discreditable pictures (Ex: with cigarettes, with the drunk people, in the shorts, swimsuit
                            or topless etc). Also, you\'d better not demonstrate where and with whom you live and spend
                            your free time. People may get the wrong impression of you. They may think that you are not
                            interested enough in your work. If you want to share such content you\'d better create the
                            private profile that would be available for your friends only. Always remember that leaders
                            have no weakness so you should delete all the information that somebody can use to
                            manipulate you. First of all, never give anyone a chance to take an inappropriate picture of
                            you. If you have taken on the role of leader you have no right to get drunk, behave
                            commonly, look rough etc.'); ?></p>

                    </div>

                    <div class="successful__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/camera.svg" class="successful-img"
                             alt=""/>
                        <p class="successful-text"><?= Yii::t('lessons', 'Secondly, forbid anybody from tagging you on the photos without your
                            permission. Use settings in your profile to do this. Social networks are the great mean of
                            creating a personal brand. Use all the opportunities given by social networking.'); ?></p>

                    </div>

                </div>

                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/cloud1l-<?=$lng;?>.svg"
                     class="successful-cloud--left" alt=""/>
                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/panda.svg"
                     class="successful-panda--left" alt=""/>

                <div class="successful__contetn--right">

                    <div class="successful__container">

                        <p class="successful-text"><?= Yii::t('lessons', 'You look more respectable wearing two layers of clothes. Men should
                            wear the undershirt or if they don\'t wear it – it\'s better to put on a jacket, a vest, a
                            sweater or a scarf. Women should wear accessories to their dress (necklace, brooch, jacket).
                            Moreover, dresses must have sleeves (even in Summer). Both men and women should cover their
                            knees. Also, it\'s better not to reveal the brand of your clothes in order not to dishonor
                            you as the expert in your professional sphere.'); ?></p>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/shirt.svg"
                             class="successful-img--right" alt=""/>

                    </div>

                    <div class="successful__container">

                        <p class="successful-text"><?= Yii::t('lessons', 'You should hide your tattoos and piercings if you have ones because
                            you can never know how people you deal with treat these kinds of body decoration.'); ?></p>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/user.svg"
                             class="successful-img--right" alt=""/>

                    </div>

                    <div class="successful__container">

                        <p class="successful-text"><?= Yii::t('lessons', 'Use the right accessories. If you wear glasses, it should be a good
                            product of high quality. Women can distinguish themselves wearing the expensive jewelry. Men
                            do the same wearing wristwatch of the high quality. Nowadays the modern gadgets are the
                            must-have for every leader. The only person who can come at the meeting with the
                            old-fashioned push-button phone is the one who has already achieved much and doesn\'t need to
                            prove anything to anybody. In other cases it\'s better to use the up to date gadgets.'); ?></p>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/clock-setting.svg"
                             class="successful-img--right" alt=""/>

                    </div>

                </div>

                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/cloud2r-<?=$lng;?>.svg"
                     class="successful-cloud--right" alt=""/>
                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/panda.svg"
                     class="successful-panda--right" alt=""/>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'You are the arithmetical mean of your circle. This statement equally
                    refers all the spheres of your life: financial, private, spiritual. If you want to be successful but
                    you are surrounded by the unsuccessful people, you\'d better change the environment around you.
                    Surround yourself with the people who achieved more that you. Look after the people you are
                    interested in: take notice which events, restaurants or art galleries they visit. Visit the same
                    places, eye this people, wear the same style as they wear, read the books that they read. After
                    visiting 5-6 events you will understand how the people of that circle interact with each other. At
                    the beginning you will just stay on the sidelines and observe but later you will be able to act in
                    the same way these people do. In order to get more successful people interested you need to improve
                    your communicative skills taking special trainings and courses.'); ?></p>

                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/cloud2l-<?=$lng;?>.svg"
                     class="successful-cloud--left" alt=""/>
                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/panda.svg"
                     class="successful-panda--left" alt=""/>

                <p class="successful-text--border"><?= Yii::t('lessons', 'It takes more than a half of the year for the image that you are
                    creating to become your second nature. You need to be highly motivated and self-disciplined. You
                    should cultivate your image either at work or at home. It\'s important to feel support of your family
                    and friends and be inspired by them. Set your goals – it will help you in the hour of need. Imagine
                    yourself in 5 and 20 years. Make the detailed notes: where you are, what you are doing, how do you
                    earn money, who surround you, with whom you are in touch etc. This can help you understand that your
                    success depends on you only. Now you can decide what to do to achieve this success.'); ?></p>
                <p class="successful-text--border"><?= Yii::t('lessons', 'What else is important for creating the image of the successful
                    person? Drive and the general tonus. A sound mind in a sound body – it gives you stress resistance,
                    ability to bite the bullet, high efficiency and your personal charm. Try to get the healthy habits
                    such as doing sports, sleeping well, healthy eating etc.'); ?></p>

                <div class="successful__container">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/talking.svg"
                         class="successful-img" alt=""/>
                    <p class="successful-text"><?= Yii::t('lessons', 'Work on your voice. Well trained and confident voice is a significant
                        dignity for anybody and especially for those who carries on the negotiations. Here is the good
                        training for your voice – rehearse the speech on any topic and record it. Listen to your record
                        and correct disadvantages of your speech.'); ?></p>

                </div>

                <div class="successful__container">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/bell.svg"
                         class="successful-img" alt=""/>
                    <p class="successful-text"><?= Yii::t('lessons', 'Don\'t fuss, take your time. Let your movements and speech be calm and
                        gentle. Try not to fling your arms about. You can get rid of fussiness with a help of yoga,
                        pilates, ski walking, meditation and massage.'); ?></p>

                </div>

                <div class="successful__container">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/send-mail.svg"
                         class="successful-img" alt=""/>
                    <p class="successful-text"><?= Yii::t('lessons', 'Remember about the self-introduction. It\'s important to analyze your
                        nicknames, userpics and even your e-mail addresses. They mustn\'t be jokey and made up in the
                        childhood or be the set of random symbols. This makes your image unserious.'); ?></p>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'All these small details create the successful vibrations, that help you
                    get better results in any sphere – from business to private life. The appropriate self-presentation
                    help people close the deals, get the discounts from the suppliers, attract the attention of men or
                    women. This experience proves the existence and efficiency of the successful image rules.'); ?></p>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'Taking care of the image and appearance is not the extravagance or the
                        trendiness but the respect towards yourself and people around you. It is the opportunity to be
                        understood and to be the winner in every situation.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerSuccessImage-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'How to increase trust to yourself'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'How to increase trust to yourself'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/famous.svg"
                         class="lesson-header-img lesson-header-img--320" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'When first getting into the company consumer believes your words about
                    the products\'/services\' high quality or consumer gets recommendations from the acquaintances. Though
                    after closing the deal consumer supports you and recommends your products/services or he/she doesn\'t
                    do this. In this lesson we will review 10 ways to win the clients\' confidence. These methods are
                    well-known to us and widely applied by us but sometimes we forget that using these methods in
                    complex would be much more efficient.'); ?></p>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Use the power of brand and company\'s name'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">1</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star.svg" class="lesson-block-icon"
                         alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Brand is one of the most powerful warranty of the quality. At the same time
                        brand means the high price because it increases the subjective price of the service or of the
                        product. Working under the brand you are not just “you” anymore but the representative of the
                        trade-mark what imposes responsibility on the company and its employees.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Work on the place for meetings with clients'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">2</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/theatre.svg" class="lesson-block-icon"
                         alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'The impression that consumer gets coming in the office, in the salespoint or
                        in the meeting place (café, restaurant) immediately refers your products and services. Pay
                        attention to the building. The consumer gets the first impression when he or she sees the
                        building. You won\'t have the second chance to make the first impression. Look at the neighbors
                        and the general environment. Your brand, the location of the office or the meeting place, the
                        environment there should have the client\'s credibility and respect.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Share the working process and your achievements'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">3</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/presentation.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'To earn the consumers\' sympathy tell them about the technologies that you are
                        using in your work. This information should be transparent. Visual expression is very important
                        so you may provide the material evidence of your professional worth. Preparing the material for
                        presentations you\'d better create a folder with the company\'s portfolio and the positive reviews
                        from the consumers.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Provide the testing opportunity'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">4</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/box.svg" class="lesson-block-icon"
                         alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Give consumers the opportunity to test your product or service before buying
                        it. That is the best way to prove your respectability and competitiveness. In this case the
                        client doesn\'t risk buying the unknown product. He or she can check whether it is as good as he
                        seller says.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Use all the PR opportunities'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">5</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/online-shop.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Undoubtedly, the more often your company\'s name being mentioned in the press
                        and social networks – the better. Moreover, it\'s well-known that the non-advertising mentions
                        have more clients\' credibility. Talk to your consumers after the buying, ask for their
                        recommendations – such mentions of your products will help you a lot!'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Keep in touch with clients'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">6</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/phone-24.svg" class="lesson-block-icon"
                         alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'One of the most simple and effective ways to earn the client\'s sympathy is the
                        regular phone conversations. In this case clients feel your care and interest. Thus, you can
                        complete three tasks: fight against the competitors, giving the actual information on the
                        product/service and getting new clients due to the recommendations of your consumers.
                        Demonstration of care for your acting consumers is cheaper than searching for the new clients.
                        However, you need to consider some details. Remember that people get the impression when talking
                        to you on phone. The clients recognize your intonation, tone, quality of tone and pace of your
                        speech. Any pause in the phone conversation is more significant that the one in the real
                        conversation. Lack of confidence in your voice may create an impression that you are incompetent
                        in your work.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Encourage giving recommendations'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">7</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking-2.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'How do you choose a doctor or a tutor? Right, you listen to your
                        acquaintances\' recommendations. The opinion leaders give the most effective recommendations. For
                        example, it\'s better to recommend the cocktail Vita Energy by athletes or models.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Show the result of buying and not buying your service'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">8</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/hand-plant.svg" class="lesson-block-icon"
                         alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Demonstrate the clients who have already bought your service and who are
                        satisfied with it. Compare them ironically with those who don\'t use your services yet. This
                        method is often used by the maintenance companies. They say: “We will do the highly qualified
                        makeover fast!” and tell about someone who tried to do makeover by his own and as a result
                        wasted his money and time and even damaged the neighbors\' property. They show the pictures of
                        renovated and damaged facilities. One more method is showing the clients “before and after”
                        only. That is the method of the incomplete image. They don\'t describe or demonstrate the middle
                        part of the whole story, so the process of using the product or the service is missing. That
                        gives an illusion of the problem\'s immediate solution. Experts believe that this method is
                        typical but very effective at the same time. However, you need to know how to explain the
                        solution that gave your product/service. Otherwise it can damage your reputation.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Use stereotypes'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">9</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/mustaches.svg" class="lesson-block-icon"
                         alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Usually the stereotypes in the clients\' lives refer the products and services
                        as well. For instance, you will never celebrate your birthday in the cheap restaurant or reply
                        the anonymous commercial proposal. Expensive is equal to high quality. The expensive product
                        will unlikely be of the low quality – that\'s the stereotype that helps create the impression of
                        the service\'s high quality before buying it. Sometimes the price is almost the only criterion
                        upon which the consumer can estimate the quality of the product. These are some examples in
                        which people mention the price of the product hinting at its quality.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', 'Take care of the additional service'); ?></h2>

                <div class="lesson__block">

                    <span class="lesson-block-num">10</span>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/gift.svg" class="lesson-block-icon"
                         alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'In addition to the general services you can include, for example, the hotline,
                        delivery at place or any other services that you can arrange. Such services immediately gain the
                        clients\' credibility. If you are so caring for clients in the minor matters then it makes sense
                        that you are perfect in your main professional activities.'); ?></p>

                </div>

                <div class="trust-scheme__container">

                    <h3 class="lesson-caption--white"><?= Yii::t('lessons', 'All these 10 methods work perfectly if you use them in
                        the right situations. There are some more factors influencing the increasing of your
                        credibility. You need to use them in order to achieve the desired result:'); ?></h3>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/pants.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Take care of your appearance. You cannot look
                            inappropriate.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/two.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Ask clients the questions. Learn to listen to them and hear
                            them.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/info.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Don\'t hide your sight during the conversation. That\'s the sign
                            of lie.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/gift-1.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Offer clients the nice free staff such as a plastic bag with
                            your brand on it.'); ?></p>

                    </div>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Finally, the credibility is closely related to the gratitude. Everyone
                    loves to be thanked. Gratitude helps people understand that they and their work are worthy. People
                    around us always pay attention to it.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'Always thank people even if it seems to be unnecessary. You can increase
                    the credibility by giving thanks to your client even when you failed to close the deal. The client
                    spent his/her time and time of the seller. Thank him or her so this client could ask for your help
                    again later.'); ?></p>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Clients before a face'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Clients before a face'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/clientBeforeFace.svg"
                         class="lesson-header-img--big lesson-header-img--fix" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/quiz-big.svg"
                         class="before-face-icon--left" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/quiz-small.svg"
                         class="before-face-icon--right" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Ok, you have just signed up the DiaVita Club (DVC), you\'ve learned a lot
                    of helpful information and now it\'s time to search for the first clients. Well, stop.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'Where you can find them? What should you do with them? In this DVC lesson
                    we will teach you how to find your first clients without efforts - they are just before your own
                    face! Let\'s start!'); ?></p>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', '1. Make a list of your acquaintances'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking-2.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'This is a classic way to capture the clients. In the beginning you can
                        make a list of 30-40 people you know. Always try to add new names to this list! Such list is the
                        fastest and the easiest way for a beginner to improve business because these people know you and
                        trust you.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', '2. Acquaintances of your acquaintances'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'There are always people you haven\'t involved. In this case you can
                        always ask them to recommend you some of their acquaintances who could be interested in talking
                        to you. Contacting them mention the person who gave you this contact. It will help you earn
                        confidence faster than if you were calling the random unknown person. As a result, you can add
                        some new names to your list. Even if most of the new contacts are not interested in your offer
                        at the moment you can get back to that matter later.'); ?></p>

                </div>

                <div class="before-face-scheme__container">

                    <h3 class="before-face-scheme-caption"><?= Yii::t('lessons', 'The first two variants may seem poorly effective because
                        sometimes it may seem that you have already offered your business to everyone. Have you really
                        done this?'); ?></h3>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/beforeface-scheme-<?=$lng;?>.svg"
                         class="before-face-scheme-img" alt=""/>

                    <div class="before-face-scheme__content">

                        <div class="before-face-scheme__info">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/gift.svg"
                                 class="before-face-scheme-info-icon" alt=""/>
                            <p class="before-face-scheme-info-text"><?= Yii::t('lessons', 'Guests at the somebody\'s birthday party?'); ?></p>

                        </div>

                        <div class="before-face-scheme__info">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/handshake.svg"
                                 class="before-face-scheme-info-icon" alt=""/>
                            <p class="before-face-scheme-info-text"><?= Yii::t('lessons', 'Colleagues or neighbors?'); ?></p>

                        </div>

                        <div class="before-face-scheme__info">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/bus.svg"
                                 class="before-face-scheme-info-icon" alt=""/>
                            <p class="before-face-scheme-info-text"><?= Yii::t('lessons', 'Fellow travelers?'); ?></p>

                        </div>

                        <div class="before-face-scheme__info">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/bag.svg"
                                 class="before-face-scheme-info-icon" alt=""/>
                            <p class="before-face-scheme-info-text"><?= Yii::t('lessons', 'Classmates?'); ?></p>

                        </div>

                        <div class="before-face-scheme__info">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/cup-of-tea.svg"
                                 class="before-face-scheme-info-icon" alt=""/>
                            <p class="before-face-scheme-info-text"><?= Yii::t('lessons', 'People sitting next to you at the cafe?'); ?></p>

                        </div>

                        <div class="before-face-scheme__info">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/mustaches.svg"
                                 class="before-face-scheme-info-icon" alt=""/>
                            <p class="before-face-scheme-info-text"><?= Yii::t('lessons', 'Your children\'s teachers, doctors?'); ?></p>

                        </div>

                        <div class="before-face-scheme__info">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/searching.svg"
                                 class="before-face-scheme-info-icon" alt=""/>
                            <p class="before-face-scheme-info-text"><?= Yii::t('lessons', 'Contacts from your old notebook?'); ?></p>

                        </div>

                        <div class="before-face-scheme__info">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/man-diagramma.svg"
                                 class="before-face-scheme-info-icon" alt=""/>
                            <p class="before-face-scheme-info-text"><?= Yii::t('lessons', 'Your teachers'); ?></p>

                        </div>

                    </div>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', '3. Social network advertising'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/talking.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'There are lots of social networks that you can use for your business!
                        Use all the messengers and video networks, use the opportunity of making your personal channels
                        and private chats. The only thing you need is a strong will to develop your business.
                        Considering the constant growth of social networking popularity, they are a very effective way
                        for your business development.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', '4. Mailout'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/stationery.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Experience has proven that the mass mails distribution is a very
                        effective way to capture the customers. Though if you don\'t have your customer database the
                        agency for e-mails distribution will unlikely give you the base according to your request.
                        That\'s why you need to create your database or buy it depending on your purposes and financial
                        opportunities.'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', '5. Landing pages'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/laptop-and-rocket.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'The well-made landing pages can capture the enormous attention to your
                        project. Don\'t miss that opportunity!'); ?></p>

                </div>

                <h2 class="lesson-caption--black"><?= Yii::t('lessons', '6. Cold calls'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/support.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Use cold calls to capture the potential clients whom you haven\'t known
                        before. Offer them your product/service/cooperation on the phone call (in the most cases) or at
                        the business meeting. There is a special approach for such contacts - no pressure, well
                        structured dialogue, visual accompanying of the conversation (promo materials).'); ?></p>

                </div>


                <p class="lesson-text--border"><?= Yii::t('lessons', 'Joining the business, you become the client of the company that you have
                    chosen. Consuming the top-class products, you see the result. When you achieve this result, you can
                    talk about it with confidence. If you are not a seller there is no need to search for the clients
                    intentionally. Every distributor using the products is getting the clients immediately just
                    recommending the company and talking about his or her own results or the results of their relatives
                    and friends. Thus, use as many products of your company as possible and share them with other
                    people.'); ?></p>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'We believe that all these variants help you forget about the problem
                        of clients searching. Now it\'s your time!'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerBeforeFace-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Customers for life'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Customers for life'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/oldFriends.svg"
                         class="lesson-header-img lesson-header-img--fix" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'In the past lesson, we told you how to find customers and sell them your
                    products successfully. But just as important is retaining old customers, since you want them to keep
                    coming back to you, don\'t you? In order to build good relationships with your customers and,
                    correspondingly, retain them, be sure to observe 8 important commandments:'); ?></p>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Keep them coming back'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/heart.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Customers\' desires must be very important to you. Talk to them,
                        find out what they want, and give it to them. For this reason, you will find out more and more
                        about your customer and be able to predict his desires. Then, the customer will keep coming back
                        to you.'); ?></p>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Having a system is the key'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Your structure must work distinctly and smoothly, just like
                        clockwork. You must be sure to have a sales system and a communication system with the customer.
                        All questions that the customer might have you should have planned a response for ahead of time.
                        In that case, you will know in difficult situations how to solve a problem and how you can raise
                        your customers\' level of trust in you. You are a professional after all and this means you can
                        be trusted.'); ?></p>

                </div>

                <div class="customers__container-images--height">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/dialog.svg"
                         class="customers-container-img" alt=""/>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/lightning.svg"
                         class="customers-container-icon--light" alt=""/>

                    <p class="customers-container-text--light"><?= Yii::t('lessons', 'What do you<br/> think...'); ?></p>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Don\'t just promise things – do them'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/handshake.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Never promise the customer something you can\'t give him. For
                        instance, don\'t promise that after taking Vita Energy that the effect will take place the very
                        next day. In deceiving the customer, you deceive yourself as well. Instead, promise less, but as
                        a result give them what they\'re waiting for. Such a pleasant bonus will evoke only positive
                        emotions. Just remember one thing: the customer must see a special attitude on your part toward
                        them in particular. After such a promise, the customer will surely keep coming back to you.'); ?></p>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'If your customer asks for something, your reply should always be
                    “Yes”'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/like.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'You should be not selling a product to the customer, but rather
                        helping the customer. If he asks you to do something that isn\'t included in your direct
                        obligations, or it\'s a separate service, do it for him. For instance, give him additional
                        consultation and pay a bit more attention than you\'d planned.'); ?></p>

                </div>

                <div class="customers__container-images--height">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/tea.svg"
                         class="customers-container-img" alt=""/>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/arrow-big.svg"
                         class="customers-container-arrow--big" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/arrow-thin.svg"
                         class="customers-container-arrow--small" alt=""/>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/steam.svg"
                         class="customers-container-steam--left" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/steam.svg"
                         class="customers-container-steam--right" alt=""/>

                </div>
                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Everyone makes mistakes'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/gift.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Don\'t blame yourself or your partner if all the sudden a mistake
                        is made. Analyze the mistake, avoid it in the future, and offer the customer pleasant
                        compensation – either a discount or a little gift. Mistakes are forgiven. The main thing is to
                        see them in time.'); ?></p>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Not having any complaints is a bad thing'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/support.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Remember, not everything can be perfect. Everyone has complaints
                        and that\'s totally a normal situation. But if complaints aren\'t coming to you then that just
                        means one thing: something\'s going wrong. It\'s better to solve problems immediately. Try to call
                        your customers after you\'ve made a deal with them. Ask if they\'ve liked everything and whether
                        they need more help.'); ?></p>

                </div>

                <div class="customers__container-images">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/supporting.svg"
                         class="customers-container-img" alt=""/>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/quiz-big.svg"
                         class="customers-container-icon--big" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/quiz-small.svg"
                         class="customers-container-icon--small" alt=""/>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Measure everything'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/progress.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Digits and statistics should be important to you. Measure
                        everything. You will never find out the condition of your business without measuring all the
                        necessary figures. Count the number of regular customers, new customers, number of successful
                        sales, and number of mistakes you have – analyze and optimize your activity.'); ?></p>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Become better'); ?></h2>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/searching.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'There is no limit to perfection. Find out how things are going
                        in the best of your niche. Look for information about the means of their development and borrow
                        their successful experience.'); ?></p>

                </div>

                <div class="lesson__container--gradient">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/similiar.svg"
                         class="lesson-container-img" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Building a relationship with a customer seems like a simple task, however
                    it takes quite an amount of effort on your part. In order to pave the way for long-term relations
                    with customers, try these several methods as well:'); ?></p>

                <div class="customers__comment">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/avatarPandaBoy-1.svg"
                         class="customers-comment-img" alt=""/>
                    <p class="customers-comment-text"><?= Yii::t('lessons', 'Treat people how you\'d like to be treated. This may seem obvious,
                        but few people actually follow this. Especially in business. Put yourself in the customer\'s
                        shoes and give them the level of service and the relationship that you would like to see when
                        making a similar purchase.'); ?></p>

                </div>

                <div class="customers__comment">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/avatarPandaGirl-2.svg"
                         class="customers-comment-img" alt=""/>
                    <p class="customers-comment-text"><?= Yii::t('lessons', 'Be honest. Lies about your products, raw materials, and service
                        quality may play a bad joke on you and seriously hurt your reputation. If you can\'t offer a
                        customer something, be honest. Customers will appreciate that and trust you.'); ?></p>

                </div>

                <div class="customers__comment">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/avatarPandaBoy-2.svg"
                         class="customers-comment-img" alt=""/>
                    <p class="customers-comment-text"><?= Yii::t('lessons', 'Remember that your customers are people, not numbers. After
                        talking to a potential customer, remember their name and key facts about them. Don\'t consider
                        him a statistical unit. Small details that you\'ll find out from conversation will help you
                        create exclusive customer experience out of it.'); ?></p>

                </div>

                <div class="customers__comment">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/avatarPandaGirl-1.svg"
                         class="customers-comment-img" alt=""/>
                    <p class="customers-comment-text"><?= Yii::t('lessons', 'Follow body language. Many people don\'t say what\'s in their head.
                        Small signs in their body will help you to properly evaluate the situation and understand which
                        way to take the conversation.'); ?></p>

                </div>

                <div class="customers__comment">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/avatarPandaBoy-3.svg"
                         class="customers-comment-img" alt=""/>
                    <p class="customers-comment-text"><?= Yii::t('lessons', 'Take a sincere interest in your customer. Listen to him,
                        understand and accept his problems, and try to help. This sincerity will pay off with the
                        customer\'s loyalty.'); ?></p>

                </div>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'Working with customers is not a simple task and it has a lot of
                        potential landmines. But this is interesting experiences. So find out new things and try to
                        understand everybody. That\'s when your customers will really become “Customers for life”.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerCustomers-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Making a residual income'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Making a residual income'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/rest.svg" class="lesson-header-img--big"
                         alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/1000baht.svg" class="income-icon"
                         alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'In this lesson we will answer the question “Where do people get passive
                    income from at DiaVita?”
                    No, it\'s not a myth. The thing is that the essence and goal of network marketing is to create this
                    very business and obtain a passive income from it in the amount you planned for.'); ?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'The following are the benefits of passive income:'); ?></h2>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/currency.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'In time, an unlimited amount of money can be acquired based
                            on the residual principle, which means that assets owners receive money over the course of
                            an undefined period of time, regardless of whether they\'re working or not.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/clock-setting.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Owners of assets generating money flows have more free time
                            and money to afford investing in assets or fully quitting work and enjoying life, in other
                            words acquiring financial freedom.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/house.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'After achieving passive income, people can compile their own
                            work schedules without having to leave their homes.'); ?></p>

                    </div>

                </div>


                <p class="lesson-text--border"><?= Yii::t('lessons', 'Now let\'s investigate under what conditions you have a basis to count on
                    passive income at DiaVita.'); ?></p>


                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Your team'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'You\'ve worked vigorously with great focus for 3-4 years and created your
                    own team of like-minded thinkers that has an already sufficient amount of professional leaders. Like
                    you, they have healthy ambitions and large goals. They create their own structures and develop and
                    maintain their own distributors.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'The company usually regularly pays interest to you off of revenue your
                    structure created. One can guess that the more your organization expands, the higher the product
                    revenue and, correspondingly, the higher your income. 1st line partners, in entering the system,
                    easily copy your actions and create their own teams. All of this is passed down the structure.'); ?></p>

                <img src="/modules/admin/cabinet_assets/pictures/svg/drows/looking.svg" class="lesson-img" alt=""/>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'That\'s how huge organizations are created. Meanwhile, you can only know
                    10-20 partners from your first-second line.'); ?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Quality products'); ?></h2>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'Your company\'s products usually have to be quality products.
                        DiaVita is a colorful example of that. Meanwhile, your partners and customers enjoy using the
                        company\'s products. If your partner or customer likes one type of your products, then, most
                        likely, he or she will be using other brands as well, meanwhile boosting product revenue within
                        your distributor network.'); ?></p>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'There\'s a very simple test: are you prepared to regularly acquire
                        your company\'s products if you weren\'t going to be its partner and didn\'t have to create monthly
                        assets? If the answer is “Yes”, then you\'re on the right track!'); ?></p>

                    <div class="income__container">

                        <div class="income-container__stars--left">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-middy.svg"
                                 class="income-star-one--left" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-width.svg"
                                 class="income-star-two--left" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                                 class="income-star-three--left" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                                 class="income-star-four--left" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                                 class="income-star-five--left" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-middy.svg"
                                 class="income-star-six--left" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                                 class="income-star-seven--left" alt=""/>

                        </div>

                        <img src="/modules/admin/cabinet_assets/pictures/img/vitaenergy.png"
                             class="income-container-img" alt=""/>

                        <div class="income-container__stars--right">

                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-middy.svg"
                                 class="income-star-one--right" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-width.svg"
                                 class="income-star-two--right" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                                 class="income-star-three--right" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                                 class="income-star-four--right" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                                 class="income-star-five--right" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-middy.svg"
                                 class="income-star-six--right" alt=""/>
                            <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                                 class="income-star-seven--right" alt=""/>

                        </div>


                    </div>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'If you observe these conditions, both your partners and your
                        customers will need to regularly acquire your company\'s products, which will create product
                        revenue in your organization.'); ?></p>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'System'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'The whole secret\'s the system. It must be active within your team.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'This is the main condition for creating residual income, just like all
                    other types. In acting based on the system, leaders can easily transfer knowledge and skills to
                    their partners who also get engaged in the system.'); ?></p>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Off-line and on-line'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'We\'ve gradually made our way to yet another important condition in
                    creating passive income at DiaVita – on your team there must definitely be online and offline
                    structures for your business at the same time.'); ?></p>

                <div class="income__container-images">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/saling.svg"
                         class="income-container-saling-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/1000-baht-italic.svg"
                         class="income-container-saling-icon" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'If your team works only offline and doesn\'t have a path for development
                    via the Internet, it will be losing out on huge opportunities and a large part of the market. But if
                    the team works only online, then you lose out on a large share of your target audience – personal
                    contacts.'); ?></p>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'You need to pave the way for passive income right now – the sooner you
                        devote the time to it, the quicker you\'ll be able to get a passive income. You just need to have
                        a goal that will motivate you, push you, and get you off the couch and working according to the
                        system.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerPassiveIncome-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>


            </div>

        </div>

    </div>

    <div id="business-creating" class="school__body business-creating hide hide-mob">

        <div class="school-accordion"></div>

        <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'Turn additional earnings into basic income'); ?></h1>

        <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'A quick way to make a team'); ?></h1>

        <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'Structure that grows by itself'); ?></h1>

        <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'How quickly to become a brand, which everyone will look up to'); ?></h1>

        <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'Secret ways of super popularity'); ?></h1>

        <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'Passive growth of a structure without your participation'); ?></h1>

    </div>

    <div id="increase-in-sales" class="school__body increase-in-sales hide hide-mob">

        <div class="school-accordion">

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Increase the number of sales with a promo'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Increase the number of sales with a promo'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/sales.svg"
                         class="lesson-header-img--big" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Say who do not like bright and memorable articles and posts in social
                    networks? Obviously: original images and video in materials attract us much more than a text, no
                    matter how brilliant it is written.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'It would be naive to believe that your audience buys only because it is
                    well acquainted with the goods and is guided by the principles of quality. Promo is very important
                    for the number of sales that is pictures and photos with which you promote your product. It is a
                    promo form a potential buyer\'s decision to purchase the goods.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'In this lesson we will tell you some rules that will allow you to create
                    a promo that helps increase your sales.'); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/target-1.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Any images should be not just of high quality or unique - their
                        presence should be justified. They must form a mood, bring out emotions.'); ?></p>

                </div>

                <div class="sales__images">

                    <img src="/modules/admin/cabinet_assets/pictures/img/drink.jpg" class="sales-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/img/girlpresentation.jpg" class="sales-img"
                         alt=""/>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/shearch-1.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Do not be lazy to study search results of pictures in the search for
                        spamming with pictures from the photobank. Avoid popular photos and pictures - they do not have
                        credibility.'); ?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/clown.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Nobody forbids to use images from photobank, but they are better to
                        buy and choose those that will look organic. Until now, there is a problem of people or plots
                        that are not relevant to reality and to a product that you are offering. The discrepancy
                        repels.'); ?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/camera.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'It\'s always better to make your own photos - they will be unique,
                        your own. You can also use a product to create a composition - this increases trust.'); ?></p>

                </div>

                <div class="sales__images">

                    <img src="/modules/admin/cabinet_assets/pictures/img/loseweight.jpg" class="sales-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/img/bottle.jpg" class="sales-img" alt=""/>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/two.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'If you use photos of people who recommend your product, it would be
                        great if you gave a possibility to connect with this person. It says that a person is real and
                        he can be asked a question, it works as social proof.'); ?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/check-symbol.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Attract customers to do photos with your product, leave sell -
                        comments. Then screenshots of these comments can be used as a promo.'); ?></p>

                </div>

                <img src="/modules/admin/cabinet_assets/pictures/img/sales-screenshot.jpg"
                     class="lesson-screenshot" alt=""/>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/hand-plant.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Good and effective approach - the use of schemes “before and after”
                        of using your product.'); ?></p>

                </div>

                <div class="sales__images">

                    <img src="/modules/admin/cabinet_assets/pictures/img/fat.jpg" class="sales-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/img/thin.jpg" class="sales-img" alt=""/>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/roller.svg" class="lesson-block-icon"/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Pay attention to a colour composition of your promo. Colors should be
                        harmonized with each other, cause positive emotions, in any case not to irritate.'); ?></p>

                </div>

                <div class="sales__images">

                    <img src="/modules/admin/cabinet_assets/pictures/img/bottleexample.jpg"
                         class="sales-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/img/food.jpg" class="sales-img" alt=""/>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/table.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Pay special attention to the psychology of color. For example, black
                        and gold cause association of wealth, gray - reliability, red and yellow colors cause appetite.
                        Choose a color scheme depending on a product that you sell with a promo.'); ?></p>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/stars.svg"
                         class="lesson-block-icon" alt=""/>
                    <p class="lesson-block-text"><?= Yii::t('lessons', 'Try to bring out potential client\'s emotions with a promo. Shocking
                        promo always works better. The better promo is remembered, the better it sells.'); ?></p>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'But if you want more, then before you post a promo, answer the main
                    question: "Why will my goods be bought?"'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'It\'s not enough to have just a picture, you need to think over a
                    conception and philosophy of your promo. In this case you will use the ability of a promo to impact
                    on brains and wishes of your potential buyers and sell, sell and sell.'); ?></p>

            </div>

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Combating contradictions'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Combating contradictions'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/choosing.svg"
                         class="lesson-header-img--big lesson-header-img--fix" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'In the process of making sales, you will often face objections from a
                    potential buyer. In fact, this is not such a serious problem, if you know and be able to use special
                    techniques to work with objections, which will be discussed in this lesson.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'Every of us strive to optimize own sales and for this you need to know
                    how to work with expressions. The secret is that most part of objections you hear are not original
                    that\'s why you always will be armed at all points. Consequently, the biggest part of objections are
                    divided into 6 mail categories, even if they are formulated in different ways:'); ?></p>

                <div class="contradictions__container">

                    <div class="contradictions__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/trolley.svg"
                             class="contradictions-block-img" alt=""/>
                        <p class="contradictions-block-text"><?= Yii::t('lessons', 'Objection associated with goods'); ?></p>

                    </div>

                    <div class="contradictions__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/support.svg"
                             class="contradictions-block-img" alt=""/>
                        <p class="contradictions-block-text"><?= Yii::t('lessons', 'Objection associated with a seller'); ?></p>

                    </div>

                    <div class="contradictions__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/house.svg"
                             class="contradictions-block-img" alt=""/>
                        <p class="contradictions-block-text"><?= Yii::t('lessons', 'Objection associated with a company'); ?></p>

                    </div>

                    <div class="contradictions__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/online-shop.svg"
                             class="contradictions-block-img" alt=""/>
                        <p class="contradictions-block-text"><?= Yii::t('lessons', 'Objection associated with a service'); ?></p>

                    </div>

                    <div class="contradictions__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/currency.svg"
                             class="contradictions-block-img" alt=""/>
                        <p class="contradictions-block-text"><?= Yii::t('lessons', 'Objection associated with price'); ?></p>

                    </div>

                    <div class="contradictions__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/handshake.svg"
                             class="contradictions-block-img" alt=""/>
                        <p class="contradictions-block-text"><?= Yii::t('lessons', 'Indecisiveness in decision-making'); ?></p>

                    </div>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'To deal with objections of any type there is a common algorithm'); ?></h2>

                <div class="contradictions__infographic">

                    <p class="contradictions-infographic-text-one"><?= Yii::t('lessons', 'Listen carefully to a buyer'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/two-1.svg"
                         class="contradictions-infographic-icon" alt=""/>
                    <span class="contradictions-infographic-number">1</span>

                </div>

                <div class="contradictions__infographic">

                    <p class="contradictions-infographic-text-two"><?= Yii::t('lessons', 'Recognize a buyer\'s point of view'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/check-symbol-1.svg"
                         class="contradictions-infographic-icon" alt=""/>
                    <span class="contradictions-infographic-number">2</span>

                </div>

                <div class="contradictions__infographic">

                    <p class="contradictions-infographic-text-two"><?= Yii::t('lessons', 'Choose the technique of dealing with an objection'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/search.svg"
                         class="contradictions-infographic-icon" alt=""/>
                    <span class="contradictions-infographic-number">3</span>

                </div>

                <div class="contradictions__infographic">

                    <p class="contradictions-infographic-text-one"><?= Yii::t('lessons', 'Answer the objection'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/target.svg"
                         class="contradictions-infographic-icon" alt=""/>
                    <span class="contradictions-infographic-number">4</span>

                </div>


                <div class="contradictions__infographic">

                    <p class="contradictions-infographic-text-one"><?= Yii::t('lessons', 'Try to make a sale'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/buy.svg"
                         class="contradictions-infographic-icon" alt=""/>
                    <span class="contradictions-infographic-number">5</span>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Everything is extremely simple: you only need to earn credit of trust
                    from your potential buyer. What about a techniques then further we will analyze them in more detail
                    - from simple to complex.'); ?></p>

                <div class="contradictions__dialog">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Yes, but ...'); ?></h2>
                    <h3 class="lesson-caption--gray"><?= Yii::t('lessons', 'Technique number 1'); ?></h3>
                    <p class="lesson-text--border"><?= Yii::t('lessons', 'Agree with an objection of an interlocutor, but add a weighty
                        argument in favor of your product.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia1-<?=$lng;?>.svg"
                         class="contradictions-dialog-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia1mob-<?=$lng;?>.svg"
                         class="contradictions-dialog-img--small" alt=""/>

                </div>

                <div class="contradictions__dialog">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'That is why…'); ?></h2>
                    <h3 class="lesson-caption--gray"><?= Yii::t('lessons', 'Technique number 2'); ?></h3>
                    <p class="lesson-text--border"><?= Yii::t('lessons', 'Contest objections of an interlocutor, explaining them with your
                        positive motives.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia2-<?=$lng;?>.svg"
                         class="contradictions-dialog-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia2mob-<?=$lng;?>.svg"
                         class="contradictions-dialog-img--small" alt=""/>

                </div>

                <div class="contradictions__dialog">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Ask a Question'); ?></h2>
                    <h3 class="lesson-caption--gray"><?= Yii::t('lessons', 'Technique number 3'); ?></h3>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia3-<?=$lng;?>.svg"
                         class="contradictions-dialog-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia3mob-<?=$lng;?>.svg"
                         class="contradictions-dialog-img--small" alt=""/>

                </div>

                <div class="contradictions__dialog">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Let\'s compare'); ?></h2>
                    <h3 class="lesson-caption--gray"><?= Yii::t('lessons', 'Technique number 4'); ?></h3>
                    <p class="lesson-text--border"><?= Yii::t('lessons', 'The method is very well suited to the objection of "Expensive". The
                        fact is that when a client starts telling you that it is expensive, he is trying to make you
                        believe that goods are the same for everyone, but you just have higher prices. Your task, using
                        the method "Let\'s compare", show a client that there are no identical things.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia4-<?=$lng;?>.svg"
                         class="contradictions-dialog-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia4mob-<?=$lng;?>.svg"
                         class="contradictions-dialog-img--small" alt=""/>

                </div>

                <div class="contradictions__dialog">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Division'); ?></h2>
                    <h3 class="lesson-caption--gray"><?= Yii::t('lessons', 'Technique number 5'); ?></h3>
                    <p class="lesson-text--border"><?= Yii::t('lessons', 'A good method when you need to prove that a more expensive product is
                        more profitable than a product that is cheaper. A typical example is a sale of an expensive
                        detergent in a small package that will wash out 1000 plates but a cheap product will wash only
                        300 plates.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia5-<?=$lng;?>.svg"
                         class="contradictions-dialog-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia5mob-<?=$lng;?>.svg"
                         class="contradictions-dialog-img--small" alt=""/>

                </div>

                <div class="contradictions__dialog">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Reduction ad absurdum'); ?></h2>
                    <h3 class="lesson-caption--gray"><?= Yii::t('lessons', 'Technique number 6'); ?></h3>
                    <p class="lesson-text--border"><?= Yii::t('lessons', 'You take a client\'s objection and conlessons it with a stronger
                        statement. For example:'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia6-<?=$lng;?>.svg"
                         class="contradictions-dialog-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia6mob-<?=$lng;?>.svg"
                         class="contradictions-dialog-img--small" alt=""/>

                </div>

                <div class="contradictions__dialog">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Reference to the past'); ?></h2>
                    <h3 class="lesson-caption--gray"><?= Yii::t('lessons', 'Technique number 7'); ?></h3>
                    <p class="lesson-text--border"><?= Yii::t('lessons', 'In order for this method to work, find in the past a client\'s
                        experience such actions that are similar to those offered by you. Then it will be easier for him
                        to agree to your proposal.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia7-<?=$lng;?>.svg"
                         class="contradictions-dialog-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia7mob-<?=$lng;?>.svg"
                         class="contradictions-dialog-img--small" alt=""/>

                </div>

                <div class="contradictions__dialog">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Overstated the bar'); ?></h2>
                    <h3 class="lesson-caption--gray"><?= Yii::t('lessons', 'Technique number 8'); ?></h3>
                    <p class="lesson-text--border"><?= Yii::t('lessons', 'An overstated bar is a story about a more complex case.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia8-<?=$lng;?>.svg"
                         class="contradictions-dialog-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia8mob-<?=$lng;?>.svg"
                         class="contradictions-dialog-img--small" alt=""/>

                </div>

                <div class="contradictions__dialog">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'A client can also help'); ?></h2>
                    <h3 class="lesson-caption--gray"><?= Yii::t('lessons', 'Technique number 9'); ?></h3>
                    <p class="lesson-text--border"><?= Yii::t('lessons', 'This method is a magic wand. You just find out the acceptable
                        conditions for a buyer from a buyer.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia9-<?=$lng;?>.svg"
                         class="contradictions-dialog-img" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/dialog/dia9mob-<?=$lng;?>.svg"
                         class="contradictions-dialog-img--small" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'These 9 simple techniques will help you significantly increase your
                    sales. However, remember one rule: in any case do not get into an argument with a potential buyer,
                    otherwise you will spoil your reputation.'); ?></p>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'In further lessons of the DVC, we will tell you in detail how to
                        create the right image in eyes of your customers.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerContradiation-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>

            </div>

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'The power of a declaration'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'The power of a declaration'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/speaker.svg"
                         class="lesson-header-img lesson-header-img--320" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/blink-left.svg"
                         class="declaration-icon--left" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/blink-right.svg"
                         class="declaration-icon--right" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/blink-left.svg"
                         class="declaration-icon--middle" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Anyone would have to admit that we are constantly talking about goals. We
                    talk about what we want to buy or do. We call these things goals, dreams, wishes, and even plans.
                    But the absurdity of all this action is that 95% of words just remain that – words. If a goal or a
                    promise is not fulfilled, then this discredits the goal itself. If you\'re not going to carry out a
                    promise, it\'s better not to make it in the first place.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'There exists a special technique called a “Declaration”. A Declaration is
                    one of the options to use for the “inevitability model” concept. It is a combination of
                    circumstances and actions that burden you with a situation of having no choice but to achieve said
                    result.'); ?></p>

                <div class="lesson__container--scheme">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', '“The declaration technique” can be broken down into four
                        basic elements:'); ?></h2>

                    <div class="power__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/handshake.svg"
                             class="power-container-icon" alt=""/>
                        <p class="power-container-text"><?= Yii::t('lessons', 'The promise'); ?></p>

                    </div>

                    <div class="power__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/three.svg"
                             class="power-container-icon" alt=""/>
                        <p class="power-container-text"><?= Yii::t('lessons', 'Publicity'); ?></p>

                    </div>

                    <div class="power__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/teacher.svg"
                             class="power-container-icon" alt=""/>
                        <p class="power-container-text"><?= Yii::t('lessons', 'An overseer'); ?></p>

                    </div>

                    <div class="power__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/coin.svg"
                             class="power-container-icon" alt=""/>
                        <p class="power-container-text"><?= Yii::t('lessons', 'Value in what you say'); ?></p>

                    </div>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'The promise'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'You think of a goal that you definitely have the guts for. Don\'t waste
                    paper and fill the air only with promises that you will definitely keep. A declaration is necessary
                    in the case that the new goal is a new frontier and a new height in your development. Very
                    important: a maximum of three declarations per year.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'Take a sheet of paper and write the following word for word:'); ?></p>

                <div class="lesson__container--gradient">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/hand-paper-<?=$lng;?>.svg"
                         class="lesson-container-img" alt=""/>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Value your words'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'After these daring words comes a key element that the declaration will
                    not work without. This is the amount of money you\'ll give someone if you don\'t fulfill the goal and
                    how much you will give them if you do. For instance:'); ?></p>
                <p class="lesson-text--blue"><?= Yii::t('lessons', 'Today, I have declared that I will buy an apartment in downtown Bangkok.
                    The value of my words is: 5,000 baht to the overseer if I don\'t carry it out and 500 baht if I
                    do.'); ?></p>

                <div class="customers__container-images--height">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/conflict.svg"
                         class="customers-container-img" alt=""/>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/drib.svg"
                         class="customers-container-icon--drib" alt=""/>

                </div>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Overseer'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'This is one of the key aspects of the model. It\'s very easy to trick
                    yourself, but it\'s harder to trick the other person. The overseer is a witness and guarantees that
                    your declaration is observed. You appoint the overseer. Place your signature under the declaration
                    of your serious intentions. Then, he places his, confirming that he takes your words seriously and
                    values them. In the cases that the circumstances are not brought to fruition, you will pay him the
                    value of your words. In case that you do fulfill it, then you also pay him, as we\'ve already
                    said.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'Who should the overseer be? The answer is simple – someone significant to you.
                    This is a person who you can\'t let down. It\'s a person who\'s attitude and respect toward you is very
                    important.'); ?></p>

                <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Publicity'); ?></h2>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'You can easily get away with it if your declaration is stored in a drawer
                    of your table. But it will be much harder to do this if the declaration will be seen by people you
                    know. A website, blog, social network, or frequent kitchen conversations are all options for public
                    dissemination of your declaration.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'Very few people have the guts and the gall to set big goals. But if a person does
                    this – he already deserves respect.'); ?></p>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'A declaration is quite an exotic and stressful method for achieving a
                        goal. So don\'t make one without thinking just for the sake of the game. Know that in making one
                        properly, you won\'t be able to get out of it. Also be prepared and understand that the goal will
                        be fulfilled if you make the decision to declare it.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footerDeclaration-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>

            </div>

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'The image that is imitated'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'The image that is imitated'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/mirror.svg"
                         class="lesson-header-img lesson-header-img--320" alt=""/>

                </div>

                <p class="lesson-text"><?= Yii::t('lessons', 'In other lessons of DiaVita Club we\'ve talked a lot about the importance of
                    creating a positive, successful public image to increase your sales and attract partners.'); ?></p>
                <p class="lesson-text"><?= Yii::t('lessons', 'During this lesson we\'ll take a closer look at your public image components which
                    will not only allow you to be well-liked but also make them imitate your style.'); ?></p>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'The most tangible qualities in public image are those through which effect
                    of being attractive in the eyes of others is achieved. To be successful you need to know which features
                    seem attractive to others and hold out these features. So what are these features? Let\'s start one by one.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'When do you want to be like a person, an idol? First, when this person lives
                    a decent and interesting life. Secondly, when this person is respected and his opinion is valued.
                    Thirdly, when this person is pleasant in everything starting from his clothes and ending with his attitude
                    to life.  So how to become such a person?'); ?></p>

                <div class="lesson__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Personal growth'); ?></h2>

                    <div class="imitated-star__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img--hide" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img--hide" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img--hide" alt=""/>

                    </div>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'You surely have your own role model, a person you\'d like to become.
                        Make a little analysis: from this person\'s public image pick out those qualities that inspire you
                        and begin to develop them yourself. Punctuality? Excellent! Follow this rule. Style? Perfect!
                        Focus on this issue. Personal development? Pay attention to etiquette. Take the best and embody
                        these traits in yourself. Now you\'re already on the road to success.'); ?></p>

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Learn self-presentation skills'); ?></h2>

                    <div class="imitated-star__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img--hide" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img--hide" alt=""/>

                    </div>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'Developing qualities worthy of imitation is half the battle. To get
                        your public image across to people is much more difficult. Self-presentation success depends on
                        ability to present yourself to other people, draw attention to yourself and make people interested
                        in your qualities. How to do it?'); ?></p>


                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/dialog.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'First, express your affection for other people. Forget about
                                "closedness" in general. Pay compliments, speak highly of people but never ever impose
                                your opinion. Otherwise you\'ll get an absolutely opposite effect.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/group-trio.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Secondly, look for similarities. People look up to those who are even
                                a bit like them then they try to imitate. If your public image is far from their interests
                                and world\'s perception than even if you become an ideal you will only be something magical
                                and unreachable in their eyes.'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/harmony.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Thirdly, do not forget about modesty. A person rich in his inner world
                                can in an instant erase everything positive by just bragging. Pay attention to this, no
                                one want to imitate a chatterbox and braggart albeit with a great sense of style.'); ?></p>

                    </div>

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Competence and status strength'); ?></h2>

                    <div class="imitated-star__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img--hide" alt=""/>

                    </div>

                    <p class="lesson-text--border--white"><?= Yii::t('lessons', 'In order for people following you and wanting to be like you show
                        them you weren\'t born yesterday. Choose a sphere you perfectly understand and work on your knowledge.
                        Your competent opinion will only strengthen your authority.'); ?></p>
                    <p class="lesson-text--white"><?= Yii::t('lessons', 'As for power of authority, any person wants to touch the heights of
                        life and have a strong social status. So prove to people following you is worth it. Main strategies
                        for creating a public image of a person with high social status and power are:'); ?></p>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/growup-man.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Show fasces of status and power. However, be careful and don\'t confuse
                                showing and bragging. Everything should be to the extent. Do you remember about modesty?'); ?></p>

                    </div>

                    <div class="lesson__block">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/four-hands.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-block-text--white"><?= Yii::t('lessons', 'Unite yourself with people who have high status and power. \"Tell me
                                what company you keep and I will tell you what you are\". It\'s a beautiful saying which
                                perfectly suits this situation. Surround yourself with people who fit in with you and
                                your public image.'); ?></p>

                    </div>

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Stay true to your public image until the end'); ?></h2>

                    <div class="imitated-star__container">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-step.svg"
                             class="imitated-star-img" alt=""/>

                    </div>

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'If you create a public image people look up to you don\'t have the
                        right to abandon it! Don\'t wear a mask but foster awareness of necessary personal qualities for
                        real. Keep in touch with people who trust and admire you so you\'ll strengthen your authority and
                        gain even greater loyalty. This is how you become if not an idol then a person about whom they\'ll
                        say: "I want to be alike!"'); ?></p>

                </div>

                <footer class="income__footer">

                    <p class="income-footer-text"><?= Yii::t('lessons', 'I wish you success in personal development!'); ?></p>

                </footer>

            </div>

        </div>

        <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'The passive-growing audience of your communities'); ?></h1>

        <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'A complete guide of increasing sales by 200%'); ?></h1>

    </div>

    <div id="negotiation" class="school__body negotiation hide hide-mob">

        <div class="school-accordion">

            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'The rule of 3 “Yes”'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'The rule of 3 “Yes”'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/3yes.svg"
                         class="lesson-header-img" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'During the process of negotiations many people ask a question that seems
                    easy: “ How to convince a person to make defined thing?” And are there any special rules of
                    negotiations? Learned some methods and literally with one word bring under control any listener - a
                    dream of a negotiator!'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'Such certain rules do not exist, but there are many effective techniques
                    that, of course, will not increase your persuasion by 100%, but will significantly help create a
                    good impression of you as a good negotiator.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'One of such rules is the rule of 3 “yes”. It gives you more chances to
                    hear from an interlocutor a positive response to a right question. This rule is based on one simple
                    psychological feature of people: if a person repeatedly agrees, then the probability of a positive
                    response in the future is significantly increased. By the way, with the word "no" is exactly the
                    same story. To successfully complete the final stage of any transaction / sale, this rule works
                    perfectly well.'); ?></p>

                <div class="yes__images">
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/check-symbol.svg"
                         class="yes-img yes-img yes-img--first" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/check-symbol.svg"
                         class="yes-img yes-img--second" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/check-symbol.svg"
                         class="yes-img yes-img--third" alt=""/>
                </div>

                <p class="lesson-hint"><?= Yii::t('lessons', 'This rule is used with success even by ordinary people. For example, children
                    very often use this easy algorithm of acts. Of course, you heard approximately such a dialogue
                    between a child and a mother:'); ?></p>

                <div class="yes__dialog">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/mother%20and%20son.svg"
                         class="yes-dialog-img" alt=""/>

                    <ul class="yes-dialog-list">
                        <li class="yes-dialog-item-first">
                            <img src="/modules/modules/admin/cabinet_assets/pictures/svg/dash.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-first"><?= Yii::t('lessons', 'Mummy, do you love me?'); ?></p>
                        </li>
                        <li class="yes-dialog-item-second">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/dashdark.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-second"><?= Yii::t('lessons', 'Yes'); ?></p>
                        </li>
                        <li class="yes-dialog-item-first">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/dash.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-first"><?= Yii::t('lessons', 'Mummy? did I behave good today?'); ?></p>
                        </li>
                        <li class="yes-dialog-item-second">
                            <img src="/modules/modules/admin/cabinet_assets/pictures/svg/dashdark.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-second"><?= Yii::t('lessons', 'Yes'); ?></p>
                        </li>
                        <li class="yes-dialog-item-first">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/dash.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-first"><?= Yii::t('lessons', 'Mummy, will you buy me this toy car?'); ?></p>
                        </li>
                    </ul>

                </div>

                <p class="lesson-hint"><?= Yii::t('lessons', 'What do you think the answer in 99% of cases is?'); ?></p>


                <div class="lesson__container">

                    <p class="lesson-text--white"><?= Yii::t('lessons', 'This method is interesting and because of the fact that there is
                        scientific evidence to this: there are medical suppositions why possibility of positive answers
                        increases. They say that it is due eduction of "positive" hormones in those cases when an
                        interlocutor responds positively. And vice versa - when you answer "no", your opponent is ready
                        to "fight and confrontat".'); ?></p>

                </div>


                <p class="lesson-hint"><?= Yii::t('lessons', 'Let\'s consider a simple example: you found a potential buyer and now you need to
                    convince him to buy your product. Here how you should conduct your final part of conversation,
                    according to the rule of 3 “yes”:'); ?></p>

                <div class="yes__dialog">

                    <ul class="yes-dialog-list">
                        <li class="yes-dialog-item-first">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/dash.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-first"><?= Yii::t('lessons', 'So, you want to lose weight for a long time?'); ?></p>
                        </li>
                        <li class="yes-dialog-item-second">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/dashdark.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-second"><?= Yii::t('lessons', 'Yes'); ?></p>
                        </li>
                        <li class="yes-dialog-item-first">
                            <img src="/modules/modules/admin/cabinet_assets/pictures/svg/dash.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-first"><?= Yii::t('lessons', 'You said you haven\'t time to eat right?'); ?></p>
                        </li>
                        <li class="yes-dialog-item-second">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/dashdark.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-second"><?= Yii::t('lessons', 'Yes'); ?></p>
                        </li>
                        <li class="yes-dialog-item-first">
                            <img src="/modules/admin/cabinet_assets/pictures/svg/dash.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-first"><?= Yii::t('lessons', 'By the way, the cocktail Vita Energy I told you, can be made for
                                5 minutes. Maybe do you want to try?'); ?></p>
                        </li>
                        <li class="yes-dialog-item-second">
                            <img src="/modules/modules/admin/cabinet_assets/pictures/svg/dashdark.svg"
                                 class="yes-dialog-icon" alt=""/>
                            <p class="yes-dialog-second"><?= Yii::t('lessons', 'Yes...'); ?></p>
                        </li>
                    </ul>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'This method is very easy, but to make it work you need to follow THREE
                    MAIN PRINCIPLES:'); ?></p>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/genious.svg"
                         class="lesson-block-icon" alt=""/>

                    <div class="lesson-block__container">

                        <h3 class="lesson-block-text--bold"><?= Yii::t('lessons', 'LOGIC.'); ?></h3>
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'Questions must belong to a topic and logically
                            bracketed'); ?></p>

                    </div>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/formula.svg"
                         class="lesson-block-icon" alt=""/>

                    <div class="lesson-block__container">

                        <h3 class="lesson-block-text--bold"><?= Yii::t('lessons', 'SIMPLICITY.'); ?></h3>
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'You should not use difficult and complex
                            statements, the easier communication - the more trust you have'); ?></p>

                    </div>

                </div>

                <div class="lesson__block">

                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/user.svg"
                         class="lesson-block-icon" alt=""/>

                    <div class="lesson-block__container">

                        <h3 class="lesson-block-text--bold"><?= Yii::t('lessons', 'ADEQUATENESS.'); ?></h3>
                        <p class="lesson-block-text"><?= Yii::t('lessons', 'Questions must be adequate your listener
                            haven\'t a feeling that he is used and you want to deceive him.'); ?></p>

                    </div>

                </div>

                <p class="lesson-hint"><?= Yii::t('lessons', 'In our opinion this method has advantages and disadvantages'); ?></p>

                <div class="yes-hang__container">

                    <div class="yes-hang yes-hang__minus">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/minus.svg"
                             class="yes-hang-img" alt=""/>
                        <p class="yes-hang-text"><?= Yii::t('lessons', 'it is necessary to think in advance a chain of questions and variants
                            of manipulation during the conversation, if suddenly something \"went wrong\"'); ?></p>

                    </div>

                    <div class="yes-hang yes-hang__plus">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/plus.svg"
                             class="yes-hang-img" alt=""/>
                        <div class="yes-hang__text">
                            <p class="yes-hang-text"><?= Yii::t('lessons', 'Allows you to inconspicuously bring an interlocutor to the solution
                                we need'); ?></p>
                        </div>

                    </div>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'So if you think over the course of the conversation in advance and pay
                    close attention to the questions that you ask your interlocutor to make it look adequate and do not
                    cause the potential client to think that you are trying to manipulate his consciousness, this rule
                    can be used very successfully to increase the number of your sales in DV.'); ?></p>

                <footer class="lesson-footer">
                    <p class="lesson-footer-text"><?= Yii::t('lessons', 'This rule is only one of few that can help you develop the skill of
                        negotiation, in the following DVC lessons we will talk about more complex and effective
                        techniques for influencing your potential buyers.'); ?></p>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/footer3Yes-<?=$lng;?>.svg"
                         class="lesson-footer-img" alt=""/>
                </footer>

            </div>


            <h1 class="school-accordion-caption"><?= Yii::t('lessons', 'Mister-charm'); ?></h1>
            <div class="school-accordion__container">

                <div class="lesson-header">

                    <h2 class="lesson-header-caption"><?= Yii::t('lessons', 'Mister-charm'); ?></h2>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/drows/charm.svg"
                         class="lesson-header-img--big lesson-header-img-pandafix" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                         class="charm-star--first" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                         class="charm-star--second" alt=""/>
                    <img src="/modules/admin/cabinet_assets/pictures/svg/icons/star-thin.svg"
                         class="charm-star--last" alt=""/>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'Have you ever thought why some people literally “attract” people to
                    themselves, it\'s pleasure to deal with them and communicate? Most people believe that charisma is a
                    natural gift and it can not be strengthened. In fact, it is very simple to improve this trait!'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'There are 3 main groups of traits, thanks to which you can increase the
                    level of personal charm. The first group includes the following natural traits:'); ?></p>

                <div class="charm__container">

                    <h2 class="lesson-caption--white"><?= Yii::t('lessons', 'Natural traits'); ?></h2>

                    <div class="charm-container__content">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/three.svg"
                             class="charm-content-img" alt=""/>
                        <p class="charm-content-text--white"><?= Yii::t('lessons', 'Sociability (ability to easily get on with people)'); ?></p>
                    </div>

                    <div class="charm-container__content">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/masks.svg"
                             class="charm-content-img" alt=""/>
                        <p class="charm-content-text--white"><?= Yii::t('lessons', 'Empathy ( ability to empathize)'); ?></p>
                    </div>

                    <div class="charm-container__content">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/search.svg"
                             class="charm-content-img" alt=""/>
                        <p class="charm-content-text--white"><?= Yii::t('lessons', 'Reflexion ( ability to understand a person)'); ?></p>
                    </div>

                    <div class="charm-container__content">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/two.svg"
                             class="charm-content-img" alt=""/>
                        <p class="charm-content-text--white"><?= Yii::t('lessons', 'Eloquence (the ability to impact with a word).'); ?></p>
                    </div>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'hese traits form the basis of natural talents, designated by the
                    generalized concept of "the ability to please people". The second group includes characteristics of
                    a personality, which are the result of education and upbringing.'); ?></p>

                <div class="charm__container--white">

                    <h2 class="lesson-caption--blue"><?= Yii::t('lessons', 'Characteristics of a personality'); ?></h2>

                    <div class="charm-container__content">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/libra.svg"
                             class="charm-content-img" alt=""/>
                        <p class="charm-content-text"><?= Yii::t('lessons', 'Moral values'); ?></p>
                    </div>

                    <div class="charm-container__content">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/certeficate.svg"
                             class="charm-content-img" alt=""/>
                        <p class="charm-content-text"><?= Yii::t('lessons', 'Mental health'); ?></p>
                    </div>

                    <div class="charm-container__content-fix">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking-3.svg"
                             class="charm-content-img" alt=""/>
                        <p class="charm-content-text"><?= Yii::t('lessons', 'Possession of communication techniques: interpersonal
                            communication, business speech, anticipation and overcoming of conflict situations.'); ?></p>
                    </div>

                </div>

                <p class="lesson-text--border"><?= Yii::t('lessons', 'The third group should include what is related to the life and
                    professional experience of man. Especially valuable when this experience helps to sharpen intuition.
                    This is of great importance. Self-confidence and standard behavior have a negative impact on the
                    perception of a person who is interested in recognition and benevolent attitude.'); ?></p>
                <p class="lesson-text--border"><?= Yii::t('lessons', 'How to strengthen personal charisma? What do you need to change in
                    yourself, in your behavior for this? Just use our tips:'); ?></p>

                <div class="lesson__container">
                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/user.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-text--white"><?= Yii::t('lessons', 'Behave naturally. Just be yourself, you do not need to chase
                            after some standards or bars - it always looks fake and insincere. The most favorable
                            impression we usually make when we behave naturally.'); ?></p>
                    </div>

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/hand-plant.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-text--white"><?= Yii::t('lessons', 'Be a good listener. People are always more interested in their
                            lives than in lives of others. Learn to listen to an interlocutor - and not just listen, but
                            hear. Bring in yourself a stress-resistance - if during a conversation you really want to
                            interrupt an interlocutor, take a deep breath and a slow exhalation; Repeat these exercises
                            several times. Developing this habit in yourself, you will learn to listen patiently to a
                            speaker without interrupting him.'); ?></p>
                    </div>

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/rockstar.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-text--white"><?= Yii::t('lessons', 'Demonstrate your interest in others - this is one of the best
                            ways to make a good impression. Be attentive to an interlocutor. Take this position to
                            communicate with him face to face. Be sure to keep eye contact - but, of course, in
                            moderation, because the defiant look will not bring anything good.'); ?></p>
                    </div>

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/heart.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-text--white"><?= Yii::t('lessons', 'Try to understand and support an interlocutor. Let people meet
                            in you something that they most need: participation, understanding, support. Often walk in
                            another person\'s shoes, try to imagine what he must feel in this situation.'); ?></p>
                    </div>

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/networking-1.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-text--white"><?= Yii::t('lessons', 'Emphasize the similarity with your interlocutor. As you know,
                            we are attracted to others be the unity of views, common interests, similar destinies.'); ?></p>
                    </div>

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/like.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-text--white"><?= Yii::t('lessons', 'Express sincere approval. Except in very rare exceptions,
                            people like the approval of their ideas and actions, so sincere praise promotes a good
                            impression. The approval or compliment naturally follows from our desire to find unifying
                            moments. Do not miss the opportunity to tell a person pleasant - there are not so much
                            positive emotions in life!'); ?></p>
                    </div>

                    <div class="lesson__block">
                        <img src="/modules/admin/cabinet_assets/pictures/svg/icons/shirt.svg"
                             class="lesson-block-icon" alt=""/>
                        <p class="lesson-text--white"><?= Yii::t('lessons', 'Do not scrimp on compliments. Let people feel their sincerity,
                            notice all the good things (from clothes, hairstyles to interesting ideas, thoughts) and do
                            not hesitate to tell people. At the same time, talk about what you really feel.'); ?></p>
                    </div>

                </div>


            </div>

            <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'Pockets full of money'); ?></h1>

            <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'How to convince a person to become BL'); ?></h1>

            <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'Conversation examples that unconditionally convince to follow
                You'); ?></h1>

            <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'Residual income. Structure of strong BL and SBL (senior business
                leader)'); ?></h1>

            <h1 class="school-accordion-caption-empty"><?= Yii::t('lessons', 'Word-painter. Even the most stubborn people will be faithful'); ?></h1>

        </div>

    </div>

</div>
