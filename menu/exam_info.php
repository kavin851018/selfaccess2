<?php
$test = array(
		'TOEIC<br>多益'=>'toeic',
		'TOEFL<br>托福'=>'toefl',
		'IELTS<br>雅思'=>'ielts',
		'GEPT<br>全民英檢'=>'gept',
		'Cambridge Main Suite<br>劍橋大學英語能力<br>認證分級測驗'=>'cms',
		'BULATS<br>劍橋國際<br>商務英語'=>'bulats',
		'G-TELP<br>通用國際英檢'=>'g-telp'
		);
?>
<div class="ui main container tab" data-tab="exam_info">
	<div class="ui segment data">
		<div class="ui header">考試資訊</div>
		<p>想了解自己的英文能力、得到英文檢定認證、或出國唸書嗎？在這裡自學園提供與英語考試有關的資訊和網頁，歡迎各位善加利用。 本訊息僅供參考，最新資訊來源請參閱下列官方網站。</p>
		<div class="ui blue top attached menu text-center">
			<?php
			foreach ($test as $desc => $link) {
				if($link=='toeic') //active on load
					echo '<a class="item active" data-tab="'.$link.'">'.$desc.'</a>';
				else
					echo '<a class="item" data-tab="'.$link.'">'.$desc.'</a>';
			}
			?>
		</div>
		<div class="ui bottom attached tab segment active" data-tab="toeic">
			<table class="ui celled table">
				<thead class="text-center">
					<tr>
						<th>名稱</th>
						<th>內容</th>
						<th>費用</th>
						<th>測驗訊息</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center"><a href="http://www.toeic.com.tw/" target="_blank">TOEIC<br>多益</a></td>
						<td><i class="right triangle icon"></i>聽力測驗45分鐘<br><i class="right triangle icon"></i>閱讀測驗75分鐘</td>
						<td>網路報名 NT1,540<br>臨櫃報名 NT$1,800</td>
						<td class="text-center"><a href="http://www.toeic.com.tw/" target="_blank">TOEIC多益英語測驗 － 台灣區官方網站</a></td>
					</tr>
				</tbody>
			</table>
			<!--p style="text-align:right;font-size:12px;"><i class="right triangle icon"></i><a href="http://service.toeic.com.tw/URLEDU/login.jsp?Tax=nsysu" target="_blank">中山大學教職員生 專屬報名網頁連結</a><i class="left triangle icon"></i></p-->
		</div>
		<div class="ui bottom attached tab segment" data-tab="toefl">
			<table class="ui celled table">
				<thead class="text-center">
					<tr>
						<th colspan="2">名稱</th>
						<th>內容</th>
						<th>費用</th>
						<th>測驗訊息</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rowspan="2" class="text-center"><a href="http://www.toefl.com.tw/" target="_blank">TOEFL<br>托福</a></td>
						<td>ITP</td>
						<td><i class="right triangle icon"></i>聽力測驗35分鐘<br><i class="right triangle icon"></i>文法結構測驗25分鐘<br><i class="right triangle icon"></i>閱讀測驗55分鐘</td>
						<td>網路報名 NT$1,160<br>臨櫃報名 NT$1,420</td>
						<td class="text-center"><a href="http://www.toefl.com.tw/itp/index.jsp" target="_blank">ETS TOEFL ITP / 托福紙筆測驗</a></td>
					</tr>
					<tr>
						<td>iBT</td>
						<td><i class="right triangle icon"></i>閱讀60-80分鐘<br><i class="right triangle icon"></i>聽力60-90分鐘<br><i class="right triangle icon"></i>口說20分鐘<br><i class="right triangle icon"></i>寫作50分鐘</td>
						<td>網路報名 US$170</td>
						<td class="text-center"><a href="http://www.toefl.com.tw/iBT/index.jsp" target="_blank">ETS TOEFL iBT / 托福網路測驗</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="ui bottom attached tab segment" data-tab="ielts">
			<table class="ui celled table">
				<thead class="text-center">
					<tr>
						<th>名稱</th>
						<th>內容</th>
						<th>費用</th>
						<th>測驗訊息</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center"><a href="https://www.ieltstest.org.tw" target="_blank">IELTS<br>雅思</a></td>
						<td><i class="right triangle icon"></i>聽力30分鐘+10分鐘<br><i class="right triangle icon"></i>閱讀60分鐘<br><i class="right triangle icon"></i>寫作60分鐘<br><i class="right triangle icon"></i>口說11-14分鐘</td>
						<td>NT$6,500</td>
						<td class="text-center"><a href="https://www.ieltstest.org.tw" target="_blank">台灣雅思官方考試中心</a><br><br><a href="http://www.britishcouncil.org/exam" target="_blank">英國文化協會</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="ui bottom attached tab segment" data-tab="gept">
			<table class="ui celled table">
				<thead class="text-center">
					<tr>
						<th colspan="2">名稱</th>
						<th>內容</th>
						<th>費用</th>
						<th>測驗訊息</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rowspan="10" class="text-center"><a href="https://www.gept.org.tw/" target="_blank">GEPT<br>全民英檢</a></td>
						<td rowspan="2" class="text-center">初級</td>
						<td>初試<br><i class="right triangle icon"></i>聽力約20分鐘<br><i class="right triangle icon"></i>閱讀35分鐘</td>
						<td>NT$500</td>
						<td rowspan="10" class="text-center"><a href="https://www.gept.org.tw/" target="_blank">全民英檢網</a></td>
					</tr>
					<tr>
						<td>複試<br><i class="right triangle icon"></i>寫作40分鐘<br><i class="right triangle icon"></i>口說約10分鐘</td>
						<td>NT$700</td>
					</tr>
					<tr>
						<td rowspan="2" class="text-center">中級</td>
						<td>初試<br><i class="right triangle icon"></i>聽力約30分鐘<br><i class="right triangle icon"></i>閱讀45分鐘</td>
						<td>NT$710</td>
					</tr>
					<tr>
						<td>複試<br><i class="right triangle icon"></i>寫作40分鐘<br><i class="right triangle icon"></i>口說約15分鐘</td>
						<td>NT$1,200</td>
					</tr>
					<tr>
						<td rowspan="2" class="text-center">中高級</td>
						<td>初試<br><i class="right triangle icon"></i>聽力約35分鐘<br><i class="right triangle icon"></i>閱讀50分鐘</td>
						<td>NT$870</td>
					</tr>
					<tr>
						<td>複試<br><i class="right triangle icon"></i>寫作50分鐘<br><i class="right triangle icon"></i>口說約15-20分鐘</td>
						<td>NT$1,350</td>
					</tr>
					<tr>
						<td rowspan="2" class="text-center">高級</td>
						<td>初試<br><i class="right triangle icon"></i>聽力約55分鐘<br><i class="right triangle icon"></i>閱讀20分鐘+50分鐘</td>
						<td>NT$1,800</td>
					</tr>
					<tr>
						<td>複試（紙筆/電腦）<br><i class="right triangle icon"></i>寫作60分鐘+45分鐘<br><i class="right triangle icon"></i>口說約25-30分鐘</td>
						<td>NT$2,900</td>
					</tr>
					<tr>
						<td class="text-center">優級</td>
						<td><i class="right triangle icon"></i>整合式寫作測驗共3小時<br><i class="right triangle icon"></i>整合式口說測驗約50分鐘</td>
						<td >視檢測內容、報考人數而定</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="ui bottom attached tab segment" data-tab="cms">
			<table class="ui celled table">
				<thead class="text-center">
					<tr>
						<th colspan="2">名稱</th>
						<th>內容</th>
						<th>費用</th>
						<th>測驗訊息</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rowspan="5" class="text-center"><a href="https://www.lttc.ntu.edu.tw/MSmain.htm" target="_blank">Cambridge<br>Main Suite<br>劍橋大學英語能力<br>認證分級測驗</a></td>
						<td class="text-center">初級 KET<br>(台北、台中、高雄)</td>
						<td><i class="right triangle icon"></i>閱讀與寫作70分鐘<br><i class="right triangle icon"></i>聽力30分鐘<br><i class="right triangle icon"></i>口說每組8-10分鐘</td>
						<td>NT$2,000</td>
						<td rowspan="5" class="text-center"><a href="https://www.lttc.ntu.edu.tw/MSmain.htm" target="_blank">LTTC語言訓練測驗中心</a><br><br><a href="http://www.uneedq.com/ms.html" target="_blank">瀀尼課UneedQ</a></td>
					</tr>
					<tr>
						<td class="text-center">中級 PET<br>(台北、台中、高雄)</td>
						<td><i class="right triangle icon"></i>閱讀與寫作90分鐘<br><i class="right triangle icon"></i>聽力約30分鐘<br><i class="right triangle icon"></i>口說每組10-12分鐘</td>
						<td>NT$2,200</td>
					</tr>
					<tr>
						<td class="text-center">中高級 FCE<br>(僅於台北舉辦)</td>
						<td><i class="right triangle icon"></i>閱讀60分鐘<br><i class="right triangle icon"></i>寫作80分鐘<br><i class="right triangle icon"></i>英語用法45分鐘<br><i class="right triangle icon"></i>聽力約40分鐘<br><i class="right triangle icon"></i>口說每組14分鐘</td>
						<td>NT$3,500</td>
					</tr>
					<tr>
						<td class="text-center">高級 CAE</td>
						<td><i class="right triangle icon"></i>閱讀75分鐘<br><i class="right triangle icon"></i>寫作90分鐘<br><i class="right triangle icon"></i>英語用法60分鐘<br><i class="right triangle icon"></i>聽力約40分鐘<br><i class="right triangle icon"></i>口說每組15分鐘</td>
						<td></td>
					</tr>
					<tr>
						<td class="text-center">優級 CPE</td>
						<td><i class="right triangle icon"></i>閱讀90分鐘<br><i class="right triangle icon"></i>寫作120分鐘<br><i class="right triangle icon"></i>英語用法90分鐘<br><i class="right triangle icon"></i>聽力約40分鐘<br><i class="right triangle icon"></i>口說每組19分鐘</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="ui bottom attached tab segment" data-tab="bulats">
			<table class="ui celled table">
				<thead class="text-center">
					<tr>
						<th colspan="2">名稱</th>
						<th>內容</th>
						<th>費用</th>
						<th>測驗訊息</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td rowspan="4" class="text-center"><a href="https://www.lttc.ntu.edu.tw/bulatsmain.htm" target="_blank">BULATS<br>劍橋國際商務英語</a></td>
						<td>標準測驗</td>
						<td><i class="right triangle icon"></i>聽力、閱讀與用法<br><i class="right triangle icon"></i>110分鐘</td>
						<td>一般身分 NT$1,300<br>學生身分 NT$1,170<br>低收入戶 NT$650</td>
						<td rowspan="4" class="text-center"><a href="https://www.lttc.ntu.edu.tw/bulatsmain.htm" target="_blank">LTTC語言訓練測驗中心</a></td>
					</tr>
					<tr>
						<td>電腦測驗</td>
						<td><i class="right triangle icon"></i>聽力、閱讀與用法<br><i class="right triangle icon"></i>85分鐘</td>
						<td>一般身分 NT$1,300<br>學生身分 NT$1,040<br>低收入戶 NT$650</td>
					</tr>
					<tr>
						<td>寫作測驗</td>
						<td><i class="right triangle icon"></i>一篇短信或留言及<br><i class="right triangle icon"></i>一篇長信或報告<br><i class="right triangle icon"></i>45分鐘</td>
						<td>NT$1,500</td>
					</tr>
					<tr>
						<td>口說測驗</td>
						<td><i class="right triangle icon"></i>一對一面試對話、意見表達、資訊交流討論<br><i class="right triangle icon"></i>12分鐘</td>
						<td>NT$1,500</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="ui bottom attached tab segment" data-tab="g-telp">
			<p>測驗詳情請參考 <a href="http://www.g-telp.com.tw" target="_blank">http://www.g-telp.com.tw</a></p>
			<table class="ui celled table">
				<thead class="text-center">
					<tr>
						<th>名稱</th>
						<th>內容</th>
						<th>費用</th>
						<th width="32%">測驗訊息</th>
						<th>報名方式</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Level 5</td>
						<td><i class="right triangle icon"></i>文法、聽力、閱讀<br><i class="right triangle icon"></i>約50分鐘</td>
						<td rowspan="5">筆試 Level 3-5 NT$960<br>筆試 Level 1-2 NT$1,250<br>口試 NT$1,250</td>
						<td rowspan="5"><i class="right triangle icon"></i>大會考地點及日期依總公司公告。<br><i class="right triangle icon"></i>專案方式測驗地點及日期依學校、機關、團體之需求辦理。</td>
						<td rowspan="5"><i class="right triangle icon"></i>網路報名<br><i class="right triangle icon"></i>通訊報名<br><詳情請參考報名須知></td>
					</tr>
					<tr>
						<td>Level 4</td>
						<td><i class="right triangle icon"></i>文法、聽力、閱讀<br><i class="right triangle icon"></i>約60分鐘</td>
					</tr>
					<tr>
						<td>Level 3</td>
						<td><i class="right triangle icon"></i>文法、聽力、閱讀<br><i class="right triangle icon"></i>約75分鐘</td>
					</tr>
					<tr>
						<td>Level 2</td>
						<td><i class="right triangle icon"></i>文法、聽力、閱讀<br><i class="right triangle icon"></i>約90分鐘</td>
					</tr>
					<tr>
						<td>Level 1</td>
						<td><i class="right triangle icon"></i>文法、聽力、閱讀<br><i class="right triangle icon"></i>約105分鐘</td>
					</tr>
				</tbody>
			</table>

			<div class="ui medium header">什麼是G-TELP (資料來源：美國G-TELP通用國際英文能力分級檢定<a href="http://www.g-telp.com.tw" target="_blank">www.g-telp.com.tw</a>)</div>
			<p>美國通用國際英語能力分級檢定測驗為美國加州聖地牙哥州立大學的國際測試中心 ITSC（Internaitional Testing Service Center）設計研發。於1986年 ~ 2000年設計研發之標準參照屬性之英檢工具，2001年以後移轉 ACT Inc.(Andujar Communication Technologies Inc) 繼續研發。</p>
			<div class="ui bulleted list">
				<div class="item">G-TELP 在台灣已送人事行政局G-TELP與CEF參照備核作為公務人員職務陞等及考績加分之參考，一般企業應徵職位參考，並由國內大專院校系所推薦加分或畢業門檻工具之一。更期盼藉此工具，建立台灣地區與世界潮流連結，達到提昇台灣與國際化英語接軌之目的。</div>
				<div class="item">旨在協助全球非以英語為母語的學習者，確實評估自身的英語能力，進而瞭解學習障礙並強化所學，終能活用英語。</div>
				<div class="item">經全球數十個國家的廣泛應用測試後，已有良好的信效度與準確度。</div>
				<div class="item">於我國自行研發之全民英檢，美國通用國際英語能力分級檢定（General Test of English Language Proficiency）測驗亦為一效標參照測驗，將效標訂在75％。</div>
			</div>
			
			<div class="ui medium header">測驗項目</div>
			<p>包含文法、聽力、字彙及閱讀三大部分，依程度區分為五級(Level5至Level1)各級考試之標準範圍非常明確；且依不同級數，診斷不同的能力指標，三部份之成績均高於75分以上者，即頒發證照，確認該級數之英語能力。</p>

			<div class="ui medium header">對照教育部推薦之(CEF)共同參考架構</div>
			<span class="bold underline">Level 1</span>
			<p>適用參加者：適合大學英語系、碩士、研究所及專業人士程度<br>複雜溝通中的專業英語(Authentic English Complex Communication)</p>
			<p>(精通流利級) 對所有聽到、讀到的信息，能輕鬆地作觀想式瞭解。能由不同的口頭書面信息做摘要，再於同一簡報場合中重做論述及說明。甚至能於更複雜的情況下，隨心所欲地自我表達且經準地區別出言外之意。</p>
			<p>評估內容：評估應試者是否有完全獨立使用英語的能力。此級數的應試者影有廣泛接觸以英語為母語人士的經驗，此經驗不是經由旅行，就是曾在國外居住或工作過。</p>
			
			<span class="bold underline">Level 2</span>
			<p>適用參加者：適合大學以上程度<br>一般溝通中的真實級修飾英語(Authentic and Modified English in Normal Communication)</p>
			<p>(高階級) 整體能力分級說明：針對具體及抽象主題的複雜文字，能瞭解其重點。主題涵蓋個人專業領域的技術討論。能時即地以母語做互動，有一定的流暢度且不會感到緊張。能針對相當多的主題撰寫出一份完整詳細的文章，並可針對所提各議題重點做出優缺點說明。</p>
			<p>評估內容：評估應試者在教室情境以外使用英語的能力。此級數之應試者可應付部分真實的英語環境，並且曾接觸以英語為母語的人士，雖然語言學習是在教室中進行，但在大部份的情況下，可以和以英語為母語的人士溝通無礙。</p>

			<span class="bold underline">Level 3</span>
			<p>適用參加者：適合高中二、三年級以上<br>簡單溝通中的修飾英語(Modified English in Simple Communication)</p>
			<p>(進階級) 整體能力分級說明：針對一般職場、學校、休閒等場合，常遇到的熟悉事物時，在收到標準且清晰的信息後，能瞭解其重點。在目標語言地區旅遊時，能應付大部分可能會出現的一般狀況。針對熟悉及私人感興趣之主題能簡單的撰稿。能敘述經驗、事件、夢想、希望及志向，對看法及計畫能簡短地解釋理由及做出說明。</p>
			<p>評估內容：評估應試者的基礎英語溝通能力，此級數之應試者主要在教室中使用英語，但有少數接觸以英文為母語人士的經驗，雖然不是語言的獨立使用者，但可以在有限的真實英語環境中使用。</p>

			<span class="bold underline">Level 4</span>
			<p>適用參加者：適合國中三年級、高中一、二年級以上<br>簡單溝通中的基本英語(Basic English in Simple Communication)</p>
			<p>(基礎級) 整體能力分級說明：能了解大部分切身相關領域的句子及常用詞(例如：非常基本之個人及家族資訊、購物、當地地理環境，工作）。針對單純例行性任務能夠做好溝通工作，此一任務要求簡單直接地對所熟悉例行性的事物交換訊息。能簡單地敘述出個人背景，週遭環境及切身需求試務等狀況。</p>
			<p>評估內容：評估應試者處理基本英語會話的能力。此級數之應試者可用基本的英語客套語表達，例如：使用招呼語，並且能成功以基本的英語文對話交談，雖然應試者在教室外接觸英語的機會有限，但在有限的情況下，可和以英語為母語的人士，用英語簡單的交談。</p>

			<span class="bold underline">Level 5</span>
			<p>適用參加者：適合國中以上或國小程度<br>基本的教室英文(Basic Classroom English)</p>
			<p>(入門級) 整體能力分級說明：能了解並使用熟悉的日常表達方式，及使用非常簡單之詞彙以求滿足基楚需求。能介紹自己及他人並能針對個人背景資料，例如住在哪裡、認識何人以及擁有什麼事物等問題作出回答。能在對方語速緩慢、用詞清晰並提供協助的前提下作簡單的交流。</p>
			<p>評估內容：評估應試者聽、說、讀、寫及辨識基本英語的能力。此級數之應試者在教室少有機會接觸英語，並且只知道語言的基本要素。</p>

			<div class="ui medium header">報名須知</div>
			<div class="ui small header">網路報名</div>
			<p>1. 請至 <a href="http://www.g-telp.com.tw" target="_blank">http://www.g-telp.com.tw</a> 加入會員後按步驟報名<br>2. 列印繳費單至四大超商繳費<br>3. 將繳款收據註明姓名、電話和照片兩張掛號寄至南區辦事處：<span class="underline">804高雄市鼓山區瑞豐街202號2樓</span>或連絡駐區代表親自收取</p>

			
			<div class="ui small header">通訊報名</div>
			<span class="bold underline">個人報名</span>
			<p>將報名表及繳款收據註明姓名電話和照片兩張掛號寄至南區辦事處：<span class="underline">804高雄市鼓山區瑞豐街202號2樓</span>或連絡駐區代表親自收取</p>

			<div class="ui small header">團體報名</div>
			<p>請彙集各人報名表與資料，將繳款收據註明姓名電話和照片兩張掛號寄至南區辦事處：<span class="underline">804高雄市鼓山區瑞豐街202號2樓</span>或連絡駐區代表親自收取</p>

			<span class="bold underline">報名程序</span>
			<p>1. 填寫報名表(需浮貼二吋照片兩張於報名表上)<br>2. 至金融機構繳交報名費<br> ● 郵政劃撥 - 戶名：奇特普文化事業股份有限公司 帳號：19989701<br> ● ATM轉帳 - 銀行名稱：彰化銀行 銀行代碼：009   銀行帳號：56610100304100<br>3. 將上述報名表與繳款收據(註明姓名電話)和照片兩張掛號寄至南區辦事處: <span class="underline">804高雄市鼓山區瑞豐街202號2樓</span>或連絡駐區代表親自收取</p>

			<p>Tel: 0920-280-787 / 0986-571-207<br>Tel: 07-553-8283 / 07-553-6657</p>
		</div>
		<p class="toTop" style="text-align:right;display:none;"><a href="#top">Back to Top</a></p>
	</div>
</div>