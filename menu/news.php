<div class="ui main container tab active" data-tab="news">
	<div class="ui segment data">
		<div class="ui header">最新消息</div>
		<?php
		define("NUM_DESC", 128);
		$displayAmount = 14; //Amount of news to show
		include('db_connect.php');

		//list all records.
		$sql = 'SELECT * FROM `news` ORDER BY `build_date` DESC';
		$result = mysql_query($sql,$self_access_conn);
		$n = mysql_num_rows($result);

		@$view_all=$_GET["v"];
		



		if( !isset($view_all) ) $view_all = 0;

		if( $n != 0 )
		{
			$loop = 0;
			while( $row = mysql_fetch_array($result) )
			{
				// Select the icon image out from the table 'new_files';
				$sql = "Select filename From news_files Where file_description='icon' AND topic_id='" . $row['topic_id'] . "'";
				$result2 = mysql_query($sql, $self_access_conn) or die(mysql_error());
				$n2 = mysql_num_rows($result2);
				
				// The icon had been uploaded. Show it.
				if( $n2 != 0 )
				{
					$row2 = mysql_fetch_array($result2);
					$icon = "../news_system/attachments/" . $row2['filename'];
				}
				else // The icon had not been uploaded. Show default icon.
					$icon = "../news_system/images/default.gif";

				$topic_id = $row['topic_id']; // Topic Identity
				$topic = iconv('big5','UTF-8',$row['topic']); // Topic
				
				// Description. If the chars of description are more than NUM_DESC, cut it.
				if( strlen($row['description']) < NUM_DESC )
					$description = iconv('big5','UTF-8',$row['description']);
				else
					$description = substr(iconv('big5','UTF-8',$row['description']),0,NUM_DESC) . "......";

				$build_date = $row['build_date'];
				
				echo "<i class='newspaper icon'></i> <b><a href=../news_system/show_news_detail.php?tid=" . $topic_id . " target=_blank>" . $topic . "</a></b><br><br>";
				$loop++;
				if( $view_all == 0 & $loop >= $displayAmount)
				{
					echo "<tr align=top><td align=right colspan=2><a href=../newweb/show_news_list_.php target=_blank>顯示全部</a></td>";
					break;
				}



			}
			if( $view_all == 1 )
				{
				echo "<tr align=top><td align=right colspan=2><a href=index.php?v=0>View Brief</a></td>";
				}	

		}
		else
		{
			echo "<font size=2>目前尚未有任何最新消息，敬請期待。</font>";
		}
		?>
	</div>
</div>