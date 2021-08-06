<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');


$product = getProductList("A");
$product_usd = getProductList("B");

?>

<section id="hero" class="d-flex flex-column justify-content-end align-items-center">

    <div class="pu_main">
        <button class="click_none">CLOSE</button>
        <div class="pu_cont_wrap">
            <div class="pu_cont">
                <h2>ALLOT ALT TOKEN</h2>
                <h2>Incineration</h2>
                <p class="animate__animated animate__fadeInUp">ALLOT 코인이 발행량의 90%를 소각하였습니다.</p>
                <p class="animate__animated animate__fadeInUp">ALLOT Coin incinerated 90% of the issue.</p>
                <p class="animate__animated animate__fadeInUp">2021 . 03 . 30</p>
                <a href="http://al-lot.com/bbs/content.php?co_id=tokenburn"
                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>
    </div>

    <div class="pu_main">
        <button class="click_none">CLOSE</button>
        <div class="pu_cont_wrap">
            <div class="pu_cont" class="animate__animated animate__fadeInUp">
                <img src="<?php echo G5_IMG_URL?>/coinbig_wt.png" alt=""
                    style="max-width:400px; width:230px; margin:10px 0 20px 0">
                <br>
                <h2 data-i18n="INDEX:3_1"></h2>
                <p data-i18n="INDEX:4_1"></p>
                <h2 date-i18n="INDEX:4_2">2021 . 06 . 03</h2>
                <a href="https://www.coinbigcn.com/" class="btn-get-started animate__animated animate__fadeInUp scrollto">COINBIG</a>
            </div>
        </div>
    </div>

    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>ALLOT</span></h2>
                <p class="animate__animated fanimate__adeInUp" data-i18n="INDEX:1"></p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>


        <!-- Slide 2 -->



        <!-- Slide 3 -->
        <!-- <div class="carousel-item">
            <div class="carousel-container">
                <img src="<?php echo G5_IMG_URL?>/bitribe.png" alt="" style="max-width:350px; width:350px"><br>
                <p class="animate__animated animate__fadeInUp" data-i18n="INDEX:4_1" style="word-break:keep-all;"></p>
                <h2 class="animate__animated fanimate__adeInUp">Comming soon</h2>
            </div>
        </div> -->

        <!-- Slide 4 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <img src="<?php echo G5_IMG_URL?>/coinbig_wt.png" alt="" style="max-width:350px"><br>
                <h2 class="animate__animated animate__fadeInDown" data-i18n="INDEX:3_1"></h2>
                <p class="animate__animated animate__fadeInUp" data-i18n="INDEX:4_1"></p>
                <h2 class="animate__animated animate__fadeInDown" data-i18n="INDEX:4_2"></h2>
                <a href="https://www.coinbigcn.com/" target="_blank"
                    class="btn-get-started animate__animated animate__fadeInUp scrollto">COINBIG</a>
            </div>
        </div>

        <div class="carousel-item">
            <div class="carousel-container">
                <img src="<?php echo G5_IMG_URL?>/ALT.png" alt="" style="max-width:170px"><br>
                <h2 class="animate__animated animate__fadeInDown">ALLOT ALT TOKEN</h2>
                <h2 class="animate__animated animate__fadeInDown">Incineration</h2>
                <p class="animate__animated animate__fadeInUp" data-i18n="INDEX:4-2">ALLOT 코인이 발행량의 90%를 소각 하였습니다.</p>
                <p class="animate__animated animate__fadeInUp" data-i18n="INDEX:4-3">10 Billion ALT > 1 Billion ALT</p>
                <h2 class="animate__animated fanimate__adeInUp">2021 - 03 - 30</h2>
                <a href="http://al-lot.com/bbs/content.php?co_id=tokenburn"
                    class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev"> 
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>About</h2>
                <p>Who we are</p>
            </div>

            <div class="row content" data-aos="fade-up">
                <div class="col-lg-6">
                    <p data-i18n="INDEX:5">
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:6"></span>
                        </li>
                        <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:7"></span></li>
                        <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:8"></span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p data-i18n="INDEX:9">
                    </p>
                    <a href="#" onclick="window.open('/theme/basic/wp/ALLOT-en.pdf')" target="_blank"
                        class="btn-learn-more">WHITE PAPER</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-3" data-aos="zoom-in">
                    <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                        <i class="ri-sun-line"></i>
                        <h4 class="d-none d-lg-block" data-i18n="INDEX:10">DeFi의 약속과 도전</h4>
                    </a>
                </li>
                <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                    <a class="nav-link" data-toggle="tab" href="#tab-2">
                        <i class="ri-body-scan-line"></i>
                        <h4 class="d-none d-lg-block" data-i18n="INDEX:11">DeFi의 상태</h4>
                    </a>
                </li>
                <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                    <a class="nav-link" data-toggle="tab" href="#tab-3">
                        <i class="ri-gps-line"></i>
                        <h4 class="d-none d-lg-block" data-i18n="INDEX:12">ALLOT과 DeFi</h4>
                    </a>
                </li>
                <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
                    <a class="nav-link" data-toggle="tab" href="#tab-4">
                        <i class="ri-store-line"></i>
                        <h4 class="d-none d-lg-block">PLATFORM</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content" data-aos="fade-up">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3 data-i18n="INDEX:10">DeFi의 약속과 도전</h3>
                            <p class="font-italic" data-i18n="INDEX:13">
                                오늘날 금융 서비스는 중요한 서비스를 제공하고 있지만 매우 높은 비용으로 많은 핀 테크 개발에도 불구하고 다음과 같은 근본적인 문제가 지속됩니다.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:14">높은 거래 비용. 규제 요구 사항,
                                        복잡한 상호 운용성 문제가있는 레거시 시스템 및
                                        대규모 기관의 제어로 인해 은행 및 금융 서비스의 평균 사용자에게는 거래 수수료가 높습니다. 중개인이 필요한 서비스는 에이전트 및 기타 유형의
                                        중개인이
                                        관여하기 때문에 훨씬 더 비쌉니다.</span></li>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:15">특히 국제 거래의 경우 느린 거래.
                                        이론적으로는 컴퓨터가 거래하는 데 몇 분 밖에
                                        걸리지 않지만 한 기관에서 다른 기관으로 돈을 옮기는 데는 한 국가 내에서 몇 시간이 걸리고 국가 간에는 며칠이 걸릴 수 있습니다.</span>
                                </li>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:16">자금 세탁 및 관련 범죄를 줄이기위한
                                        법률에도 불구하고 현재 시스템이나 AML이
                                        실제로 자금 세탁을 줄인다는 증거는 거의 없습니다.</span></li>
                            </ul>
                            <p data-i18n="INDEX:17">
                                이러한 이유로 많은 투자자들이 투자의 일부를 암호 화폐로 옮기기 시작했습니다. 암호 화폐는 정의상 기존 시스템이 제공 할 수없는 완전한 투명성을 가지고
                                있습니다. 또한 필요한 행정 및 관료의 양이 최소화됩니다.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="img/features-1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3 data-i18n="INDEX:11">DeFi의 상태</h3>
                            <p data-i18n="INDEX:18">
                                탈 중앙화 금융 (DeFi)의 현재 상태는 범용 블록 체인으로 채워지며, 대부분은 체인에서 스마트 계약 개발을위한 튜링 완전한 명령 세트를 제공합니다. 많은
                                프로그래밍 언어에 적합하지만, 튜링 완전 스마트 계약 언어에 대한 독단적 인 추구는 블록 체인의 확장 성, 보안 및 견고성에 관한 다양한 문제를 초래했습니다.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:19">Ethereum, EOS 및
                                        TRON과 같은 네트워크에있는 엄청난 양의 dApp은
                                        네트워크의 다른 dApp에 잠재적 (또는 입증 된) 영향을 미칩니다.</span></li>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:20">심각한 금융 유형의 dApp의 경우
                                        네트워크가 책임감 있고 안전한 방식으로 유지 및
                                        관리되고 있음을 아는 것이 중요합니다. 게임, 도박 및 기타 덜 "미션 크리티컬"앱으로 가득 찬 블록 체인을 갖는 것은 궁극적으로 블록 체인의
                                        개발과
                                        방향에 영향을 미칠 것입니다.</span></li>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:21">Turing-complete 명령
                                        세트를 사용하려면 프로그래머가 모든 종류의 앱을
                                        개발하기 위해 복잡한 프로그램을 만들어야합니다.</span></li>
                            </ul>
                            <p class="font-italic" data-i18n="INDEX:22">
                                DeFi 앱용 범용 블록 체인의 한계로 인해이 시장에 서비스를 제공 할 수있는 시장 기회가 열렸습니다. 암호 화폐 모멘텀이 계속 상승하고 있지만 현재 대부분의
                                애플리케이션은 여전히 ​​이더 리움에 있습니다. 네트워크에 대한 우려로 인해 일부 주요 프로젝트는 이미 대체 또는 추가 블록 체인 포팅 또는 작업을
                                고려하게되었습니다.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="img/features-2.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3 data-i18n="INDEX:12">ALLOT과 DeFi</h3>
                            <p class="font-italic" data-i18n="INDEX:23">

                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:24"></span>
                                </li>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:25">
                                    </span>

                                </li>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:26"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="img/features-3.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>PLATFORM</h3><BR></BR>
                            <p class="font-italic">
                                ALLOT PLATFORM
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:27"></span></li>
                                <BR></BR>
                                <p class="font-italic">
                                    USD PLATFORM
                                </p>
                                <li><i class="ri-check-double-line"></i> <span data-i18n="INDEX:28"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="img/features-4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-out">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3>WHITE PAPER</h3>
                    <p data-i18n="INDEX:29"></p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#" onclick="window.open('/theme/basic/wp/ALLOT-en.pdf')"
                        target="_blank">WHITE PAPER</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Why DeFi?</h2>
                <p>Advantages of DeFi</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="zoom-in-left">
                        <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="" data-i18n="INDEX:30"></a></h4>
                        <p class="description" data-i18n="INDEX:31">
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                        <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="" data-i18n="INDEX:32"></a></h4>
                        <p class="description" data-i18n="INDEX:33">
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                        <div class="icon"><i class="las la-file-alt" style="color: #3fcdc7;"></i></div>
                        <h4 class="title"><a href="" data-i18n="INDEX:34"></a></h4>
                        <p class="description" data-i18n="INDEX:35">
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
                        <div class="icon"><i class="las la-tachometer-alt" style="color:#41cf2e;"></i></div>
                        <h4 class="title"><a href="" data-i18n="INDEX:36"></a></h4>
                        <p class="description" data-i18n="INDEX:37">
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
                        <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
                        <h4 class="title"><a href="" data-i18n="INDEX:38"></a></h4>
                        <p class="description" data-i18n="INDEX:39">
                        </p>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
                        <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore, cum
                            soluta nobis est eligendi</p>
                    </div>
                </div> -->
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Portfolio</h2>
          <p>What we've done</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Testimonials</h2>
                <p>What they are saying about us</p>
            </div>

            <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <span data-i18n="INDEX:40"></span>
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="" class="testimonial-img" alt="">
                    <!-- <h3>메이커다오(MakerDAO)</h3> -->
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <span data-i18n="INDEX:41"></span>
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="" class="testimonial-img" alt="">
                    <!-- <h3>유주용(CSO)</h3> -->
                    <!-- <h4>1</h4> -->
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <span data-i18n="INDEX:42"></span>
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="" class="testimonial-img" alt="">
                    <!-- <h3>1</h3>
                    <h4>1</h4> -->
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <span data-i18n="INDEX:43"></span>
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="" class="testimonial-img" alt="">
                    <!-- <h3>1</h3>
                    <h4>1</h4> -->
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        <span data-i18n="INDEX:44"></span>
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="" class="testimonial-img" alt="">
                    <!-- <h3>1</h3>
                    <h4>1</h4> -->
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>ALLOT</h2>
                <p>Budget distribution</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="member" data-aos="fade-up">
                        <div class="member-img">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Development</h4>
                            <div class="price_right">
                                <div class="chart chart1" data-percent="40"><span
                                        class="title-chart">40%<span></span></span>
                                </div>
                                <p data-i18n="INDEX:45">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Platform Operating Costs</h4>
                            <div class="price_right">
                                <div class="chart chart1" data-percent="30"><span
                                        class="title-chart">30%<span></span></span>
                                </div>
                                <p data-i18n="INDEX:46"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Marketing expenses</h4>
                            <div class="price_right">
                                <div class="chart chart1" data-percent="20"><span
                                        class="title-chart">20%<span></span></span>
                                </div>
                                <p data-i18n="INDEX:47"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Administrative expenses</h4>
                            <div class="price_right">
                                <div class="chart chart1" data-percent="10"><span
                                        class="title-chart">10%<span></span></span>
                                </div>
                                <p data-i18n="INDEX:48">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Staking</h2>
                <p>ALLOT Staking</p><span data-i18n="INDEX:4-1"></span>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6" style="margin:10px 0">
                    <div class="box" data-aos="zoom-in">
                        <h3>
                            3,000 ALT
                        </h3>
                        <h4><sup>ALT</sup>
                            3,000<span> /
                                60day</span></h4>
                        <ul>
                            <li>Rate :
                                15%</li>
                            <li>
                                Comming soon</li>
                            <li>REWARD ALL : 45 ALT</li>
                            <li>REWARD DAY : 0.75 ALT</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy alert1">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="margin:10px 0">
                    <div class="box" data-aos="zoom-in">
                        <h3>
                            6,000 ALT
                        </h3>
                        <h4><sup>ALT</sup>
                            6,000<span> /
                                60day</span></h4>
                        <ul>
                            <li>Rate :
                                20%</li>
                            <li>
                                Comming soon</li>
                            <li>REWARD ALL : 120 ALT</li>
                            <li>REWARD DAY : 2 ALT</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy alert1">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="margin:10px 0">
                    <div class="box" data-aos="zoom-in">
                        <h3>
                            12,000 ALT
                        </h3>
                        <h4><sup>ALT</sup>
                            12,000<span> /
                                120day</span></h4>
                        <ul>
                            <li>Rate :
                                40%</li>
                            <li>
                                Comming soon</li>
                            <li>REWARD ALL : 480 ALT</li>
                            <li>REWARD DAY : 4 ALT</li>

                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy alert1">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="margin:10px 0">
                    <div class="box" data-aos="zoom-in">
                        <h3>
                            24,000 ALT
                        </h3>
                        <h4><sup>ALT</sup>
                            24,000<span> /
                                120day</span></h4>
                        <ul>
                            <li>Rate :
                                50%</li>
                            <li>
                                Comming soon</li>
                            <li>REWARD ALL : 1200 ALT</li>
                            <li>REWARD DAY : 10 ALT</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy alert1">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Pricing Section -->


    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Staking</h2>
                <p>USD Staking</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6" style="margin:10px 0">
                    <div class="box" data-aos="zoom-in">
                        <h3>
                            5,000 USD
                        </h3>
                        <h4><sup>USD</sup>
                            5,000<span> /
                                60day</span></h4>
                        <ul>
                            <li>Rate :
                                6%</li>
                            <li>
                                Comming soon</li>
                            <li>REWARD ALL : 300 USD</li>
                            <li>REWARD DAY : 5 USD</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy alert1">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="margin:10px 0">
                    <div class="box" data-aos="zoom-in">
                        <h3>
                            10,000 USD
                        </h3>
                        <h4><sup>USD</sup>
                            10,000<span> /
                                60day</span></h4>
                        <ul>
                            <li>Rate :
                                9%</li>
                            <li>
                                Comming soon</li>
                            <li>REWARD ALL : 900 USD</li>
                            <li>REWARD DAY : 15 USD</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy alert1">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="margin:10px 0">
                    <div class="box" data-aos="zoom-in">
                        <h3>
                            20,000 USD
                        </h3>
                        <h4><sup>USD</sup>
                            20,000<span> /
                                120day</span></h4>
                        <ul>
                            <li>Rate :
                                21%</li>
                            <li>
                                Comming soon</li>
                            <li>REWARD ALL : 4,200 USD</li>
                            <li>REWARD DAY : 35 USD</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy alert1">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" style="margin:10px 0">
                    <div class="box" data-aos="zoom-in">
                        <h3>
                            40,000 USD
                        </h3>
                        <h4><sup>USD</sup>
                            40,000<span> /
                                120day</span></h4>
                        <ul>
                            <li>Rate :
                                24%</li>
                            <li>
                                Comming soon</li>
                            <li>REWARD ALL : 9,600 USD</li>
                            <li>REWARD DAY : 80 USD</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy alert1">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </div>

            <ul class="faq-list">

                <li data-aos="fade-up" data-aos-delay="100">
                    <a data-toggle="collapse" class="" href="#faq1"><span data-i18n="INDEX:49"></span> <i
                            class="icofont-simple-up"></i></a>
                    <div id="faq1" class="collapse show" data-parent=".faq-list">
                        <p data-i18n="INDEX:50">

                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <a data-toggle="collapse" href="#faq2" class="collapsed"><span data-i18n="INDEX:51"></span> <i
                            class="icofont-simple-up"></i></a>
                    <div id="faq2" class="collapse" data-parent=".faq-list">
                        <p data-i18n="INDEX:52">

                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <a data-toggle="collapse" href="#faq3" class="collapsed"><span data-i18n="INDEX:53"></span> <i
                            class="icofont-simple-up"></i></a>
                    <div id="faq3" class="collapse" data-parent=".faq-list">
                        <p data-i18n="INDEX:54">

                        </p>
                    </div>
                </li>
            </ul>

        </div>
    </section>
    <!-- End F.A.Q Section -->


    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
    End Contact Section -->
</main>

<script>
    $(".cser").click(function () {
        $(".btn_team").slideToggle();
    });
</script>

<script>
    $(".click_none").click(function () {
        $(this).parent(".pu_main").css("display", "none");
    });
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>