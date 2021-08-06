<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<footer id="footer">
    <div class="container">
      <h1 class="text-light"><img src="<?php echo G5_IMG_URL?>/logo.png" alt=""></h1>
      <br>
      <div class="social-links">
        <a href="https://t.me/allot_group" target="_blank" class="telegram"><i class="bx bxl-telegram"></i></a>
        <a href="https://medium.com/@allot.master" target="_blank" class="medium"><i class="bx bxl-medium"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<script>
    $(".01").click(function(){
        $(".ADVISOR,.Development,.Operations").slideUp()
        $(".FOUNDER").slideDown()
    })

    $(".02").click(function(){
        $(".FOUNDER,.Development,.Operations").slideUp()
        $(".ADVISOR").slideDown()
    })

    $(".03").click(function(){
        $(".FOUNDER,.ADVISOR,.Operations").slideUp()
        $(".Development").slideDown()
    })

    $(".04").click(function(){
        $(".FOUNDER,.ADVISOR,.Development").slideUp()
        $(".Operations").slideDown()
    })
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>