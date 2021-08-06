<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

?>

<!-- 상단 시작 { -->
<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="/"><img src="<?php echo G5_IMG_URL?>/logo.png" alt=""></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="#" class="alert1">ALLOT STAKING HOME</a></li>


                <!-- 로그인 로그아웃 확인 -->
                <!-- <?php if( ! empty($member['mb_id'])) { ?>
                <li><a href="<?php echo G5_BBS_URL; ?>/logout.php">LOGOUT</a></li>
                <li><a href="http://al-lot.com/bbs/content.php?co_id=mypage">MY PAGE</a></li>
                <?php } else { ?>
                <li><a href="<?php echo G5_BBS_URL; ?>/login.php">LOGIN</a></li>
                <?php }?> -->



                <li class="drop-down INNER"><a href="">Language</a>
                    <ul style="max-width:100%;">
                        <li class="koo" onclick="changeLang('ko-KR');"><a href="#"><img src="<?php echo G5_IMG_URL?>/094-south-korea.svg"
                                    alt="" style="max-width:30px;">KOR</a>
                        <li class="us" onclick="changeLang('en-US');"><a href="#"><img src="<?php echo G5_IMG_URL?>/226-united-states.svg"
                                    alt="" style="max-width:30px;">EN</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
