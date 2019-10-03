<?php
/*
Plugin Name: wx限制
Description: 限制网站只能在微信浏览器打开，禁止外置浏览器打开！
Author: 诗梦
Author URI:  https://www.mom1.cn/
Version:     1.0
License URI: https://www.mom1.cn/
*/

function wpb_hook_javascript() {
?>
<script>
 var ua = navigator.userAgent.toLowerCase();
        var isWeixin = ua.indexOf('micromessenger') != -1;
        if (!isWeixin) {
            window.location.href = "https://m.mom1.cn/wx.html"
        }
</script>
<?php
}
add_action('wp_head', 'wpb_hook_javascript');
?>
