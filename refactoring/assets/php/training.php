<?php //$this->registerCssFile('/modules/admin/cabinet_assets/css/media480.css')?>
<?php //$this->registerCssFile('/modules/admin/cabinet_assets/css/mediaMax400.css')?>
<?php //$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media320.css')?>
<?php //$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media480.css')?>
<?php //$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media768.css')?>
<?php //$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media992.css')?>
<?php //$this->registerCssFile('/modules/admin/cabinet_assets/css/secondlesson/media1200.css')?>
    <div class="wrapper">

        <nav class="school__navigation">

            <ul class="school-nav-list">
                <li class="school-nav-item"><a href="#bussines_in_dvc"
                                               class="school-nav-item-link school-nav-item-link--active"><?=Yii::t('front','Business in the DiaVita Club');?></a>
                </li>
                <li class="school-nav-item"><a href="#online-promotion" class="school-nav-item-link"><?=Yii::t('front','Online promotion');?></a>
                </li>
                <li class="school-nav-item"><a href="#offline-promotion" class="school-nav-item-link"><?=Yii::t('front','Offline promotion');?></a>
                </li>
                <li class="school-nav-item"><a href="#bussines_evolution" class="school-nav-item-link"><?=Yii::t('front','Business development in the DiaVita Club');?></a>
                </li>
            </ul>

        </nav>

        <div id="bussines_in_dvc" class="school__body show show-mob">

            <div class="school-accordion">

                <div class="video__container">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/img/video/bg.png" class="preview-img" onclick="showVideo1(this)"/>
                        <h2 class="preview-caption" onclick="showVideo1(this)"><?=Yii::t('front','Why does everyone choose the Diavita Club? All answers in 5 mins and 30 secs');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_1" onclick="closeVideo1(this)">

                    <div class="video__popup" id="video_popup_1">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/bg.png">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','How to build your own network in the Diavita Club?');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_2" onclick="">

                    <div class="video__popup" id="video_popup_2">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Effective methods to quickly build your own team');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_3" onclick="">

                    <div class="video__popup" id="video_popup_3">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/img/video/video-4.png" class="preview-img--hide" onclick="showVideo4(this)"/>
                        <h2 class="preview-caption--hide" onclick="showVideo4(this)"><?=Yii::t('front','Earn your first 3000 bath? It’s easy! Watch an instruction.');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_4" onclick="closeVideo4(this)">

                    <div class="video__popup" id="video_popup_4">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/video-4.png">
                            <source src="/modules/admin/cabinet_assets/video/4.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/img/video/video-5.png" class="preview-img--hide" onclick="showVideo5(this)"/>
                        <h2 class="preview-caption--hide" onclick="showVideo5(this)"><?=Yii::t('front','Quick method to earn 150000 bath in 4 days! Watch how');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_5" onclick="closeVideo5(this)">

                    <div class="video__popup" id="video_popup_5">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/video-5.png">
                            <source src="/modules/admin/cabinet_assets/video/5.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

            </div>

        </div>

        <div id="online-promotion" class="school__body hide hide-mob">

            <div class="school-accordion">

                <div class="video__container">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/img/video/video-6.png" class="preview-img--hide" onclick="showVideo6(this)"/>
                        <h2 class="preview-caption--hide" onclick="showVideo6(this)"><?=Yii::t('front','Why is it easier to sell online?');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_6" onclick="closeVideo6(this)">

                    <div class="video__popup" id="video_popup_6">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/video-6.png">
                            <source src="/modules/admin/cabinet_assets/video/6.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','How to become popular in social networks? 5 easy ways');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_7" onclick="">

                    <div class="video__popup" id="video_popup_7">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Promotion in YouTube. A magic power of video-content');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_8" onclick="">

                    <div class="video__popup" id="video_popup_8">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Passive income with the help of social network. Is it real?');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_9" onclick="">

                    <div class="video__popup" id="video_popup_9">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Effective ways to promote in the Internet you never thought about!');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_10" onclick="">

                    <div class="video__popup" id="video_popup_10">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

            </div>

        </div>

        <div id="offline-promotion" class="school__body hide hide-mob">

            <div class="school-accordion">

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','How to turn friend into customers?');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_11" onclick="">

                    <div class="video__popup" id="video_popup_11">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Is offline promotion effective? 5 working methods');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_12" onclick="">

                    <div class="video__popup" id="video_popup_12">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','The most important element in your style which make people to trust you');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_13" onclick="">

                    <div class="video__popup" id="video_popup_13">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Let go or keep? Detailed directions how to get regular customers');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_14" onclick="">

                    <div class="video__popup" id="video_popup_14">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Making passive income. How to make system work for you');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_15" onclick="">

                    <div class="video__popup" id="video_popup_15">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

            </div>

        </div>

        <div id="bussines_evolution" class="school__body hide hide-mob">

            <div class="school-accordion">

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Why to create your network? Real stories are the only worthy examples');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_16" onclick="">

                    <div class="video__popup" id="video_popup_16">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','5 effective methods to develop your network rapidly! Watch how');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_17" onclick="">

                    <div class="video__popup" id="video_popup_17">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Lively masterclass on how to attract new partners. Dialogues which make people follow you');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_18" onclick="">

                    <div class="video__popup" id="video_popup_18">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Developing your team: how to convince a person to promote his status in your team?');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_19" onclick="">

                    <div class="video__popup" id="video_popup_19">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

                <div class="video__container video__container--hide">

                    <div class="video__preview">

                        <img src="/modules/admin/cabinet_assets/pictures/svg/video/coming-soon-th.svg" class="preview-img--hide" onclick=""/>
                        <h2 class="preview-caption--hide" onclick=""><?=Yii::t('front','Terrible strength of motivation: how not to lose faith in your team and yourself?');?></h2>

                    </div>

                    <img src="/modules/admin/cabinet_assets/pictures/svg/cancel-music.svg" class="video-close" id="close_video_20" onclick="">

                    <div class="video__popup" id="video_popup_20">

                        <video class="video-player" controls="controls" poster="/modules/admin/cabinet_assets/pictures/img/video/">
                            <source src="/modules/admin/cabinet_assets/video/diavita%20draft2.mp4" type="video/mp4"/>
                        </video>

                    </div>

                </div>

            </div>

        </div>

        </div>
<?php
use yii\web\View;
$this->registerJsFile('/modules/admin/cabinet_assets/js/accordion.js',['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/coopGraphic.js',['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/dropdownmenu.js',['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/scrolldown.js',['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/schoolTabs.js',['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/schoolTabsMobil.js',['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/addClass.js',['position' => View::POS_END]);
$this->registerJsFile('/modules/admin/cabinet_assets/js/hideVideo.js',['position' => View::POS_END]);