<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo text_title_ranking_name; ?></h3>
  </div>
  <div class="panel-body">
<table class='table table-striped table-hover' align="center" cellpadding='2' cellspacing='0' width='10%'>
<thead>
    <tr>
      <th width='42' align='center' valign='top' class='topp2'><strong><?php echo text_ranking_num; ?></strong></th>
      <th width='69' align='center' valign='top' class='topp2'><strong><?php echo text_ranking_league; ?></strong></th>
      <th width='60' align='center' valign='top' class='topp2'><strong><?php echo text_ranking_level; ?></strong></th>
      <th width='91' align='center' valign='top' class='topp2'><strong><?php echo text_ranking_name; ?></strong></th>
      <th width='109' align='center' valign='top' class='topp2'><strong><?php echo text_ranking_experience; ?></strong></th>
	  <th width='54' align='center' valign='top' class='topp2'><strong><?php echo text_ranking_status; ?></strong></th>
      <th width='130' align='center' valign='top' class='topp2'><strong><?php echo text_ranking_accountprivileges; ?></strong></th>
      <th width='85' align='center' valign='top' class='topp2'><strong><?php echo text_ranking_gems; ?></strong></th>
      <th width='146' align='center' valign='top' class='topp2'><strong><?php echo text_ranking_trophies; ?></strong></th>
   </tr>
   </thead>
  <tbody>
<?PHP
$sql = "SELECT * FROM player";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {
		$i = 0;
			
		$playerID = $row['PlayerId'];
		$AccountStatus = $row['AccountStatus'];
		$AccountPrivileges = $row['AccountPrivileges'];
		$LastUpdateTime = $row['LastUpdateTime'];
		
		$avatar = $row["Avatar"];
		$avatarObj = json_decode($row["Avatar"], true);
		
		$ClanId = $avatarObj['alliance_id'];		
		$playerClan = "SELECT clan.ClanId, clan.LastUpdateTime, clan.Data FROM clan WHERE clan.ClanId=" . $ClanId;
		$playerClanResult = $conn->query($playerClan);
		
		
        if ($playerClanResult->num_rows > 0) {
			while($playerClanRow = $playerClanResult->fetch_assoc()) {
				$clanData = json_decode($playerClanRow['Data'], true);
				$playerclan = $playerClanRow['Data'];
			}
		}
		
		$players[] = array(
			"PlayerId" => $row['PlayerId'],
			"AccountStatus" => $row['AccountStatus'],
			"AccountPrivileges" => $row['AccountPrivileges'],
			"LastUpdateTime" => $row['LastUpdateTime'],
			"avatar" => $avatar,
			"avatarObj" => $avatarObj,
			"playerclan" => $playerclan,
			"clanID" => $clanData['alliance_id'],
			"alliance_name" => $clanData['alliance_name']

		);
	
	}
}
arsort($players);
foreach (@(array) $players as $key => $player) {
	$playername = $player['avatarObj']['avatar_name'];
	$th = $player['avatarObj']['townhall_level'] + 1;
	$sc = $player['avatarObj']['score'];
	$ava_level = $player['avatarObj']['avatar_level'];
	$gem = sprintf("%01.1f",$player['avatarObj']['current_gems']);
	$gems = number_format($gem,0 ," "," ");
	$alliance_id = $player['avatarObj']['alliance_id'];
	$exp = $player['avatarObj']['experience'];
	$player_region = $player['avatarObj']['region'];
	$i = $i+1;
//rankposition
//townhall
if($th == 1){ $th ='<img src="images/townhall/'.$th.'.png" alt="1" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 2){ $th ='<img src="images/townhall/'.$th.'.png" alt="2" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 3){ $th ='<img src="images/townhall/'.$th.'.png" alt="3" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 4){ $th ='<img src="images/townhall/'.$th.'.png" alt="4" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 5){ $th ='<img src="images/townhall/'.$th.'.png" alt="5" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 6){ $th ='<img src="images/townhall/'.$th.'.png" alt="6" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 7){ $th ='<img src="images/townhall/'.$th.'.png" alt="7" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 8){ $th ='<img src="images/townhall/'.$th.'.png" alt="8" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 9){ $th ='<img src="images/townhall/'.$th.'.png" alt="9" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 10){ $th ='<img src="images/townhall/'.$th.'.png" alt="10" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
if($th == 11){ $th ='<img src="images/townhall/'.$th.'.png" alt="10" width="60" height="60" title="'.$th.'"><FONT SIZE=1>'.$th.'</font>';
}
//score
$lt=array(0,400,500,600,800,1000,1200,1400,1600,1800,2000,2200,2400,2600,2800,3000,3200,3500,3800,4100,4400,4700,5000,9999);
$lt2=array(399,499,599,799,999,1199,1399,1599,1799,1999,2199,2399,2599,2799,2999,3199,3499,3799,4099,4399,4699,4999,99999);

$legend = count($lt);
for ($x = 0; $x < $legend; $x++)
{
    if (($player ['avatarObj']['score'] >= $lt[$x]) && ($player ['avatarObj']['score'] < $lt2[$x]))
    {
        $y = $x;
        $sx = '<img src="images/leagues/'.$y.'.png" alt="10" width="42" height="42">';
    }
}
//AccountPrivileges
if($player["AccountPrivileges"] == 0){ $player["AccountPrivileges"] =''.text_ranking_accountprivileges_normal.'';
}
if($player["AccountPrivileges"] == 1){ $player["AccountPrivileges"] ='<font color="red"><b>'.text_ranking_accountprivileges_moderator.'</b></font>';
}
if($player["AccountPrivileges"] == 2){ $player["AccountPrivileges"] ='<font color="red"><b>'.text_ranking_accountprivileges_highmoderator.'</b></font>';
}
if($player["AccountPrivileges"] == 3){ $player["AccountPrivileges"] ='<font color="red"><b>'.text_ranking_accountprivileges_undefined.'</b></font>';
}
if($player["AccountPrivileges"] == 4){ $player["AccountPrivileges"] ='<font color="red"><b>'.text_ranking_accountprivileges_administrator.'</b></font>';
}
if($player["AccountPrivileges"] == 5){ $player["AccountPrivileges"] ='<font color="red"><b>'.text_ranking_accountprivileges_owner.'</b></font>';
}
//AccountStatus
if($player["AccountStatus"] == 0){ $player["AccountStatus"] =''.text_ranking_accountprivileges_normal.'';
}
if($player["AccountStatus"] <> 0){ $player["AccountStatus"] ='<font color="red">'.text_ranking_status_banned.'</font>';
}
//Clan or not?
if($alliance_id == 0){ $alliance_id ='N/A';
}
if($alliance_id <> 0){ $alliance_id ='<div id="alliancetextrank"><img src="images/clan.jpg" width="20" height="19" border="0">&nbsp;'.$player["alliance_name"].'</div>';
}
echo "<tr>
      <td align='center'><div id='caja'>".$i."</div></td>
	  <td align='center' valign='bottom'>".$sx."</td>
	  <td align='center'><div id='cajalvl'>".$ava_level."</div></td>
	  <td align='center' valign='bottom'><a href='index.php?page_id=profile&id=".$player['PlayerId']."'>".$playername."</a></br>".$alliance_id."</td>
	  <td align='center' valign='bottom'>".$exp."</td>
	  <td align='center' valign='bottom'>".$player["AccountStatus"]."</td>
	  <td align='center' valign='bottom'>".$player["AccountPrivileges"]."</td>
	  <td align='center'><div id='gems'>".$gems."<span class='badgegems'></span></div></td>
	  <td align='center'><div id='trophy'>".$sc."<span class='badgetrophy'></span></div></td>
    </tr>	";
}
//	  <td align='center' valign='bottom'><a href='index.php?page_id=profile&id=".md5($key.$player['PlayerId'])."'>".$playername."</a></br>".$alliance_id."</td>

$conn->close();
?>

  </tbody>
</table> 
</div>
</div>
<div align='center'>
	<div class="panel panel-default">
		<div class="panel-body">
			<h3>For the latest news and information...</h3>
			<p>
				Join our forums at <a href="../forum/">http://cof.ftp.sh/forum/</a>
			</p>
		</div>
	</div>
</div>