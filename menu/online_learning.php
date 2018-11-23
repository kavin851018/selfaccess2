<?php
$learning = array(
			'Easy test'=>'easytest',
			'Live ABC'=>'liveabc',
			//'My ET'=>'myet',
			//'Pratical Writing'=>'praticalwriting',
			'GEPT 全民英檢網'=>'gept',
			'Online TOEIC'=>'toeic',
			'Online TOEFL'=>'toefl'
			);
?>
<div class="ui main container tab" data-tab="online_learning">
	<div class="ui segment data">
		<div class="ui header">線上學習</div>
		<p>在自學園有市面上非常受歡迎的線上學習軟體。只要是本校學生及教職員，並事先申請使用帳號，就可以在任何地方上網使用這些學習軟體。<br>自學園也提供線上GEPT、TOEIC、 托福iBT測驗模擬，你需要更多考試資料嗎?</p>
		<div class="ui top attached tabular menu">
			<?php
			foreach ($learning as $desc => $link) {
				if($link=='easytest')
					echo '<a class="item active" data-tab="'.$link.'">'.$desc.'</a>';
				else
					echo '<a class="item" data-tab="'.$link.'">'.$desc.'</a>';
			}
			?>
		</div>
		<div class="ui bottom attached tab segment active" data-tab="easytest">
			<p>Easy test為最新購置的線上學習平台，內有看影片學英語以及新多益以及托福iBT模擬試題可供使用或練習。影片的主題涵蓋生活層面，例如：交通，旅遊，飲食，電影等等，影片的語音速度以及字幕出現與否可以自行調整。之後將陸續提供多元化的內容供本校人士自我學習。包含2018年3月起實施的新制TOEIC模擬測驗題庫</p>
			<p><i class="right triangle icon"></i><a href="https://easytest.nsysu.edu.tw/" target="_blank">Easy test線上學習測驗平台</a></p>
		</div>
		<div class="ui bottom attached tab segment" data-tab="liveabc">
			<p>Live ABC 是現在英語學習雜誌的出版社之一，目前出版的刊物包括 ABC 互動英語、Live 互動英語、All 互動英語、biz 互動英語、以及CNN 互動英語。登入Live ABC的線上學習後，這些雜誌的互動英語影片、文章內容、生字、以及小考題目都可以看得到。同學可以在家自己看影片練習聽力和理解能力，也可以以此當題材與小老師互動。師長們也可以利用這個軟體資源，當做教學的一部分。之中的使用介面簡單易懂，使用時可以選擇是否要有字幕，也可以調慢影音播放速度，還有錄音跟讀的功能，是一套自學、教學都好用的軟體。 另外，當要開啟LiveABC前，請先注意最好以IE流覽器來開啟，以避免其不必要的問題！謝謝！！</p>
			<p><i class="right triangle icon"></i><a href="http://140.117.44.78/Livegept/login/login.php" target="_blank">Live ABC英語學習系統</a></p>
			<table class="ui table">
				<tr valign="top">
					<td class="text-right" width="12%">使用步驟：</td>
					<td>
						<a href="http://140.117.44.78/Livegept" target="_blank">由此</a>或點右圖登入<i class="right arrow icon"></i><br>
						<span style="color:red;">＊首次使用，請依首頁說明下載並安裝需求元件！</span><!--br>
						如無法正常運作，請<a href="http://zephyr.nsysu.edu.tw/self_access/newweb/[2015-04-24]LiveABC_CD.zip">點此</a>重新下載並安裝軟體-->
					</td>
					<td rowspan="2"><a href="http://140.117.44.78/Livegept" target="_blank"><img class="ui right floated image" width="200px" src="http://zephyr.nsysu.edu.tw/self_access/newweb/image/liveabcs.gif"></a></td>
				</tr>
				<tr valign="top">
					<td class="text-right">帳號密碼：</td>
					<td>
						1. 校內學生：預設帳號、密碼同學號 (第一碼為小寫英文)<br>
						2. 教職員：請直接由<a href="http://zephyr.nsysu.edu.tw/self_access/forum/login_modify.php" target="_blank">「申請/管理帳號」</a>區註冊新帳號，並來信告知以為您認證。<br>
						&nbsp;&nbsp; ＊如須變更密碼，請至<a href="http://zephyr.nsysu.edu.tw/self_access/forum/login_modify.php" target="_blank">修改資料區</a>，並請同時更新E-mail以利新密碼確認。
					</td>
				</tr>
				<tr valign="top">
					<td class="text-right">提供功能：</td>
					<td>
						<i class="right triangle icon"></i>英語情境小劇場(19回)、商用英語等(6回)、卓越管理專訪(6回)、看CNN學英語(39回)等<br><br>
						<a href="http://zephyr.nsysu.edu.tw/self_access/newweb/guide_liveabc_gept.doc">操作說明</a>
					</td>
				</tr>
			</table>
			<div class="ui segment">
				<p style="font-weight:bold;font-size:16px;">資源下載</p>
				<p><a href="http://zephyr.nsysu.edu.tw/self_access/newweb/guide_liveabc_gept.doc">LiveABC, GEPT Quick Guide</a></p>
			</div>
		</div>
		<div class="ui bottom attached tab segment" data-tab="myet">
			<p>My ET 是一套以口說練習為主的訓練軟體。配合各式各樣不同內容的課程，My ET 讓學習者練習發音、閱讀、並且能從發音、音調、節拍、音量四方面，給予語音評量與分析。每個學習者更有自己的成績管理區，除了可以看到自己已經完成的課程與成績，更能了解更新自己的學習狀況。中山大學的師長們，只要用教師號碼申請帳號以及密碼，就可以在線上管理班級內的學生帳號與成績。</p>
			<table class="ui table">
				<tr valign="top">
					<td class="text-right" width="12%">使用步驟：</td>
					<td>
						<!--a href="http://www.myet.com/LaunchMyET/zh-TW/LaunchMyET.asp?TargetServerKey=TWN-NSYSU" target="_blank">由此</a>登入，或擊點電腦桌面<a href="http://www.myet.com/LaunchMyET/zh-TW/LaunchMyET.asp?TargetServerKey=TWN-NSYSU" target="_blank">My ET捷徑圖示</a>啟用。<br-->
						<span style="color:red;">＊首次使用，請下載並安裝 </span><a href="http://www.myet.com/MyETWeb/Download.aspx">點擊下載My ET</a><br>
						1. 點擊電腦桌面MyET捷徑圖示啟用<br>
						2. 軟體顯示「請選擇登入伺服器」，於「台灣各大專院校、高中專屬伺服器」選擇「台灣」、「高雄市」、「國立中山大學-英語文教學中心」，點擊進入<br>
						3. 選擇 學生「登入學習」，帳密皆為學號
					</td>
					<td rowspan="2"><!--a href="http://www.myet.com/LaunchMyET/zh-TW/LaunchMyET.asp?TargetServerKey=TWN-NSYSU" target="_blank"><img class="ui right floated image" src="http://zephyr.nsysu.edu.tw/self_access/newweb/image/myet_icon.GIF"></a--></td>
				</tr>
				<tr valign="top">
					<td class="text-right">帳號密碼：</td>
					<td>
						1. 校內學生：預設帳號、密碼同學號 (第一碼為小寫英文)<br>
						2. 教職員：請直接由<a href="http://zephyr.nsysu.edu.tw/self_access/forum/login_modify.php" target="_blank">「申請/管理帳號」</a>區註冊新帳號，並來信告知以為您認證。<br>
						&nbsp;&nbsp; ＊如須變更密碼，請至<a href="http://zephyr.nsysu.edu.tw/self_access/forum/login_modify.php" target="_blank">修改資料區</a>，並請同時更新E-mail以利新密碼確認。
					</td>
				</tr>
				<tr valign="top">
					<td class="text-right">提供功能：</td>
					<td>
						<i class="right triangle icon"></i>全民英檢中級聽力（看圖辨義、問答、簡短對話、全真模擬試題）、全民英檢中級口說（朗讀短文、回答問題、看圖敘述、全真模擬試題）等<br>
						<i class="right triangle icon"></i>彭蒙惠英語一系列課程<br>
						<i class="right triangle icon"></i>國際會議演講英語（打招呼、會議中常用語、主辦單位發言、主持人主席常用語、發言者常用語），包含單句練習、跟讀、自我檢定、Dr.Pimsleur學習法、單字與文法解釋等功能<br>
						<i class="right triangle icon"></i>空中英語教室 來去美國，在美國居住,留學、旅遊之實用而基本的生活會話（銀行開戶、尋找租屋、開車出遊、巴士歷險等11單元），包含單句練習、角色扮演、自我檢定、Dr.Pimsleur學習法、單字與文法解釋等功能<br><br>
						<a href="http://zephyr.nsysu.edu.tw/self_access/newweb/guide_myet.pdf" target="_blank">操作說明</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="ui bottom attached tab segment" data-tab="praticalwriting">
			<p>本教材主要針對各類型英文書信撰寫與相關技巧並提供相關學習資源，讓您快速進入狀況。欲申請帳號，請來信 onlinelearning@mail.nsysu.edu.tw。</p>
			<p><i class="right triangle icon"></i><a href="http://www.clarityenglish.com/institution/TW_NSYSU/index.php?pc=61" target="_blank">Pratical Writing</a></p>
		</div>
		<div class="ui bottom attached tab segment" data-tab="gept">
			<p>設有線上GEPT考場、個人練習區（含中級、中高級之聽力與閱讀題目），並可顯示個人練習記錄，同學在練習完之後，系統可自動批改、評分。另外尚有學習資源區，內容包含情境式互動英語 、圖解字典、Live 電子報、看聖經學英語等課程。有計畫要考全民英檢的同學，歡迎多加利用。</p>
			<p><i class="right triangle icon"></i><a href="http://140.117.44.78/Livegept/login/login.php" target="_blank">GEPT 全民英檢網</a></p>
			<table class="ui table">
				<tr valign="top">
					<td class="text-right" width="12%">使用步驟：</td>
					<td>
						<a href="http://140.117.44.78/Livegept/login/login.php" target="_blank">由此</a>登入<br>
						<span style="color:red;">＊首次使用，請依首頁說明下載並安裝需求元件！</span><br>
					</td>
				</tr>
				<tr valign="top">
					<td class="text-right">帳號密碼：</td>
					<td>
						1. 校內學生：預設帳號、密碼同學號 (第一碼為小寫英文)<br>
						2. 教職員：請直接由<a href="http://zephyr.nsysu.edu.tw/self_access/forum/login_modify.php" target="_blank">「申請/管理帳號」</a>區註冊新帳號，並來信告知以為您認證。<br>
						&nbsp;&nbsp; ＊如須變更密碼，請至<a href="http://zephyr.nsysu.edu.tw/self_access/forum/login_modify.php" target="_blank">修改資料區</a>，並請同時更新E-mail以利新密碼確認。
					</td>
				</tr>
				<tr valign="top">
					<td class="text-right">提供功能：</td>
					<td>
						<i class="right triangle icon"></i>線上GEPT考場、個人練習區、個人練習記錄、學習資源等<br>
						<i class="right triangle icon"></i>線上TOEIC考場、個人練習區、個人練習記錄等<br><br>
						<a href="http://zephyr.nsysu.edu.tw/self_access/newweb/guide_liveabc_gept.doc">操作說明</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="ui bottom attached tab segment" data-tab="toeic">
			<p>設有線上TOEIC考場、個人練習區，含聽力與閱讀兩種類型（200題單選，總分介於10~990），並可顯示個人練習記錄，同學在練習完之後，系統可自動批改、評分。 TOEIC多益測驗是針對英語非母語人士所設計之英語能力測驗，其測驗分數反映受測者在國際職場環境中與他人以英語溝通的熟稔程度，不過參加本測驗並不需要具備專業的知識或字彙，因為測驗內容以日常使用之英語為主。</p>
			<p><i class="right triangle icon"></i><a href="http://140.117.44.78/Livegept/login/login.php" target="_blank">Online TOEIC 多益測驗網</a></p>
			<table class="ui table">
				<tr valign="top">
					<td class="text-right" width="12%">使用步驟：</td>
					<td>
						<a href="http://140.117.44.78/Livegept/login/login.php" target="_blank">由此</a>登入<br>
						<span style="color:red;">＊首次使用，請依首頁說明下載並安裝需求元件！</span><br>
					</td>
				</tr>
				<tr valign="top">
					<td class="text-right">帳號密碼：</td>
					<td>
						1. 校內學生：預設帳號、密碼同學號 (第一碼為小寫英文)<br>
						2. 教職員：請直接由<a href="http://zephyr.nsysu.edu.tw/self_access/forum/login_modify.php" target="_blank">「申請/管理帳號」</a>區註冊新帳號，並來信告知以為您認證。<br>
						&nbsp;&nbsp; ＊如須變更密碼，請至<a href="http://zephyr.nsysu.edu.tw/self_access/forum/login_modify.php" target="_blank">修改資料區</a>，並請同時更新E-mail以利新密碼確認。
					</td>
				</tr>
				<tr valign="top">
					<td class="text-right">提供功能：</td>
					<td>
						<i class="right triangle icon"></i>線上GEPT考場、個人練習區、個人練習記錄、學習資源等<br>
						<i class="right triangle icon"></i>線上TOEIC考場、個人練習區、個人練習記錄等<br><br>
						<a href="http://zephyr.nsysu.edu.tw/self_access/newweb/guide_liveabc_gept.doc">操作說明</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="ui bottom attached tab segment" data-tab="toefl">
			<p>本測驗平台目前可透過Easy Test 進入。</p>
			<p><i class="right triangle icon"></i><a href="http://140.117.44.78:8080/index.asp" target="_blank">Online TOEFL 托福測驗</a></p>
		</div>
		<p class="toTop" style="text-align:right;display:none;"><a href="#top">Back to Top</a></p>
	</div>
</div>